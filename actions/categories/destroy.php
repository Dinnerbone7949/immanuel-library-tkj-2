<?php
$id = isset($_GET['id']);
if (isset($_GET['id'])) {
    echo "kategori id $id telah dihapus.";
}
else {
    echo "Tidak ada kategori yang dihapus.";
}