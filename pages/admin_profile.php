<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin profile</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 100px;
        padding-left: 100px;
        background-image: url('abcd.jpg');
        border-radius: 20px;
        color: white;

        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}
    
    .container1 {
  border-radius: 10px;
  background-color:  rgba(0,0,0,0.3);
  padding: 20px;
  
  }
  legend{
    color: white;
    font-size: 25px;
  }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" method="post" action="auth_register.php">
<fieldset>

<!-- Form Name -->
<center style="font-size: 25px;">Admin profile</center>
<div class="container1">

  <div class="form-group">
    <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
    <div class="col-md-4">
      <div class="input-group">
         <div class="input-group-addon">
          <i class="fa fa-user">
          </i>
         </div>
         <input id="Name (Full name)" name="Name (Full name)" type="text" placeholder="admin" class="form-control input-md" disabled="">
        </div>

      
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-md-4 control-label" for="Old Password ">Old Password</label>  
    <div class="col-md-4">
    <div class="input-group">
         <div class="input-group-addon">
       <i class="fa fa-key"></i>
          
         </div>
      <input name="current_password" type="text" placeholder="Current Password " class="form-control input-md">
      
        </div>  
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="New Password ">New Password</label>  
    <div class="col-md-4">
    <div class="input-group">
         <div class="input-group-addon">
       <i class="fa fa-key"></i>
          
         </div>
      <input name="new_password" type="text" placeholder="New Password " class="form-control input-md">
      
        </div>  
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="Confirm Password ">Confirm Password</label>  
    <div class="col-md-4">
    <div class="input-group">
         <div class="input-group-addon">
       <i class="fa fa-key"></i>
          
         </div>
      <input name="confirm_password" type="text" placeholder="Confirm Password " class="form-control input-md">
      
        </div>  
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" ></label>  
    <div class="col-md-4">
    <input class="btn btn-success" value="submit" name="change_password" type="submit">
    <a href="admin_profile.php" class="btn btn-danger" value="">Clear</a>
      
    </div>
  </div>

</div>

</fieldset>
</form>
</div>
</div>