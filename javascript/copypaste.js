<script>
// Remove alert calls for better user experience
document.onkeydown = function(e) {
    if (
        e.ctrlKey && (e.key === 'u' || e.key === 'U' || e.key === 's' || e.key === 'S') ||
        e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'i'))
    ) {
        // console.log("Developer tools or source view attempt detected.");
        return false; // Prevent default action for these keys
    }
};

document.addEventListener('contextmenu', event => {
    event.preventDefault(); // Prevent right-click context menu
});
</script>
