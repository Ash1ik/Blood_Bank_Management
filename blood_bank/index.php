
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
  <body style="background: lightblue url('12798.jpg') no-repeat fixed center; background-size: cover;">

  <h1 class="text-center display-1 fw-bolder text-muted pt-5">Student Log In</h1>
  <form action="connection.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" class="container p-5" style="max-width: 35%;">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="CS 2102032" name="l_Email1">
        <label for="floatingInput">Student ID</label>
    </div>
    <div class="form-floating mb-4">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="l_Password1">
        <label for="floatingPassword">Password</label>
    </div>
    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="l_submit">Sign In</button>

    <button type="button" class="btn text-primary modal_btn" data-bs-toggle="modal" data-bs-target="#myModal">
      Have no account? Want to creat account?
    </button>

  </form>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registration Please</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Give your information Please .....</p>
        <form action="connection.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" class="container p-5" style="max-width: 100%;" onsubmit="setLocalTimestamp()">
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingId" placeholder="CS 2102032" name="s_id">
              <label for="floatingId">Student ID</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword2" placeholder="1234" value="1234" disabled name="s_password">
              <label for="floatingPassword2">Password</label>
          </div>
          <div class="form-floating mb-4">
              <select class="form-select" id="floatingDepartment" name="s_department">
                  <option value="">Department</option>
                  <option value="CSE">CSE</option>
                  <option value="EEE">EEE</option>
                  <option value="FDAE">FDAE</option>
                  <option value="IPE">IPE</option>
                  <option value="TE">TE</option>
              </select>
          </div>
          <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingName" placeholder="Name" name="s_name">
              <label for="floatingName">Name</label>
          </div>
          <div class="form-floating mb-4">
              <select class="form-select" id="floatingGender" name="s_sex">
                  <option value="">Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
              </select>
          </div>
          <div class="form-floating mb-4">
              <input type="number" class="form-control" id="floatingAge" placeholder="Age" name="s_age">
              <label for="floatingAge">Age</label>
          </div>
          <div class="form-floating mb-4">
              <select class="form-select" id="floatingBlood" name="s_blood">
                  <option value="">Blood</option>
                  <option value="a+">A+</option>
                  <option value="a-">A-</option>
                  <option value="b+">B+</option>
                  <option value="b-">B-</option>
                  <option value="ab+">AB+</option>
                  <option value="ab-">AB-</option>
                  <option value="o+">O+</option>
                  <option value="o-">O-</option>
              </select>
          </div>
          <div class="form-floating mb-4">
              <input type="number" class="form-control" id="floatingDonate" placeholder="Donate" name="s_donate">
              <label for="floatingDonate">Total Donation</label>
          </div>
          <div class="form-floating mb-4">
              <input type="date" class="form-control" id="floatingDonateDate" placeholder="Last Donate Date" name="s_donate_date">
              <label for="floatingDonateDate">Last Donate Date</label>
          </div>
          <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingCity" placeholder="City" name="s_city">
              <label for="floatingCity">City</label>
          </div>
          <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingNumber" placeholder="Number" name="s_number">
              <label for="floatingNumber">Number</label>
          </div>
          <!-- Hidden field for local timestamp -->
          <input type="hidden" id="localTimestamp" name="local_timestamp">

          <button type="submit" class="btn btn-primary py-3 w-100 mb-4 submit_btn" name="r_submit">Sign Up</button>
        </form>

      </div>

    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    function setLocalTimestamp() {
        const timestamp = new Date().toISOString(); // Get local timestamp in ISO format
        document.getElementById('localTimestamp').value = timestamp;
    }
</script>

  </body>
</html>