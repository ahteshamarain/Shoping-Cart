<?php 
include("include/header.php");
include("include/navbar.php");

?>
	

    <div id="main1">
    <br><br><br><br><br><br>

<div id="container">
<section class="wrapper" id="formm">
      <div class="form signup">
        <header>Login Form</header>
        <form action="login.php" method="POST">
          <input name="email" class="input" id="fname" type="Email" placeholder="Email" required />
          <input name="pass" class="input" id="lname" type="password" placeholder="Password" required />

          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
         </div>
         <button id="sign" type="submit" value="register" name="login">Signup</button> 
        </form>
      </div>

   

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
</div>

</div>


    <?php 
include("include/footer.php");
    
    ?>
  