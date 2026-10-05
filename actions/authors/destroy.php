<?php
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    echo "penulis id $id telah dihapus.";
}
else {
    echo "Tidak ada penulis yang dihapus.";
}