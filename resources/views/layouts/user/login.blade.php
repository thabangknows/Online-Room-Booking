
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>
<style>
    *{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 320px;
  margin: auto;
  background-color: #fff;
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

    <!-- preloader area end -->
    <!-- login area start -->
    <div >
<div style="padding:8rem 20%"> 
<br>
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



   <form class="form"  action="{{route('login.perform')}}" method="post">
   @csrf
   <span class="title">Access your Leave Application account</span>
  <span class="sub mb">Sign in to get access to your leaves :)</span>

 <input type="email" name="email" placeholder="Enter email" class="input" placeholder="email">
    <input placeholder="Enter password" name="password" type="password" class="input"> 
     
    <br>
    <button type="submit" name="login_emp" >Sign In</button>
      
      <span class="sub">Wanna go back? <a href="../index.php">Home</a></span>

</form>



</div>
</div>
    <!-- login area end -->
    <script>
      const button = document.querySelector("button"),
  toast = document.querySelector(".toast");
(closeIcon = document.querySelector(".close")),
  (progress = document.querySelector(".progress"));

let timer1, timer2;

button.addEventListener("click", () => {
  toast.classList.add("active");
  progress.classList.add("active");

  timer1 = setTimeout(() => {
    toast.classList.remove("active");
  }, 5000); //1s = 1000 milliseconds

  timer2 = setTimeout(() => {
    progress.classList.remove("active");
  }, 5300);
});

closeIcon.addEventListener("click", () => {
  toast.classList.remove("active");

  setTimeout(() => {
    progress.classList.remove("active");
  }, 300);

  clearTimeout(timer1);
  clearTimeout(timer2);
});
    </script>


</body>

</html>