// Mengambil semua kotak luar
const boxes = document.querySelectorAll('.kotak-luar');

// Loop melalui setiap kotak luar dan menambahkan event listener
boxes.forEach(box => {
    box.addEventListener('click', () => {
        // Mendapatkan URL dari atribut data-url
        const url = box.getAttribute('data-url');

        // Navigasi pengguna ke halaman yang ditentukan
        window.location.href = url;
    });
});
