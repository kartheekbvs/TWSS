// /frontend/script.js

document.addEventListener("DOMContentLoaded", () => {
    const plansContainer = document.getElementById("plans-container");
    const backendUrl = "http://localhost:3000"; // The address of your running backend

    // Product info defined on the frontend for display purposes
    const products = {
        "c_notes": { name: "C Language Notes", price: 900, details: ["C NOTES (HAND WRITTEN)", "C E-NOTES"] },
        "cpp_notes": { name: "C++ Language Notes", price: 900, details: ["C++ NOTES (HAND WRITTEN)", "C++ E-NOTES"] },
        "java_notes": { name: "JAVA Language Notes", price: 900, details: ["JAVA NOTES (HAND WRITTEN)", "JAVA E-NOTES"] },
        "python_notes": { name: "Python Language Notes", price: 900, details: ["PYTHON NOTES (HAND WRITTEN)", "PYTHON E-NOTES"] },
        "sql_notes": { name: "SQL Language Notes", price: 900, details: ["SQL NOTES (HAND WRITTEN)", "SQL E-NOTES"] },
        "dsa_analytics": { name: "DSA + Data Analytics Plan", price: 15900, details: ["DSA + DATA ANALYTICS BUNDLE"] },
        "dsa_fullstack": { name: "DSA + Full-Stack Plan", price: 14900, details: ["DSA + FULL-STACK BUNDLE"] }
    };

    // Create product cards dynamically
    plansContainer.innerHTML = ""; // Clear "Loading..." message
    Object.entries(products).forEach(([id, product]) => {
        const detailsHtml = product.details.map(detail => `<li><i class="fas fa-play-circle"></i> ${detail}</li>`).join('');
        const card = document.createElement("div");
        card.className = "unit-card";
        card.innerHTML = `
            <div class="unit-header"><h3>${product.name}</h3></div>
            <div class="unit-content">
                <ul>${detailsHtml}</ul>
                <button class="btn buy-btn" data-product-id="${id}">Buy for ₹${product.price / 100}</button>
            </div>`;
        plansContainer.appendChild(card);
    });

    // Add click listeners to all "Buy" buttons
    document.querySelectorAll('.buy-btn').forEach(button => {
        button.addEventListener('click', async (e) => {
            const productId = e.target.getAttribute('data-product-id');
            const originalButtonText = e.target.innerHTML;
            e.target.innerHTML = 'Processing...';
            e.target.disabled = true;

            try {
                // Step 1: Call backend to create a secure order
                const orderResponse = await fetch(`${backendUrl}/create-order`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ productId })
                });
                const orderDetails = await orderResponse.json();

                // Step 2: Open Razorpay checkout with details from backend
                const options = {
                    key: orderDetails.key,
                    amount: orderDetails.amount,
                    order_id: orderDetails.orderId,
                    name: "TWSS",
                    description: `Purchase of ${orderDetails.productName}`,
                    handler: async (response) => {
                        // Step 3: Send payment details to backend for verification
                        const verifyResponse = await fetch(`${backendUrl}/verify-payment`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ ...response, productId })
                        });
                        const verifyResult = await verifyResponse.json();

                        if (verifyResult.status === 'success') {
                            alert("✅ Payment successful and verified! Redirecting...");
                            window.location.href = verifyResult.redirectUrl;
                        } else {
                            alert("❌ Payment verification failed. Please contact support.");
                            e.target.disabled = false;
                            e.target.innerHTML = originalButtonText;
                        }
                    },
                    modal: { ondismiss: () => { e.target.disabled = false; e.target.innerHTML = originalButtonText; }},
                    theme: { color: "#3498db" }
                };
                
                const rzp = new Razorpay(options);
                rzp.open();

            } catch (error) {
                alert("An error occurred. Please try again.");
                e.target.disabled = false;
                e.target.innerHTML = originalButtonText;
            }
        });
    });
});
