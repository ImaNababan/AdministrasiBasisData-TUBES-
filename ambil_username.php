<?php
// Koneksi ke database
include 'koneksi.php';

if (isset($_GET['id_user'])) {
    $id_user = $koneksi->real_escape_string($_GET['id_user']);

    $query = "SELECT username FROM petugas WHERE id_user = '$id_user'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['username']; // buat kirim username ke JavaScript
    } else {
        echo ''; 
    }
} else {
    echo '';
}
?>
