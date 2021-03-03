<?php include('header.php');

if(isset($_SESSION['username']))  
{
  if(isset($_SESSION['login']))  
{
  echo "<script>alert('".$_SESSION['login']."');</script>";
  unset ($_SESSION["login"]);
}
  // echo "<script>alert('".$_SESSION['username']."');</script>";
}
else{
  echo "<script>location.href='login.php';</script>";
}

 ?>
<section class="ser">
  <div class="page-heading ">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-12 ">
          <h1>Form</h1>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="main-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="banner-content">
          <div class="row">
            <div class="col-md-12">
              <div class="banner-caption">
                <h4>Hello, this is your <em>Ramayana</em> Theme.</h4>
                <span>AWESOME HTML5 &amp; CSS3 TEMPLATE</span>
                <p>Do you know that <strong>Ramayana</strong> is a free to use Bootstrap 4 CSS template by <strong>templatemo</strong>? You can edit and add more pages as you wanted for your personal or corporate websites.</p>
                <div class="primary-button">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!-- Services -->
<section class="services">
  <div class="container-fluid">
    <div class="row">


      <div class="col-md-6" onclick="window.location.href='decor at doorstep image upload/index.php'">
        <div class="service-item first-item">
          <div class="icon"></div>
          <h4>Image Upload</h4>
          
        </div>
      </div>
      <div class="col-md-6" onclick="window.location.href='Decore at Doorstep contact/index.php'">
        <div class="service-item second-item">
          <div class="icon"></div>
          <h4>Contact</h4>
          
        </div>
      </div>
      <div class="col-md-6" onclick="window.location.href='Decore at Doorstep Event Upload/index.php'">
        <div class="service-item third-item">
          <div class="icon"></div>
          <h4>Event Upload</h4>
        </div>
      </div>
      <div class="col-md-6" onclick="window.location.href='Decore at Doorstep news/index.php'">
        <div class="service-item fourth-item">
          <div class="icon"></div>
          <h4>News</h4>
          
        </div>
      </div>
    </div>        
  </div>
</section>

  <!-- Top Image 
  <section class="top-image">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <img src="assets/images/top-image.jpg" alt="">
          <div class="down-content">
            <h4>Ante Interdum Chambray</h4>
            <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put a bird on it brooklyn forage.</p>
            <div class="primary-button">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <!-- Left Image 
  <section class="left-image">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/left-image.jpg" alt="">
        </div>
        <div class="col-md-6">
          <div class="right-content">
            <h4>Ante Interdum Raclette</h4>
            <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put a bird on it brooklyn forage.<br><br>Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put bird brooklyn</p>
            <div class="primary-button">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <!-- Right Image 
  <section class="right-image">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="left-content">
            <h4>Ante Interdum Raclette</h4>
            <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put a bird on it brooklyn forage.<br><br>Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put bird brooklyn</p>
            <div class="primary-button">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="assets/images/right-image.jpg" alt="">
        </div>
      </div>
    </div>
  </section> -->

</div>
</div>
<?php include('footer.php') ?>
