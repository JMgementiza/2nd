<?php
require_once '../connection.php';

if(isset($_GET['searchPatient']))
{
    $filtervalues = $_GET['searchPatient'];
    $query = "SELECT * FROM patient WHERE CONCAT(patient_id, fname, lname, email) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $patient)
        {
            ?>
                <tr>
                    <td><?= $patient['patient_id']; ?></td>
                    <td><?= $patient['fname'] . ' ' . $patient['lname'] ?> </td>
                    <td><?= $patient['age']; ?></td>
                    <td><?= $patient['gender']; ?></td>
                    <td><?= $patient['created_at']; ?></td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">View</a>
                        <a href="../includes/registration-edit.php?edit=<?=$patient['patient_id'];?>" type="button" class="btn btn-primary edit-link" data-bs-toggle="modal" data-bs-target="#editPatientModal">
                            Edit
                        </a>
                        <a href="" class="btn btn-warning btn-sm">Archive</a>
                    </td>
                </tr>
            <?php
        }
    }
    else
    {
        ?>
            <tr>
                <td colspan="4">No Record Found</td>
            </tr>
        <?php
    }
}
?>