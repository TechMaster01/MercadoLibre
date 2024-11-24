document.querySelector('.email-form input').addEventListener('input', function() {
    const button = document.querySelector('.email-form button');
    if (this.value) {
        button.removeAttribute('disabled');
    } else {
        button.setAttribute('disabled', 'disabled');
    }
});