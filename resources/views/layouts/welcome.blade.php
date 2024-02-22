<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">




    <title>cBox - MakwaIT</title>
</head>
<style>
     .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 320px;
  margin: auto;
  background-color: #e9e9f9;
  border-radius: 20px;
  padding: 30px 20px;
  box-shadow: 100px 100px 80px rgba(0, 0, 0, 0.03)
}

.title {
  color: black;
  font-weight: bold;
  text-align: center;
  font-size: 20px;
  margin-bottom: 4px;
}

.sub {
  text-align: center;
  color: black;
  font-size: 14px;
  width: 100%;
}

.sub.mb {
  margin-bottom: 1px;
}

.sub a {
  color: rgb(23, 111, 211);
}

.avatar {
  height: 50px;
  width: 50px;
  background-color: rgb(23, 111, 211);
  border-radius: 50%;
  align-self: center;
  padding: 6px;
  cursor: pointer;
  box-shadow: 12.5px 12.5px 10px rgba(0, 0, 0, 0.015),100px 100px 80px rgba(0, 0, 0, 0.03);
}

.form button {
  align-self: flex-start;
}

.input, button {
  border: none;
  outline: none;
  max-width: 300px;
  width: 100%;
  padding: 16px 10px;
  background-color: rgb(247, 243, 243);
  border-radius: 10px;
  box-shadow: 12.5px 12.5px 10px rgba(0, 0, 0, 0.015),100px 100px 80px rgba(0, 0, 0, 0.03);
}

button {
  margin-top: 12px;
  background-color: rgb(23, 111, 211);
  color: #fff;
  margin: auto;
  width: 100%;
  text-transform: uppercase;
  font-weight: bold;
}

.input:focus {
  border: 1px solid rgb(23, 111, 211);
}

#file {
  display: none;
}


.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  border-radius: 15px;
  min-width: 300px;
  max-width: 500px;
}


.callout-container {
  padding: 5px;
  background-color: red;
  color: white;
  border-radius:15px;
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}

</style>

<body style="background-color: #e6e6e6;">
    <section >
        <div class="home-main">
            <div class="row">
                <div class="row6">
                    <h1 class="h1-b">c Box</h1>

                    <section class="p-down-l">
                        <div>
                            <?php if (isset($_GET['msg'])) { ?>
                             <div class="callout">
                             <div class="callout-header"></div>
                             <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
                             <div class="callout-container">
                               <p><?php echo $_GET['msg']; ?></p>
                             </div>
                           </div>
                           <?php } ?>
                            </div>
                           
                           
                           
                           <br>
                           
                           
                           
                              <form class="form"  action="./backend/employee.php" method="post">
                             <span class="title">Access your cBox account</span>
                             <span class="sub mb">Sign in to get access to your leaves :)</span>
                           
                            <input type="email" name="email" placeholder="Enter email" class="input" placeholder="email">
                               <input placeholder="Enter password" name="password" type="password" class="input"> 
                                
                               <br>
                               <button type="submit" name="login_emp" >Sign In</button>
                                 
                                 <span class="sub">You don't have an account? <a href="../index.php">Sign Up</a></span>
                           
                           </form>
                           
                           
                    </section>


                </div>
                <br><br>
                <div class="row6 p-down">
                    <p style="color:#939292; font-weight: 600;">Well, <br> What's this? this is just a place to</p>
                    <h3 class="h1-s">Vent Out</h3>
                    <h3 class="h1-s">Compliment</h3>
                    <h3 class="h1-s">Share Suggestions</h3>
                    <p style="font-size:10px;color: grey">Ethics Management System - Version 2.0.0</p>
                    <p style="font-size:10px; color: grey"><a target="_blank" href="http://makwa-it.com">
         © 2023 Makwa-IT | All Rights Reserved </a></p>   </div>
            </div>
        </div>
    </section>
</body>
</html>