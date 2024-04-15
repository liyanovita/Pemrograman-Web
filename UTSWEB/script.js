$(document).ready(function() {
    // Ketika tombol "Contact me" di klik
    $(".hire-btn").click(function() {
        // Tampilkan pesan atau lakukan tindakan lainnya
        alert("Contact me button clicked");
        // Misalnya, menampilkan formulir kontak
        $('#contactForm').show();
    });

    // Ketika tombol "Portfolio" di klik
    $(".down-cv").click(function() {
        // Tampilkan pesan atau lakukan tindakan lainnya
        alert("Portfolio button clicked");
        // Misalnya, mengarahkan pengguna ke halaman portofolio
        window.location.href = "portfolio.html";
    });
});
