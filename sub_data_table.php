<!DOCTYPE html>
<html>
    <head>
        <title>Saved data</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
                padding: 5px;
            }
            input{
                padding: 5px 20px 5px 20px;
            }
        </style>
        </head>
    <body>

    <form action="" method="post"><br>
        <label>Search Data: </label>
        <input type="text" name="search" placeholder="Search for email address..." >
        <input type="submit" name="submit" value="Filter and Back">    
        <br>  <br>   
    <!-- <button type="submit" name="button"> NOT gmail</button>
    <button type="submit" name="button1"> NOT yahoo</button>
    <button type="submit" name="button2"> NOT inbox</button>
    <button type="submit" name="button3"> All others</button> -->
    </form>

<?php
//connect with mysql
$mysqli = NEW MySQLI('localhost', 'root', '', 'email');

    if(isset($_GET['order'])){
        $order = $_GET['order'];
    }else{
        $order = 'email';
    }

    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }else{
        $search = '';
    }

    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
    }else{
        $sort = 'ASC';
    }

        if(isset($_POST['submit'])){
            $search = $mysqli->real_escape_string($_POST['search']);
            $resultSet = $mysqli->query("SELECT * FROM email WHERE `email` LIKE '%".$search."%'");
        }else{
            if($search != ""){
                $query = "SELECT * FROM email  WHERE `email` LIKE '%".$search."%' ORDER BY ".$order." ".$sort;
                $resultSet = $mysqli->query($query);
            }else{
                $resultSet = $mysqli->query("SELECT * FROM email ORDER BY $order $sort");
                }
                    $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
                }

// //Buttons
// if(isset($_POST['button'])){$resultSet = $mysqli->query("SELECT * FROM `email` WHERE `email` NOT LIKE '%gmail.com%'");}
// if(isset($_POST['button1'])){$resultSet = $mysqli->query("SELECT * FROM `email` WHERE `email` NOT LIKE '%yahoo.com%'");}
// if(isset($_POST['button2'])){$resultSet = $mysqli->query("SELECT * FROM `email` WHERE `email` NOT LIKE '%inbox.lv%'");}
// if(isset($_POST['button3'])){$resultSet = $mysqli->query("SELECT * FROM `email` WHERE `email` NOT LIKE '%gmail.com%' AND `email` NOT LIKE '%inbox.lv%' AND `email` NOT LIKE '%yahoo.com%'");}

        echo
        "<table>
                <tr>
                <th><a href='?order=email&search=".$search."&sort=$sort'>Email</a></th>
                <th><a href='?order=register_date&search=".$search."&sort=$sort'>Register date</a></th>
            <th>Delete</th>";

        while($rows = $resultSet->fetch_assoc()) {
                $email = $rows['email'];
                $reg_d = $rows['register_date'];
                $id = $rows['ID'];

            echo 
                "<tr>        
                <td>$email</td>
                <td>$reg_d</td>
                <td ><a href=delete.php?id=".$rows['ID']."> Delete </a></td>
                </tr>";
            }
        echo
        "</table>";
if($resultSet->num_rows > 0){
}else{
    echo "No result!";
}
?>
    </body>
</html>

