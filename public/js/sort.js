// Mengambil semua tombol produk
const buttons = document.querySelectorAll('.btn-success');

// Loop melalui setiap tombol dan menambahkan event listener
buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Mendapatkan ID kotak yang sesuai dengan tombol yang diklik
        const boxId = button.getAttribute('data-box-id');

        // Menyembunyikan semua kotak
        const allBoxes = document.querySelectorAll('.kotak-luar');
        allBoxes.forEach(box => {
            // Menyembunyikan semua kotak kecuali yang memiliki ID yang sesuai
            if (box.id === boxId) {
                box.style.display = 'block';
            } else {
                box.style.display = 'none';
            }
        });
    });
});
