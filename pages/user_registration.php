<?php include 'include/headadmin.php'; ?>
<body style="background-image: url('abcd.jpg');color: white">
<br><center><h3>USER REGISTRATION FORM</h3><br></center>
    <div class="wrapper" style="background-color: rgba(0,0,0,0.3);padding-top: 60px;padding-bottom: 60px;margin-left: 60px;margin-right: 60px;border-radius: 50px;">
      <div class="row">
        <form method="POST" action="auth_register.php">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-3 col-lg-offset-1">
              <div class="form-group">
                <label>User ID</label>
                <input type="number" name="userid" class="form-control" placeholder="User Id">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="FirstName" class="form-control" placeholder="FirstName">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>LastName</label>
                <input type="text" name="LastName" class="form-control" placeholder="LastName">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-3 col-lg-offset-1">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender">
                  <option value="Select-Gender">Select-Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="address">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="City">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-4 col-lg-offset-1">
              <div class="form-group">
                <label>Password</label>
                <input type="Password" name="Password" class="form-control" placeholder="Password"> 
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="Password" name="Confirm_Password" class="form-control" placeholder="Confirm_Password">
              </div>
            </div>
          </div>
          <br><div class="row" style="margin: 10px;">
            <div class="col-lg-4 col-lg-offset-5">
              <div class="form-group">
                <input type="submit" name="register" class="btn btn-success" value="submit">
                <a href="user_registration.php"><input type="button" name="reset" class="btn btn-success" value="reset"></a> 
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>

<?php include 'include/footer.php'; ?>
