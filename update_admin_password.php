<?php
include 'dbconnect.php';

$newPassword = password_hash('nurulazizah', PASSWORD_DEFAULT);
$userid = 1;

$updatePassword = mysqli_query($conn, "UPDATE login SET password='$newPassword' WHERE userid='$userid'");

if ($updatePassword) {
    echo "Password berhasil diupdate.";
} else {
    echo "Gagal mengupdate password.";
}
?>
