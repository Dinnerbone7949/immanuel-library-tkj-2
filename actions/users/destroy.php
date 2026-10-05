<?php
$id = isset($_GET['id']);
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "pengguna id $id telah dihapus.";
}
else {
    echo "Tidak ada pengguna yang dihapus.";
}
