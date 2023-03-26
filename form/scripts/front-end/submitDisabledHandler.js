const termsCheckbox = document.querySelector('#agreement');

const submitButton = document.querySelector('#submit');
const resetButton = document.querySelector('#reset');

if (termsCheckbox && resetButton) {
    termsCheckbox.addEventListener('change', () => {
        submitButton.disabled = !termsCheckbox.checked ? true : false;
    })

    resetButton.addEventListener('click', () => {
        termsCheckbox.checked = false;
        submitButton.disabled = true;
    });
};