<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        "nama" => $_POST["nama"],
        "email" => $_POST["email"],
        "subjek" => $_POST["subjek"],
        "pesan" => $_POST["pesan"]
    );
    $file = fopen("data_kontak.txt", "a");
    fwrite($file,"Nama: " . $data["nama"] . "\n");
    fwrite($file,"Email: " . $data["email"] . "\n");
    fwrite($file,"Subjek: " . $data["subjek"] . "\n");
    fwrite($file,"Pesan: " . $data["pesan"] . "\n");
    echo "Pesan berhasil dikirim";
}
?>