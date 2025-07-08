// FAQ functionality
function showCategory(categoryId) {
    // Hide all category contents
    document.querySelectorAll('.faq-category-content').forEach(content => {
        content.classList.remove('active');
    });

    // Remove active class from all category buttons
    document.querySelectorAll('.faq-category').forEach(button => {
        button.classList.remove('active');
    });

    // Show selected category
    document.getElementById(categoryId).classList.add('active');

    // Add active class to clicked button
    event.target.classList.add('active');
}

function toggleFaq(questionElement) {
    const faqItem = questionElement.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const toggle = questionElement.querySelector('.faq-toggle');

    // Close all other FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('active');
            item.querySelector('.faq-toggle').textContent = '+';
        }
    });

    // Toggle current FAQ item
    if (faqItem.classList.contains('active')) {
        faqItem.classList.remove('active');
        toggle.textContent = '+';
    } else {
        faqItem.classList.add('active');
        toggle.textContent = '−';
    }
}

// Initialize FAQ functionality
document.addEventListener('DOMContentLoaded', function () {
    // Add click handlers to FAQ questions
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function () {
            toggleFaq(this);
        });
    });
});