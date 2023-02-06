<?php

require_once '../connection.php';

$patient_id = $_GET['view'];

$rows = mysqli_query($con, "SELECT * FROM patient WHERE patient_id = $patient_id");

$editArray = mysqli_fetch_assoc($rows);

echo json_encode($editArray);