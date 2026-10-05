<?php
$id = isset($_GET['id']);
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "buku id $id telah dihapus.";
}
else {
    echo "Tidak ada buku yang dihapus.";
}