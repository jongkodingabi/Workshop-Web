<?php
session_start();
include "koneksi.php";

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input dari potensi serangan SQL injection
function clean_input($data) {
    global $conn;
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data);
}

// Fungsi untuk hash password menggunakan bcrypt
function hash_password($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Fungsi untuk memeriksa kesamaan password dengan hash
function verify_password($password, $hash) {
    return password_verify($password, $hash);
}

// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = clean_input($_POST["username"]);
    $password = clean_input($_POST["password"]);
    $confirm_password = clean_input($_POST["confirm_password"]);

    // Validasi sederhana
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $_SESSION["error"] = "Harap isi semua kolom.";
        header("Location: register.php");
        exit();
    } elseif ($password != $confirm_password) {
        $_SESSION["error"] = "Konfirmasi password tidak cocok.";
        header("Location: register.php");
        exit();
    }

    // Cek apakah username atau email sudah digunakan
    $check_username_query = "SELECT * FROM tbluser WHERE username='$username'";
    $result_username = $conn->query($check_username_query);

    if ($result_username->num_rows > 1) {
        $_SESSION["error"] = "Username sudah digunakan. Silakan pilih username lain.";
        header("Location: register.php");
        exit();
    }
    // Hash password sebelum disimpan ke database
    $hashed_password = hash_password($password);

    // Simpan user ke database
    $insert_query = "INSERT INTO tbluser (username, password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($insert_query) === TRUE) {
        $_SESSION["success"] = "Registrasi berhasil! Silakan login.";
        header("Location: index.html");
        exit();
    } else {
        $_SESSION["error"] = "Error: " . $conn->error;
        header("Location: register.php");
        exit();
    }
}

// Tutup koneksi ke database
$conn->close();
?>