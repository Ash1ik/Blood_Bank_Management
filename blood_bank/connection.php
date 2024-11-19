<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$data03_select_info = "SELECT * FROM s_information";
$data03 = $conn->query($data03_select_info);

if (isset($_POST['l_submit'])) {
    $ck_id = $_POST['l_Email1'] ?? '';
    $ck_pass = $_POST['l_Password1'] ?? '';

    if ($data03 && mysqli_num_rows($data03) > 0) {
        while ($da03 = mysqli_fetch_assoc($data03)) {
            $check_id = $da03["ID"];
            $check_pass = $da03["S_Password"];

            if ($ck_id == $check_id && $ck_pass == $check_pass) {
                header('location: home.php?id=' . $check_id);
                exit();
            }
        }
    }
    header('location: index.php');
    exit();
}

if (isset($_POST['r_submit'])) {
    // Sanitize user input
    $r_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $r_department = mysqli_real_escape_string($conn, $_POST['s_department']);
    $r_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $r_sex = mysqli_real_escape_string($conn, $_POST['s_sex']);
    $r_age = mysqli_real_escape_string($conn, $_POST['s_age']);
    $r_blood = mysqli_real_escape_string($conn, $_POST['s_blood']);
    $r_donate = mysqli_real_escape_string($conn, $_POST['s_donate']);
    $r_donate_date = mysqli_real_escape_string($conn, $_POST['s_donate_date']);
    $r_city = mysqli_real_escape_string($conn, $_POST['s_city']);
    $r_number = mysqli_real_escape_string($conn, $_POST['s_number']);
    $local_timestamp = mysqli_real_escape_string($conn, $_POST['local_timestamp']);

    // Debugging outputs (remove before deployment)
    // echo $r_id, $r_department, $r_name, $local_timestamp;

    $r_query = "INSERT INTO `s_information`(`S_Name`, `Department`, `ID`, `Age`, `Gender`, `Blood_Group`, `City`, `Total_Donate`, `Last_Donate`, `Reg_Date`, `S_Password`) 
                VALUES ('$r_name','$r_department','$r_id','$r_age','$r_sex','$r_blood','$r_city','$r_donate','$r_donate_date','$local_timestamp','1234')";

    if (!mysqli_query($conn, $r_query)) {
        die("Error executing query: " . mysqli_error($conn));
    }

    header('location: home.php?id=' . $r_id);
    exit();
}

if (isset($_POST['s_dlt_submit'])) {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id === 0) {
        die("Invalid ID");
    }

    $b_dlt_query = "DELETE FROM s_information WHERE id='$id'";
    if (!mysqli_query($conn, $b_dlt_query)) {
        die("Error deleting record: " . mysqli_error($conn));
    }
    header('location: home_admin.php');
    exit();
}
?>
