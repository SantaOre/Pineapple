<?php 
 session_start();
        $email = filter_input(INPUT_POST, 'email');
        $check = filter_input(INPUT_POST, 'check');
        
            if(empty($email)){
                $email_error ='Email address is required';
                }else{                
                    $servername = "localhost";
                    $username = "root";
                    $pass = "";
                    $database = "email";
                        //connect to db
                        $conn = new mysqli($servername, $username, $pass, $database);
                
                        if(mysqli_connect_error()){
                            die('Connect Error('. mysqli_connect_errno() .')' . mysqli_connect_error());
                        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                $email_error ='Please provide a valid e-mail address';
                            }else if(preg_match("/\b.co\b/", $email)){
                                $email_error ='We are not accepting subscriptions from Colombia emails';
                                }else if(empty($check)){
                                    $email_error ='You must accept the terms and conditions';   
                            }else{
                            $sql = "INSERT INTO email (email) Values ('$email')";
  
                            if($conn->query($sql) === TRUE){
                                header("Location: http://".$_SERVER['HTTP_HOST']."/magebit/thx_subscribing.php");
                            }else{
                                echo "Error: ". $sql . "<br>". $conn->error;
                            }
                            $conn->close();
                      }
                }
    include('index.php');
?>