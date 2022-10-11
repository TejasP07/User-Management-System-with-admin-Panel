<!DOCTYPE html>
<html>
<title>Forgot Password</title>
<style>
        h1
        {
            text-align: center;
            padding-top: 30px;
        }
        body
        {
        background-image: url("abcd.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;


        text-align: center;
        margin-top:130px;
    
        font-size: 30px;

        color: white;
        }
        .button3 
        {
        border-radius: 8px;
        padding: 5px 30px;}
    
        select
        {
        padding:08px 10px ;
        margin-left: 01px;
        border-radius: 10px;
        }

        input
        {
            border-radius: 20px;
        }
        div
        {
            font-size: 20px;        
        }
    
    
</style>


<body >

    <h2 >Forgot Password</h2>
    <form method="POST" action="auth.php">
        <label style=> Email ID</label><br>
        <input type="text" name="Email ID" placeholder="Enter Email ID" style="padding: 10px 40px;" ><br><br>
        <label>Password</label><br>
        <input type="Password" name="Password" placeholder="Enter Password"style="padding: 10px 40px"><br><br>
        <button class="button button3;" style="background-color:transparent;color: white;   border-radius: 15px; width: 100px ; height: 50px;">Login</button>
    </form>






</body>
</html>