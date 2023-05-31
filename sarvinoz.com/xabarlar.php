<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
<table class="table table-hover" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Ismi</th>
            <th>Pochtasi </th>
            <th>Telefoni</th>
            <th>xabari</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM xabar";
        $result = $connection->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc())

            {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['ism']?></td>
                    <td><?php echo $row['pochta']?></td>
                    <td><?php echo $row['telefon']?></td>
                    <td><?php echo $row['xabar']?></td>
                </tr>
            <?php }}?>
        </tbody>
    </table>
</body>
</html>