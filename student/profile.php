<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
if (isset($_POST['Submit'])) 
{
//database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ShiftingGears";


    $con = mysqli_connect('localhost', 'root', '','tbl_student');



    // get the post records
    $txtFname = $_POST['txtFname'];
    $txtLname = $_POST['txtLname'];
    $txtDOB = $_POST['txtDob'];
    $txtEmail = $_POST['txtEmail'];
    $txtContact = $_POST['txtContact'];
    $txtUsername = $_POST['txtUsername'];
    $txtPassword = $_POST['txtPassword'];

    if ($conn-> connect_error) {
        //stop executing the code and echo error
    die("Connection failed: " . $conn-> connect_error);
    } else{
        // echo "connection works";
        // //encrypt password
        // //use the php password_hard function
        $encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);
    }  

    // database insert SQL code
    $sql = "INSERT INTO `tbl_student` (`Id`, `Lname`, `Fname`, `DOB`, `Email`,`Contact`,`Username`,`Password`) VALUES ('0', '$txtLname', '$txtFname', '$txtDOB','$txtEmail','$txtContact','$txtUsername','$txtPassword')";

    // insert in database
    $rs = mysqli_query($con, $sql);

    if ($conn->query($sql)) {
        echo "wow";
      
        //redirect to homepage
        // header("Location: index.html");
        // exit();
    
    } else {
        echo "failed";
        // echo error but continue executing the code to close the session
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // close database connection
    $conn->close();

}
?>

