<?php
session_start();
include "koneksi.php";
if ( !isset($_POST['username'], $_POST['password']) ) {
    exit('Silahkan isi username dan password lebih dahulu!');
}
if ($stmt=$conn->prepare('SELECT id, password FROM tbluser WHERE username=?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] =$_POST['username'];
            $_SESSION['id'] =$id;
            header('Location: home.php');
    } 
    else {
       echo '<script> alert ("Incorrect username and/or password!")</script>';
       header('Location: index.html');
}

}   else {
    echo '<script> alert ("Incorrect username and/or password!")</script>';
    header('Location: index.html');
    }
    $stmt->close();
}
?>
