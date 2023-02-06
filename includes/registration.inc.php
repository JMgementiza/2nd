<?php
session_start();
require_once '../connection.php';


if (isset($_POST['register']))
    {
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $mname = mysqli_real_escape_string($con, $_POST['mname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $dateofbirth = mysqli_real_escape_string($con, $_POST['dateofbirth']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $age = mysqli_real_escape_string($con, $_POST['age']);
        $blood_type = mysqli_real_escape_string($con, $_POST['blood_type']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);


        $email_query = "SELECT * FROM patient WHERE email='$email'";
        $email_query_run = mysqli_query($con, $email_query);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            //Check if email is valid
            $_SESSION['status'] = "Email already taken! Please try another one.";
            $_SESSION['status_code'] = "warning";
            header("Location: ../patient-registration/register.php?registration=invalidemail".$email);
            
            exit();
        }
        else 
        {
            //Check if inputs are empty
            if (empty($fname) || empty($lname) || empty($dateofbirth)|| empty($age)  || empty($gender) || empty($blood_type) || empty($address) || empty($email) || empty($contact_no)) {
            $_SESSION['status'] = "Fill in all fields!";
            $_SESSION['status_code'] = "warning";
            header("Location: ../patient-registration/register.php?registration=emptyfields"."&fname=".$fname."&mname=".$mname."&lname=".$lname."&age=".$age."&email=".$email."&contact=".$contact_no);
            exit();
            }
            //Check if characters are valid
            else if (!preg_match("/^[0-9]*$/", $age)) {
                $_SESSION['status'] = "You have entered invalid character!";
                $_SESSION['status_code'] = "error";
                header("Location: ../patient-registration/register.php?registration=invalidcharacters".$age);
                exit();
            }

            //Check if characters are valid 
            else if (!preg_match("/^[0-9]*$/", $contact_no)) {
            $_SESSION['status'] = "You have entered invalid character!";
            $_SESSION['status_code'] = "error";
            header("Location: ../patient-registration/register.php?registration=invalidcharacters".$contact_no);
            exit();
            }

            else {
                $query = "INSERT INTO patient (fname,mname,lname,dateofbirth,age,gender,blood_type,address,email,contact_no) VALUES 
                ('$fname','$mname','$lname','$dateofbirth','$age','$gender','$blood_type','$address','$email','$contact_no') ";
                $query_run = mysqli_query($con, $query);

                $_SESSION['status'] = "Patient Successfully Registered";
                $_SESSION['status_code'] = "success";
                header("Location: ../patient-registration/register.php?registration=success");
                exit();
                }
        }
}