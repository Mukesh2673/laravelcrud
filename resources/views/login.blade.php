
<style type="text/css">  
form 
{
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 2% 18%;
  border: none;
  cursor: pointer;
  width: 50%; 
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;  
  width: 30%;
  margin: auto;
  font-size: 18px;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.maincontainer{
  padding: 56px;
  width: 30%;
  margin: auto;
  border: 1px solid #CCCCCC;
}
.container {
  padding: 16px;
  width: 
  100%;
  margin: auto;
}


/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

h1{
    color:red;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>


<div class="maincontainer">
  <div class="imgcontainer">  User <br> <br>
  
<form action="user"  method="post">

<img src="/images/img_avatar.png" alt="Avatar" class="avatar">
@csrf     
  </div>
  <div class="container">
 
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" autocomplete="off" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" autocomplete="off" required>


    <button type="submit">Login</button> </form><br>



     </div>

  
</div>







 

<!-- 
<h1>User Login</h1>
<form action="user" method="post">
@csrf    
<input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter user Password"><br><br>
    <button type="submit">Login </button>

</form> -->