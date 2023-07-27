<?php
    include 'configuration.php';

    echo "</br>";
    if(isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

        $sql="delete from activities where id=$id";
        $result=mysqli_query($connection,$sql);
        if($result) {
            header('location:list.php');
        } else {
            die(mysqli_error($connection));
        }
    }
?>