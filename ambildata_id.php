<?php
include "koneksi.php";

// Pastikan $id didefinisikan sebelumnya, misalnya dari input pengguna
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Gunakan intval untuk menghindari SQL Injection

if ($id === 0) {
    die(json_encode(array('error' => 'ID tidak valid')));
}

// Query ke database menggunakan prepared statements
$stmt = $koneksi->prepare("SELECT * FROM jasapercetakan WHERE id_perusahaan = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Cek apakah data ditemukan
if ($result->num_rows > 0) {
    $posts = array();
    while ($post = $result->fetch_assoc()) {
        $posts[] = $post;
    }
    $data = json_encode(array('results' => $posts));
    echo $data; // Menampilkan hasil JSON
} else {
    echo json_encode(array('error' => 'Data tidak ditemukan.'));
}

// Menutup prepared statement
$stmt->close();
?>
