<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-image: linear-gradient(to bottom, rgba(31, 14, 214, 0.86), rgba(189, 187, 220, 0.86));
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 28px 56px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
</style>
    </head>
    <body> 
    <h1 style="border:2px solid black;background-image: linear-gradient(to right, rgba(31, 14, 214, 0.86), rgba(189, 187, 220, 0.86));">The Book Store</h1>
    <section>
  <nav>
    <ul>
      <li><a href="#">children's book</a></li>
      <li><a href="#">Art and Photography</a></li>
      <li><a href="#">Crime and Thriller</a></li>
      <li><a href="#">History and Archelogy</a></li>
      <li><a href="#">Technology and engineering</a></li>
      <li><a href="#">sciencce and geography</a></li>
      <li><a href="#">poetry and Drama</a></li>
      <li><a href="#">News paper and Magazines</a></li>
    </ul>
  </nav>
        
<div class="wrapper" >
  <div class="container">
    <a href="" class="fb-login social-login">
      Login Form  
    </a>
   
    <form action="login_verify.php" method="post">
      <div class="group">
        <label for="email">User Name:</label>
        <input type="text" id="uname" name="uname" >
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
      <div class="group">
        <label for="password">Password:</label>
        <input id="psw" type="password" name="pwd">
      </div>
          <span id="pwdspan" style="display:none;">Invalid Password</span>
      <a href="Signup.php" class="forget-link">New User ?</a>
        <button class='btnsub' onclick="Check_Empty();return false;"> Login</button>
   <input type="submit"  id="submitbtn" style="display:none;"> 
    </form>
  </div>
</div>
        
        
        
        
        
         <script>
        function Check_Empty()
            {
                
                document.getElementById('unamespan').style.display = 'none'; 
                document.getElementById('pwdspan').style.display = 'none';
            
        
              var uname =   document.getElementById('uname').value;
              var psw =   document.getElementById('psw').value;
                if(uname == '')
                {
                
               document.getElementById('unamespan').style.display = 'inline';
                }
                if(psw == '')
                {
                 document.getElementById('pwdspan').style.display = 'inline';
                }
             if((uname != '') &&(psw != ''))
                {
                 document.getElementById('submitbtn').click();
                }
            }
        </script>
    
    </body>
</html>