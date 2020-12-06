<?php
$mysqli = NEW MySQLI('localhost', 'root', '', 'email');

    /////////10 records in 1 page
        //check for set page
        isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        $p_records = 10;
        //check for page 1  
        if($page > 1){
            $start = ($page * $p_records) - $p_records;
        }else{
            $start = 0;
        }
        $resultSet = $mysqli->query("SELECT id FROM email"); 
        $numRows = $resultSet->num_rows; //get total records
        $totalPages = $numRows / $p_records; //get total num of page
        $resultSet = $mysqli->query("SELECT * FROM email LIMIT $start, $p_records"); //query results
            echo
            "<table>
                    <tr>
                    <th>Email</th>
                    <th>Register date</th>";
            

            while($rows = $resultSet->fetch_assoc()) {
                    $email = $rows['email'];
                    $reg_d = $rows['register_date'];

                echo 
                    "<tr>        
                    <td>$email</td>
                    <td>$reg_d</td>
                    </tr>";
                }
            echo
            "</table>";

for($x = 1; $x <= $totalPages + 1; $x++){
    echo "<a href='?page=$x'>$x</a>";
}

?>