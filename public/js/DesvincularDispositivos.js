document.querySelectorAll('.unlink-button').forEach(button => {
    button.addEventListener('click', () => {
        alert('Desvincular este dispositivo');
    });
});

document.querySelector('.unlink-all-button').addEventListener('click', () => {
    alert('Desvincular todos los dispositivos');
});
