document.addEventListener("DOMContentLoaded", () => {
    console.log("Portfolio site loaded!");
}); // Log a message when the DOM is fully loaded
document.querySelectorAll('nav a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector(link.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
}); // Add smooth scrolling