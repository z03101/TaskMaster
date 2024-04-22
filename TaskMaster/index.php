<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
  content="IE=edge">
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
  <!-- Page title -->
  <title>TaskMaster</title>
   <!-- External stylesheet links -->
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
   <!-- Header section with navigation and search bar -->
  <header>
    <!-- Navigation bar -->
    <nav class="navbar">
      <a href="home.html">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>
    <!-- Search bar form -->
    <form action="#" class="search-bar">
      <input type="text" placeholder="Search...
      ">
      <button type="submit"><i class='bx bx-search'></i></button>
    </form>
  </header>
  <!-- Background and main content container -->
  <div class="background"></div>
  <div class="container">
    <div class="content">
      <!-- Logo and introductory text -->
      <h2 class="logo"><i class='bx bxs-calendar' ></i>TaskMaster</h2>

      <div class="text-sci">
        <h2>Welcome!<br><span>To Your New Productive Life.</span></bar></h2>

        <p>Master Your Day, One Task at a Time!" </p>
        <!-- Social media icons -->
        <div class="social-icons">
          <a href="#"><i class='bx bxl-tiktok'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-pinterest'></i></a>

      </div>
    </div>
  </div>
   <!-- Login and registration form container --> 
  <div class="logreg-box">
      <div class="form-box login">
        
          <form action="login.php" method="post">
            <h2>Sign In</h2>
            <!-- Email input -->
            <div class="input-box">
                <span class="icon"><i class='bx bx-envelope'></i></span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>
            <!-- Password input -->
            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock'></i></span>
              <input type="password" id="password" name="password" 
              required>
              <label>Password</label>
            </div>
            <!-- Remember me and forgot password options -->
            <div class="remember-forgot">
                <label><input 
                type="checkbox"> Remeber me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit"
            class="btn">Sign In</button>
            <!-- Remember me and forgot password options -->
            <div class="login-register">
              <p>Don't have an account? <a
              href="#" 
              class="register-link">Sign
               Up</a></p>
            </div>
          </form>
      </div>


      <div class="form-box register">
        <form action="signup.php" method="post">
          <h2>Sign up</h2>
          <!-- Name input -->
          <div class="input-box">
            <span class="icon"><i class='bx bxs-user-circle'></i></span>
            <input type="text" id="name" name="name" required> 
            <label>Name</label>
          </div>
            <!-- Email input -->
          <div class="input-box">
              <span class="icon"><i class='bx bx-envelope'></i></span>
              <input type="email" id="email" name="email" required>
              <label>Email</label>
          </div>
          <!-- Password input -->
          <div class="input-box">
            <span class="icon"><i class='bx bxs-lock'></i></span>
            <input type="password" id="password" name="password" 
            required>
            <label>Password</label>
          </div>
          <!-- Terms and conditions checkbox -->
          <div class="remember-forgot">
              <label><input 
              type="checkbox"> I agree to the terms and conditions</label>
              
          </div>
          <!-- Sign Up button -->
          <button type="submit" class="btn">Sign Up</button>
          <!-- Login link -->
          <div class="login-register">
            <p>Already have an account? <a
            href="#" 
            class="login-link">Sign
             in</a></p>
          </div>
        </form>
    </div>
  </div>
  <!-- External JavaScript file -->
  <script src="script.js"></script>
</body>



