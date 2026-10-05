<?php
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    echo "kategori id $id telah dihapus.";
}
else {
    echo "Tidak ada kategori yang dihapus.";
}