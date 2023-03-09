<?php
/**
 * Template Name: Dashboard
 */
get_header();
?>
<!-- Navbar section -->
<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="/wp-content/themes/easymanage/images/logo.png" alt="Logo"></a>
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    <li class="login">
      <button href="login.php">LOGIN</button>
    </li>
    </ul>
  </div>
</nav>


  <div class="row">
    <div class="body-image">
      <img src="/wp-content/themes/easymanage/images/background.jpg" alt="background">
    </div>
  </div>
  <div class="row">
    <div class="paragraph">
      <h2>Efficient Project Management Solution</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <section class="welcome-section">
        <h2>Welcome to </h2>
        <h3>EASY MANAGE </h3>
        </section>
        <section class="welcome-div">
        <div class="welcome-section-paragraph">
        <p> Easy Manage is a management application that helps
          <br> project managers keep track of all their members and <br>
          assign projects to their members
        </p>
       </div>
        <div class="welcome-button">
        <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </section>
      
    </div>
  </div>

  <div class="row">
    <div class="newsletter">
      <section class="newsletter-section">
        <h2>Subscribe to our email newsletter</h2>
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </section>
    </div>
  </div>
</div>
<?php get_footer();