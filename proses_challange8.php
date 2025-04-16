<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = trim($_POST["nama"]);
    $email  = trim($_POST["email"]);
    $alamat = trim($_POST["pengiriman"]);
    $produk = trim($_POST["produk"]);
    $jumlah = (int) $_POST["jumlah"];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email tidak valid. Contoh: hmalanafa@gm";
        exit;
    }

    // Validasi jumlah produk
    if ($jumlah <= 0) {
        echo "Jumlah produk harus lebih dari 0.";
        exit;
    }

    // Simpan data ke file pesanan.txt
    $data = "nama: $nama\nEmail: $email\nAlamat: $alamat\nProduk: $produk\nJumlah: $jumlah\n-----------------------\n";
    file_put_contents("pesanan.txt", $data, FILE_APPEND);

    echo "<h3>Pesanan berhasil disimpan. Terima kasih, $nama!</h3>";
    echo '<button onclick="window.history.back();">Kembali</button>'; // Tombol Kembali

} else {
    echo "Form belum dikirim.";
}
?>
