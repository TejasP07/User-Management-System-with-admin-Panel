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

    <title>User profile</title>
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
<form class="form-horizontal"F>
<fieldset>

<!-- Form Name -->
<center style="font-size: 25px;">User profile</center>

<!-- Text input-->



<div class="container1">
<div class="form-group">
  <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="Name (Full name)" type="text" placeholder="Name (Full name)" class="form-control input-md">
      </div>

    
  </div>

  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Date Of Birth" name="Date Of Birth" type="text" placeholder="Date Of Birth" class="form-control input-md">
      </div>    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4" style="margin-top: 10px;"> 
    <select style="border-radius: 5px;color: grey;">
      <option>Select Gender</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Address">Address</label>  
  <div class="col-md-2  col-xs-4">
  <input id="Address" name="Address" type="text" placeholder="City" class="form-control input-md ">
  </div>

  <div class="col-md-2 col-xs-4">

  <input id="Address" name="Address" type="text" placeholder="State" class="form-control input-md ">
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Address"></label>  
  <div class="col-md-2  col-xs-4">
  <input id="Address" name="Address" type="text" placeholder="Country" class="form-control input-md ">
  
  </div>

  

  
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mobile number ">Mobile number </label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="Mobile number " name="Mobile number " type="text" placeholder="Mobile number " class="form-control input-md">
    
      </div>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md">
    
      </div>
  
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
  <a href="user_profile.php" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
    
  </div>
</div>
</div>
</fieldset>
</form>
</div>
</div>