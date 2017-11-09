
<head>
  <meta charset = "utf-8" />
  <title>Sign Up</title>
  <style type="text/css">
form {
 
}
input[type=text], input[type=password] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1.5px solid #ccc;
    box-sizing: border-box;
}

body {
  font-family: "Arial";
  font-size: 15px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  background-color: #b1e3d1;
  border: 3px solid #000000;
}

/*signup button*/
button {
    color: black;
    background-color: #ffffff;
    padding: 8px 13px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    cursor: pointer;
    width: 20%;
}


button:hover { 
  background-color: #e9f7f2;
}

 
input,
input::-webkit-input-placeholder {
    font-size: 13px;
    line-height: 1;
}

.signupbutton {
    float: center;
    width: 100%;
}


.container {
    padding: 2px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>


<center>
<div class="container">
	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
               <title>Register and Sign up Page</title>
               <center><h3>IS 218 - Project 1</h3></center>
              </div>
              <div class="modal-body">
                <div class="well">
                 
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                     <form class="form-horizontal" action="./db_insert.php" method="POST" target="_blank">
                            <h3><b><u>Register</u></b></h3>
                          </div>    
                          <div class="control-group">
                            
                            <label class="control-label"  for="username">First Name</label>
                            <div class="controls">
                              <input required type="text" id="firstname" name="firstName" placeholder="First Name" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            
                            <label class="control-label" for="lastname">Last Name</label>
                            <div class="controls">
                              <input required  type="text" id="lastname" name="lastName" placeholder="Last Name" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            
                            <label class="control-label"  for="username">Email</label>
                            <div class="controls">
                              <input required  type="text" id="email" name="email" placeholder="email@email.com" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            
                            <label class="control-label"  for="username">Phone Number</label>
                            <div class="controls">
                              <input required  type="text" id="phoneNumber" name="phoneNumber" placeholder="xxx-xxx-xxxx" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                          
                            <label class="control-label"  for="username">Birthday</label>
                            <div class="controls">
                              <input required  style="" type="text" id="birthday" name="birthday" placeholder="mm/dd/yyyy" class="">
                            </div>
                          </div>

                          <div class="control-group">
                            
                            <label class="control-label"  for="username">Gender</label>
                            <div class="controls">
                              <input type="radio" name="gender" value="male">Male</input>
                              <input type="radio" name="gender" value="female">Female</input>
                            </div>
                          </div>
     
                          <div class="control-group">
                            
                            <div class="controls">
                              <button class="btn btn-success"><b>Sign up</b></button>
                            </div>
                          </div>
                        </fieldset>
                      </form>                
                    </div>
                </div>
              </div>
            </div>
        </div>
</div>
</div>

<div class="container">
  <div class="well">    
     <h3><u><b>Log In</b></u></h3>
      <form class="form-horizontal" action="./db_login.php" method="POST" target="_blank">

       <div class="control-group">
         <label class="control-label" for="username">Email</label>
            <div class="controls">
              <input required  type="text" id="email" name="email" placeholder="email@email.com" class="input-xlarge">
           </div>
        </div>

       <div class="control-group">
         <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input required  type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
           </div>
        </div>      

       <div class="control-group">        
            <div class="controls">
              <button class="btn btn-success"><b>Log In</b></button>
           </div>
        </div>
     </form>
   </head>
 </div>
</div>
</center>