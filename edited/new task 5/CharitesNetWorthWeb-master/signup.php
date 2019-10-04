<?php session_start();

include 'includes/db_connection.php';
include 'includes/functions.php';

if (isset($_POST['signup_submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username']
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass_confirm = $_POST['password_confirm'];

    $firstname = mysqli_real_escape_string($con, $firstname);
    $lastname = mysqli_real_escape_string($con, $lastname);
    $username = mysqli_real_escape_string($con, $username);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    $password_confirm = mysqli_real_escape_string($con, $pass_confirm);
    
    //Validation
    //check if email exists
    $email_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $email_count = mysqli_num_rows($email_query);
    if (!validateEmail($email)) {
        addAlert('error', 'Invalid Email address');
        echo "<script>document.location='signup.html'</script>";
    } else if (strlen($password) < 5) {
        addAlert('error', 'Password must be atleast Five (5) characters');
        echo "<script>document.location='signup.html'</script>";
    } else if ($password != $confirm_password) {
        addAlert('error', 'Passwords dont Match');
        echo "<script>document.location='signup.html'</script>";
    } else if ($email_count > 0) {
        addAlert('error', 'Email address already exists!');
        echo "<script>document.location='signup.html'</script>";
    } else {
        $res = mysqli_query($con, "INSERT INTO users SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email', password = '$password',") or die(mysqli_error($con));
        if ($res) {
            addAlert('success', 'Registration Successful! Please Login');
            echo "<script type='text/javascript'>document.location='signup.html'</script>";
        } else {
            addAlert('error', 'Something went wrong!');
            echo "<script type='text/javascript'>document.location='signup.html'</script>";
        }
    }
} else {
    header('Location index.html');
}
?>
