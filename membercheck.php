<?php


        //variable


                if (isset($_POST["username"])) {
                        $user = $_POST["username"];
                        
                        if (isset($_POST["password"])) {
                                $pass = hash('md5',$_POST["password"]);
                        }
                }


                include 'php/dbconnect.php';

                //database-login-check
                $check = "select username, password from login WHERE username = '$user' AND password = '$pass';";
                echo $check;
                $result = mysqli_query($conn, $check);
                $num = mysqli_num_rows($result);

                if ($num == 1) {

                        $getdata = "select memberFK from login WHERE username = '$user';";
                        $result = mysqli_query($conn, $getdata)
                        or die ("Fehlerhafte Abfrage");
                        $zeile = mysqli_fetch_assoc($result);



                        $userID = $zeile['memberFK'];

                        $conn->close();


                        session_start();

                        //$_SESSION['userID'] = $userID;
                        $_SESSION['userID'] = array("UserID"=>$userID, "UserName"=>$user);


                        header('Location: index.php');
                } else {
                header('Location: loginfailed.php');
                }


?>
