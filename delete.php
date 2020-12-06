<?php
    //connect with mysql
    $con = mysqli_connect("localhost", "root", "", "email");
    //Select Database
        mysqli_select_db($con,'email');
    //Select Query
        $sql = "DELETE FROM email WHERE id='$_GET[id]'";
    //Execute the query
        if(mysqli_query($con,$sql)){
            header("refresh:1; url=sub_data_table.php");
        }else{
            echo 'Error';
        }
?>