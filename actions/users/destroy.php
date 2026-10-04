<?php
$id = isset($_GET['id']);
if (isset($_GET['id'])) {
    echo "pengguna id $id telah dihapus.";
}
else {
    echo "Tidak ada pengguna yang dihapus.";
}
