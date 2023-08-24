
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
            <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pencil"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="post">
              <i class="bi bi-circle"></i><span>New Post</span>
            </a>
          </li>
          <li>
            <a href="posts">
              <i class="bi bi-circle"></i><span>Posts</span>
            </a>
          </li>
          <li>
            <a href="category">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="comments">
              <i class="bi bi-circle"></i><span>Comments</span>
            </a>
          </li>
        
         
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-globe"></i><span>Edit Site</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="carousel">
              <i class="bi bi-tv"></i><span>Carousel Slide</span>
            </a>
          </li>
          <li>
            <a href="text">
              <i class="bi bi-circle"></i><span>Text</span>
            </a>
          </li>
            <li>
            <a href="cause">
              <i class="bi bi-circle"></i><span>Causes</span>
            </a>
          </li>
       
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="events">
          <i class="bi bi-calendar"></i>
          <span>Events</span>
        </a>
      </li>
          <li class="nav-item">
        <a class="nav-link collapsed" href=volunteers>
          <i class="bi bi-suit-heart"></i>
          <span>Volunteers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

   
 

      <li class="nav-item">
        <a class="nav-link collapsed" href="register">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
<?php //if (empty($_SESSION['id'])): ?>
   <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

<?php //endif ?>
     <?php //if (!empty($_SESSION['id'])): ?>
   <li class="nav-item">
        <a class="nav-link collapsed" href="login">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

<?php //endif ?>
  

      

    </ul>

  </aside><!-- End Sidebar-->