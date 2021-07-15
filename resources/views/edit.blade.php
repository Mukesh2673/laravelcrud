
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
  <div class="imgcontainer">  UPDATE Profile <br> <br>
  
  <form action="/edit" method="POST">

<img src="/images/img_avatar.png" alt="Avatar" class="avatar">
@csrf     
  </div>
  <div class="container">
  <input type="hidden" name="id" value="{{$data['id']}}">

    <label for="uname"><b>Username</b></label>
    <input type="text" name="name" value="{{$data['name_english']}}">

    <label for="email"><b>Email&nbsp;&nbsp;</b></label>
     <input type="text" name="email" value="{{$data['email']}}">

    <label for="psw"><b>Password</b></label>
    <input type="text" name="password" value="{{$data['password']}}">

    <label for="uname"><b>Mobile</b></label>
    <input type="text" name="mobile" value="{{$data['mobile_no']}}">
    


<button type="submit">Update</button></form><br>



     </div>

  
</div>

















