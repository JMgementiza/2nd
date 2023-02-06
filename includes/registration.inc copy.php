<?php
session_start();
require_once '../connection.php';


    if(is_null($_POST['fname']) || is_null($_POST['mname']) || is_null($_POST['lname']) || is_null($_POST['dateofbirth']) || is_null($_POST['gender']) || is_null($_POST['age']) || is_null($_POST['blood_type']) || is_null($_POST['address']) || is_null($_POST['email']) || is_null($_POST['contact_no']))
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
    } else {
        
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

    $query = "INSERT INTO patient (fname,mname,lname,dateofbirth,age,gender,blood_type,address,email,contact_no) VALUES 
        ('$fname','$mname','$lname','$dateofbirth','$age','$gender','$blood_type','$address','$email','$contact_no') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Patient Registered Successfully'
        ];
        echo json_encode($res);
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Patient Not Registered'
        ];
        echo json_encode($res);
    }
    }

    









    // if ($query_run) {
    //       $_SESSION['status'] = "Patient Registered Successfully!";
    //       header("Location: ../patient-registration/register.php");
    //       exit();
    // } else {
    //       $_SESSION['status'] = "Patient Not Registered!";
    //       header("Location: ../patient-registration/register.php");
    //       exit();
    // }

     //ERROR HANDLING 
    //Check if inputs are empty
//    if (empty($fname) || empty($mname) || empty($lname) || empty($dateofbirth)|| empty($age)  || empty($gender) || empty($blood_type) || empty($address) || empty($email) || empty($contact_no) || empty($fname)) {
//         header("Location: ../patient-registration/register.php?regitration=empty");
//         exit();
//    }
//    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         header("Location: ../patient-registration/register.php?regitration=invalidemail");
//         exit();
//    } else {
//      header("Location: ../patient-registration/register.php");
//    }
