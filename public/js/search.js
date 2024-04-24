document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('search-input');
    const searchIcon = document.getElementById('search-icon');
    const kotakLuarDivs = document.querySelectorAll('.kotak-luar');

    // Fungsi untuk melakukan pencarian produk
    function searchProducts() {
        const searchText = searchInput.value.toLowerCase();
        
        kotakLuarDivs.forEach(function(div) {
            const productName = div.querySelector('h4').textContent.toLowerCase();
            
            // Memeriksa apakah nama produk mengandung teks pencarian
            if (productName.includes(searchText)) {
                div.style.display = 'block'; // Menampilkan kotak jika cocok
            } else {
                div.style.display = 'none'; // Menyembunyikan kotak jika tidak cocok
            }
        });
    }

    // Event listener untuk tombol pencarian
    searchIcon.addEventListener('click', searchProducts);
});
