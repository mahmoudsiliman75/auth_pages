<!-- START:: INCLUDING THE HEADER -->
<?php include("layouts/TheHeader.php")?>
<!-- END:: INCLUDING THE HEADER -->  

<section>
  <div class="container">
    <div class="card">
      <div class="img_wraper">
        <img src="media/login.svg">
        <h2> 
          A few more clicks to 
          sign in to your account. 
        </h2>
      </div>

      <div class="form_wraper">
        <div class="header_wraper">
          <h2> Login </h2>
        </div>

        <form action="">
          <div class="form_controle">
            <input type="mail" placeholder="Email">
            <span>
              <i class="fas fa-at"></i>
            </span>
          </div>

          <div class="form_controle">
            <input type="password" placeholder="Password">
            <span>
              <i class="fab fa-keycdn"></i>
            </span>
          </div>

          <div class="forget_pass">
            <a href="ForgetPass.php"> Forgert Password ? </a>
          </div>

          <div class="btn_wraper">
            <button> Login </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- START:: INCLUDING THE FOOTER -->
<?php include("layouts/TheFooter.php")?>
<!-- END:: INCLUDING THE FOOTER -->