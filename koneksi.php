<?php

$conn = mysqli_connect("localhost", "root", "", "lagu");
if(!$conn){
    echo "Koneksi Gagal";
    die();
}else{
    echo"";
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM lagu WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

?>