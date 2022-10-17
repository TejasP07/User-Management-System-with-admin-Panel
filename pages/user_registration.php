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
                <label>Date Of Birth</label>
                <input type="date" name="Date_Of_Birth" class="form-control" placeholder="Date Of Birth">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" name="Mobile_Number" class="form-control" placeholder="Mobile Number">
              </div>
            </div>
          </div>
          <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
      
          <div class="row">
            <div class="col-lg-3 col-lg-offset-1">
              <div class="form-group">
                <label>Gender</label>
                  
                <div class="col-lg-4 col-md-8">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i style="font-size: 20px;"><b>Old User</b></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">00</div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
            <div class="col-lg-3 col-lg-offset-1">
              <div class="form-group">
                <label>State</label>
                <input type="text" name="State" class="form-control" placeholder="State">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Country</label>
                <input type="text" name="Country" class="form-control" placeholder="Country">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label>Pincode</label>
                <input type="number" name="pincode" class="form-control" placeholder="Pincode">
              </div>
            </div>
          </div>


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
