<!DOCTYPE html>
<html>
<head>
   
  <link href="style.css" rel="stylesheet" type="text/css"> 
    
    </head>
    <body>
      <h1 style="border:2px solid black;background-image: linear-gradient(to right, rgba(31, 14, 214, 0.86), rgba(189, 187, 220, 0.86));">Signup Here</h1>
             
<div class="wrapper1" >
  <div class="container1">   
         <a href="" class="fb-login social-login">
     Signup Form 
    </a>
   
        
    <form class="form-inline form1" action="Signup_insert.php">
  <div class="group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="User_Name" required>
  </div>
  <div class="group">
    <label for="pwd">Age:</label>
    <input type="number" class="form-control" name="Age"    required >
  </div>
         <div class="group">
    <label for="pwd">Address:</label>
    <input type="textarea" class="form-control" name="Address"  required  >
  </div>
          <div class="group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" name="email"  required  >
  </div>
          <div class="group">
    <label for="pwd">User Name:</label>
    <input type="text" class="form-control" name="uname"  required  >
  </div>
          <div class="group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id='pwd'  required  >
  </div>
   <div class="group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control"  id='cpwd'  required  >
  </div>
        <div>
  <button type="submit" class="btn btn-default" style="display:none;" id='Submit_btn'>Submit</button>
  <button class="btn btn-default signup" style="" onclick='verify();'>Submit</button>
  <button class="btn btn-default reset" style="" type="reset" >Cancel</button>
        </div>
        
             <a href="index.php" class="forget-link">Go to Login Page ?</a>
 
</form>
</div>
        
</div>    
        <script>
        function verify()
            {
              var password =   document.getElementById('pwd').value;
              var cpassword =   document.getElementById('cpwd').value;
                if(password == cpassword)
                {
                document.getElementById('Submit_btn').click();
                }
                else
                {
                    alert('Password and confirm passwod not same');
                    document.getElementById('pwd').value ="";
                     document.getElementById('cpwd').value= "";
                }
            }
        </script>
    </body>
</html>