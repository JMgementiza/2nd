<?php
session_start();
require_once '../connection.php';


$patient_id = intval($_POST['viewid']);
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

// if($rows = mysqli_query($con, "UPDATE patient SET fname = '$fname', mname = '$mname', lname = '$lname', dateofbirth = '$dateofbirth', age = '$age', gender = '$gender', blood_type = '$blood_type', address = '$address', email = '$email', contact_no = '$contact_no' WHERE patient_id = $patient_id")){
//     $_SESSION['status'] = "Patient Information Edited Successfully";
//     $_SESSION['status_code'] = "success";
//     header("Location: ../patient-registration/register.php?patientUpdate=success");
//     exit();
// }
// else{
//     header("Location: ../patient-registration/register.php?patientUpdate=failed");
//     exit();
// }
// exit();

            //Check if inputs are empty
            if (empty($fname) || empty($lname) || empty($dateofbirth)|| empty($age)  || empty($gender) || empty($blood_type) || empty($address) || empty($email) || empty($contact_no)) {
            $_SESSION['status'] = "Fill in all fields!";
            $_SESSION['status_code'] = "warning";
            header("Location: ../patient-registration/register.php?error=emptyfields");
            exit();
            }
            //Check if characters are valid
            else if (!preg_match("/^[0-9]*$/", $age)) {
                $_SESSION['status'] = "You have entered invalid character!";
                $_SESSION['status_code'] = "error";
                header("Location: ../patient-registration/register.php?error=invalidcharacters");
                exit();
            }

            //Check if characters are valid 
            else if (!preg_match("/^[0-9]*$/", $contact_no)) {
            $_SESSION['status'] = "You have entered invalid character!";
            $_SESSION['status_code'] = "error";
            header("Location: ../patient-registration/register.php?error=invalidcharacters");
            exit();
            }

            else {
                $query = "UPDATE patient SET fname = '$fname', mname = '$mname', lname = '$lname', dateofbirth = '$dateofbirth', age = '$age', gender = '$gender', blood_type = '$blood_type', address = '$address', email = '$email', contact_no = '$contact_no' WHERE patient_id = '$patient_id' ";
                $query_run = mysqli_query($con, $query);

                $_SESSION['status'] = "Patient Information Edited Successfully";
                $_SESSION['status_code'] = "success";
                header("Location: ../patient-registration/register.php?patientUpdate=success");
                exit();
                }