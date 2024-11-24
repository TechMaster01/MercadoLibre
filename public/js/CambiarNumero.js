document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone-input');
    const submitBtn = document.getElementById('submit-btn');
    const countryCodeSelect = document.getElementById('country-code');

    phoneInput.addEventListener('input', function(e) {

        const phoneNumber = e.target.value.replace(/\D/g, '').slice(0, 10);
        e.target.value = phoneNumber;


        submitBtn.disabled = phoneNumber.length !== 10;
    });


    countryCodeSelect.addEventListener('change', function() {
        const selectedCode = countryCodeSelect.value;
        phoneInput.placeholder = `Ej: ${selectedCode} Código de área + número`;
    });
});
