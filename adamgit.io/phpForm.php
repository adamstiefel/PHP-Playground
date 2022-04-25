<?php session_start();


    if (isset($_POST['Submit'])) { 
    
    $_SESSION['sess_user_dob'] = $_POST['date_of_birth'];
 } 
?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <form action="" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        DOB: <input type="date" name="date_of_birth" id="date_of_birth"><br>
        <input name="Submit" type="submit">
    </form>


    <strong><?php echo $_SESSION['sess_user_dob'];?></strong>

</body>

</html>