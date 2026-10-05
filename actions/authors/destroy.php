<?php
$id = isset($_GET['id']);
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "penulis id $id telah dihapus.";
}
else {
    echo "Tidak ada penulis yang dihapus.";
}