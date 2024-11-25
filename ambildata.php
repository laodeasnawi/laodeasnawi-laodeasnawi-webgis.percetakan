<?php
include "koneksi.php"; // Pastikan file ini membuat koneksi database

// Gunakan variabel koneksi dari koneksi.php
$Q = mysqli_query($koneksi, "SELECT * FROM jasapercetakan") or die(mysqli_error($koneksi));

if ($Q) {
    $posts = array();
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(array('results' => $posts), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo $data;
} else {
    echo json_encode(array('error' => 'Query gagal dijalankan'));
}
?>
