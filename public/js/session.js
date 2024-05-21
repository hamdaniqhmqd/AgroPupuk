// Fungsi untuk menangani event visibilitychange untuk memeriksa apakah tab sedang aktif/terlihat atau tidak/hilang.
document.addEventListener('visibilitychange', function(event) {
    if (document.visibilityState === 'hidden') {
        // jika tab di tutup maka jalankan fungsi di bawah
        sendLogoutRequest();
    }
});

// Fungsi untuk mengirim request logout
function sendLogoutRequest() {
    // Mendapatkan token CSRF dari meta tag
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Membuat data yang akan dikirim ke sistem
    var data = new FormData();
    data.append('_token', csrfToken);

    // Mengirim data menggunakan sendBeacon yang di arahkan ke /logout-on-close
    navigator.sendBeacon('/logout-on-close', data);
}
