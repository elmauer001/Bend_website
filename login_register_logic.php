<?php
session_start();
ob_start();
require_once 'connection.php';

// initializing variables
$errors = array();
$error = false;

// connect to the database
$db = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');

//LOGIN USER
if (isset($_POST['btn-login'])) {
    // prevent sql injections / clear user invalid inputs
    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    if (!$error) {
        $res = mysqli_query($conn, "SELECT id, ime, prezime,type FROM users WHERE password='$password' AND username = '$username'");
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $_SESSION['user'] = $row['id'];
            $_SESSION['username'] = $row['ime'];
            $_SESSION['surname'] = $row['prezime'];

            if ($row['type'] == 'admin'){
                header("Location: dashboard.php");
            }
            else {
                header("Location: kalendar.php");
            }
        } else {
            $errMSG = "Unijeli ste krivo ime ili lozinku, pokušajte ponovno...";
        }
    }
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $ime = mysqli_real_escape_string($db, $_POST['ime']);
    $prezime = mysqli_real_escape_string($db, $_POST['prezime']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) { array_push($errors, "Lozinke se ne podudaraju! Pokušajte ponovno."); }

    // Check if user exists
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) { array_push($errors, "Korisničko ime već postoji!"); }
        if ($user['email'] === $email) { array_push($errors, "E-mail već postoji!"); }
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO users (ime, prezime, username, email, password)
        VALUES('$ime', '$prezime','$username','$email', '$password_1')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Uspjesno ste registrirani!";
        header('location: succesRegistration.php');
    } else {
        $errMSG = "Niste popunili sva potrebna polja.";
    }
}
?>
