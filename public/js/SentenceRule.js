document.querySelectorAll('input[data-capitalize="words"]').forEach(input => {
    input.addEventListener("input", function (e) {
        e.target.value = e.target.value.replace(/\b\w/g, function(char) {
            return char.toUpperCase();
        });
    });
});
