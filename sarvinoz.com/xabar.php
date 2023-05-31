<?php 
include'connect.php';
if(isset($_POST['saqlash'])){
$ism = $_POST['ism'];
$telefon = $_POST['telefon']; 
$email = $_POST['email'];
$xabar = $_POST['xabar'];
$sql = "INSERT INTO xabar(ism, pochta, telefon, xabar)
     VALUES ('{$ism}', '{$email}','{$telefon}', '{$xabar}')";
    if ($connection->query($sql)) {
        ?>
        <script !src="">alert('Saqlandi')</script>
      <?php
    } else echo 'xato!' . $connection->error;

}
?>