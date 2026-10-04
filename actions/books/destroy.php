<?php
$id = isset($_GET['id']);
if (isset($_GET['id'])) {
    echo "buku id $id telah dihapus.";
}
else {
    echo "Tidak ada buku yang dihapus.";
}