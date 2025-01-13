<?php
include('../model/usermodel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($name) || empty($contact_no) || empty($username) || empty($password)) {
        echo "All fields are required.";
    } else {
        if (checkIfUsernameExists($username)) {
            echo "Username already exists!";
        } else {
            if (addUser($name, $contact_no, $password, $username)) {
                echo "Registration successful! <br>
                     <a href='../view/login.html'>Login Page</a>";
            } else {
                echo "Error in registration.";
            }
        }
    }
}
?>
