<?php
    include('connection.php');
    $error = "";

    if(isset($_POST['registerBtn']))
    {
        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $uname = mysqli_real_escape_string($connection,$_POST['uname']);
        $address = mysqli_real_escape_string($connection,$_POST['address']);
        $tp = mysqli_real_escape_string($connection,$_POST['tp']);
        $hospital = mysqli_real_escape_string($connection,$_POST['hospital']);
        $blood_type = mysqli_real_escape_string($connection,$_POST['blood_type']);
        $weight = mysqli_real_escape_string($connection,$_POST['weight']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $pass = sha1('123');
        
        $query = "INSERT INTO user(email,pass,name,uname,tp,hospital,role) values('$email','$pass','$name','$uname','$tp','$hospital','user')";
        $queryCheck = "SELECT * FROM user WHERE email='$email'";

        $rCheck = mysqli_query($connection,$queryCheck);
        if($rCheck)
        {

                if(mysqli_num_rows($rCheck)==0)
                {
                    // header('Location: ../admin.php?sec=1');
                    $rinsert = mysqli_query($connection,$query);
                    if($rinsert)
                    {
                        $query1 = "UPDATE donor set address='$address',blood='$blood_type',weight='$weight' WHERE email='$email'";
                        $queryCheck1 = mysqli_query($connection,$query1);
                        if($queryCheck1)
                        {
                            header('Location: ../admin.php?sec=1');
                        }else
                        {
                            echo "query 2 not added";
                        } 

                    }else
                    {
                        echo "not run first query";
                    }

                }
                else header('Location: ../admin.php?sec=1&err=ee');
        }
        else
        {
            $error = "rcheck query ";            
        }
        echo $error;

        
    }
?>