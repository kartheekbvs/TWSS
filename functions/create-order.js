// netlify/functions/create-order.js

const Razorpay = require('razorpay');

// The single source of truth for all product information
const products = {
    "c_notes": { name: "C Language Notes", price: 900 },
    "cpp_notes": { name: "C++ Language Notes", price: 900 },
    "java_notes": { name: "JAVA Language Notes", price: 900 },
    "python_notes": { name: "Python Language Notes", price: 900 },
    "sql_notes": { name: "SQL Language Notes", price: 900 },
    "dsa_analytics": { name: "DSA + Data Analytics Plan", price: 15900 },
    "dsa_fullstack": { name: "DSA + Full-Stack Plan", price: 14900 }
};

exports.handler = async (event) => {
    // Initialize Razorpay with secrets from Netlify's environment variables
    const razorpay = new Razorpay({
        key_id: process.env.RAZORPAY_KEY_ID,
        key_secret: process.env.RAZORPAY_KEY_SECRET,
    });

    const { productId } = JSON.parse(event.body);
    const product = products[productId];

    if (!product) {
        return { statusCode: 404, body: JSON.stringify({ error: 'Product not found' }) };
    }

    const options = {
        amount: product.price,
        currency: "INR",
        receipt: `receipt_order_${new Date().getTime()}`,
    };

    try {
        const order = await razorpay.orders.create(options);
        return {
            statusCode: 200,
            body: JSON.stringify({
                orderId: order.id,
                productName: product.name,
                amount: order.amount,
                key: process.env.RAZORPAY_KEY_ID
            }),
        };
    } catch (error) {
        console.error("Error creating order:", error);
        return { statusCode: 500, body: JSON.stringify({ error: "Error creating order" }) };
    }
};
