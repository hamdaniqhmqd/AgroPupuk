document.addEventListener("DOMContentLoaded", function() {
    const kotakLuarDivs = document.querySelectorAll('.kotak-luar');

    const filterButtons = document.querySelectorAll('.filter-btn');
    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const selectedJenis = button.getAttribute('data-box-id');
            kotakLuarDivs.forEach(function(div) {
                if (div.id === selectedJenis) {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            });
        });
    });
});
