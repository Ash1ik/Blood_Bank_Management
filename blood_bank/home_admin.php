<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "apurbo";
  
  $conn = mysqli_connect($hostname,$username,$password,$dbname);

  $data02_select_info = "SELECT * FROM s_information";

  $data02 = $conn->query($data02_select_info);

  $data01_select_info = "SELECT * FROM s_information WHERE id='$id'";

  $data01 = $conn->query($data01_select_info);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>


  <div class="card m-5 bg-transparant border-0 text-right">
    <div class="card-body">

        <?php
        while($d01 = mysqli_fetch_assoc($data01)){
        ?>
            <p class="text-right"><?php echo $d01["s_name"]; ?> (<?php echo $d01["id"]; ?>)</p>
            <p class="text-right"><?php echo $d01["department"]; ?></p>
            <p class="text-right"><?php echo $d01["blood_group"]; ?></p>

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
        <th  scope="col">Name</th>
        <th  scope="col">Department</th>
        <th  scope="col">Id</th>
        <th  scope="col">Password</th>
        <th  scope="col">Gender</th>
        <th  scope="col">Age</th>
        <th  scope="col">Blood Group</th>
        <th  scope="col">Total Donate</th>
        <th  scope="col">Last Donate</th>
        <th  scope="col">Number</th>
      </tr>
    </thead>
    <tbody>

      <?php
        while($d02 = mysqli_fetch_assoc($data02)){
      ?>

        <tr>
            <td class="table-success"><?php echo $d02["s_name"]; ?></td>
            <td class="table-success"><?php echo $d02["department"]; ?></td>
            <td class="table-success"><?php echo $d02["id"]; ?></td>
            <td class="table-success"><?php echo $d02["s_password"]; ?></td>
            <td class="table-success"><?php echo $d02["gender"]; ?></td>
            <td class="table-success"><?php echo $d02["age"]; ?></td>
            <td class="table-success"><?php echo $d02["blood_group"]; ?></td>
            <td class="table-success"><?php echo $d02["total_donate"]; ?></td>
            <td class="table-success"><?php echo $d02["last_donate"]; ?></td>
            <td class="table-success"><?php echo $d02["s_number"]; ?></td>
            <td class="table-success">
                <form action="connection.php?id=<?php echo $d02["id"]; ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                    <button type="submit" class="btn btn-outline-success mt-2 shadow" name="s_dlt_submit">s_b_dlt</button>
                </form>
            </td>
        </tr>

      <?php
          }
        ?>
    </tbody>
  </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


