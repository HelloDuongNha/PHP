document.querySelectorAll('input').forEach((input, index, inputs) => {    
    input.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowRight') {
            if (index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        }

        if (e.key === 'ArrowLeft') {
            if (index > 0) {
                inputs[index - 1].focus();
            }
        }
    });
});
