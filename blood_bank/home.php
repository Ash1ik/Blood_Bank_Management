<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Data Table</title>
</head>
<body>

<div class="card m-5 bg-transparant border-0 text-right">
    <div class="card-body">

        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blood_bank";
        $id = $_GET['id'];

        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $data01_select_info = "SELECT * FROM s_information WHERE id='$id'";
        $data01 = $conn->query($data01_select_info);

        while ($d01 = mysqli_fetch_assoc($data01)) {
            ?>
            <p class="text-right"><?php echo $d01["S_Name"]; ?> (<?php echo $d01["ID"]; ?>)</p>
            <p class="text-right"><?php echo $d01["Department"]; ?></p>
            <p class="text-right"><?php echo $d01["Blood_Group"]; ?></p>
            <a href="index.php" class="btn btn-outline-success">Log Out</a>
            <?php
        }
        ?>
    </div>
</div>

<div class="container mt-3">
    <h2>Student Data Table</h2>
    <p>Chill with the student data.......</p>
    <table class="table table-borderless table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Id</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Total Donate</th>
            <th scope="col">Last Donate</th>
            <th scope="col">Registration Date</th>
            <th scope="col">Availability</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $data02_select_info = "SELECT * FROM s_information";
        $data02 = $conn->query($data02_select_info);

        while ($d02 = mysqli_fetch_assoc($data02)) {
            $last_donate_date = $d02["Last_Donate"];
            $current_date = date('Y-m-d');
            $diff = (strtotime($current_date) - strtotime($last_donate_date)) / (60 * 60 * 24); // Difference in days

            $availability = $diff >= 90 ? "Available" : "Unavailable";
            ?>
            <tr>
                <td class="table-success"><?php echo $d02["S_Name"]; ?></td>
                <td class="table-success"><?php echo $d02["Department"]; ?></td>
                <td class="table-success"><?php echo $d02["ID"]; ?></td>
                <td class="table-success"><?php echo $d02["S_Password"]; ?></td>
                <td class="table-success"><?php echo $d02["Gender"]; ?></td>
                <td class="table-success"><?php echo $d02["Age"]; ?></td>
                <td class="table-success"><?php echo $d02["Blood_Group"]; ?></td>
                <td class="table-success"><?php echo $d02["Total_Donate"]; ?></td>
                <td class="table-success"><?php echo $d02["Last_Donate"]; ?></td>
                <td class="table-success"><?php echo $d02["Reg_Date"]; ?></td>
                <td class="<?php echo $availability === 'Available' ? 'text-success' : 'text-danger'; ?>">
                    <?php echo $availability; ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
