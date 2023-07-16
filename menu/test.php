<?php require_once('../private/initialize.php'); 
$page_title = "News";
?>
<?php include(SHARED_PATH . '/main-header.php'); ?>

<link rel="stylesheet" href="style.css">

<!-- 
<header class="navbar sticky">
  <a href="#" class="logo">Logo</a>
  <div class="menu-btn">
    <div class="menu-btn__lines"></div>
  </div>
  <ul class="menu-items">
    <li><a href="#" class="menu-item first-item">Home Page</a></li>
    <li class="dropdown">
      <a href="#" class="menu-item first-item expand-btn">Dropdown Right</a>
      <ul class="dropdown-menu sample">
        <li><a href="#" class="menu-item">Item 1</a></li>
        <li><a href="#" class="menu-item">Item 2</a></li>
        <li><a href="#" class="menu-item">Item 3</a></li>
        <li class="dropdown dropdown-right">
          <a href="#" class="menu-item expand-btn">
            Item 4
          </a>
          <ul class="menu-right sample">
            <li><a href="#" class="menu-item">Item 4.1</a></li>
            <li><a href="#" class="menu-item">Item 4.2</a></li>
            <li><a href="#" class="menu-item">Item 4.3</a></li>
            <li><a href="#" class="menu-item">Item 4.4</a></li>
            <li><a href="#" class="menu-item">Item 4.5</a></li>
            <li><a href="#" class="menu-item">Item 4.6</a></li>
            <li><a href="#" class="menu-item">Item 4.7</a></li>
            <li><a href="#" class="menu-item">Item 4.8</a></li>
          </ul>
        </li>
        <li><a href="#" class="menu-item">Item 5</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="menu-item first-item expand-btn">Dropdown Left</a>
      <ul class="dropdown-menu sample">
        <li><a href="#" class="menu-item">Item 1</a></li>
        <li><a href="#" class="menu-item">Item 2</a></li>
        <li><a href="#" class="menu-item">Item 3</a></li>
        <li class="dropdown dropdown-right">
          <a href="#" class="menu-item expand-btn">
            Item 4
          </a>
          <ul class="menu-right menu-left sample">
            <li><a href="#" class="menu-item">Item 4.1</a></li>
            <li><a href="#" class="menu-item">Item 4.2</a></li>
            <li><a href="#" class="menu-item">Item 4.3</a></li>
            <li><a href="#" class="menu-item">Item 4.4</a></li>
            <li><a href="#" class="menu-item">Item 4.5</a></li>
            <li><a href="#" class="menu-item">Item 4.6</a></li>
            <li><a href="#" class="menu-item">Item 4.7</a></li>
            <li><a href="#" class="menu-item">Item 4.8</a></li>
          </ul>
        </li>
        <li><a href="#" class="menu-item">Item 5</a></li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-item first-item expand-btn">Mega Menu</a>
      <div class="mega-menu sample">
        <div class="content">
          <div class="col">
            <section>
              <div class="menu-title">Category 1</div>
              <a href="#" class="img-wrapper"><span class="img"><img src="https://picsum.photos/400?random=1" alt="Random Image" /></span></a>
              <p>Very beautiful.</p>
            </section>
          </div>
          <div class="col">
            <section>
              <div class="menu-title">Category 2</div>
              <ul class="mega-links">
                <li><a href="#" class="menu-item">Item with a long menu name 1</a></li>
                <li><a href="#" class="menu-item">Item with a long menu name 2</a></li>
                <li><a href="#" class="menu-item">Item with a long menu name 3</a></li>
                <li><a href="#" class="menu-item">Item with a long menu name 4</a></li>
                <li><a href="#" class="menu-item">Item with a long menu name 5</a></li>
              </ul>
            </section>
          </div>
          <div class="col">
            <section>
              <div class="menu-title">Category 3</div>
              <ul class="mega-links">
                <li><a href="#" class="menu-item">Item 1</a></li>
                <li><a href="#" class="menu-item">Item 2</a></li>
                <li><a href="#" class="menu-item">Item 3</a></li>
                <li><a href="#" class="menu-item">Item 4</a></li>
                <li><a href="#" class="menu-item">Item 5</a></li>
              </ul>
            </section>
          </div>
          <div class="col">
            <section>
              <div class="menu-title">Category 4</div>
              <ul class="mega-links">
                <li><a href="#" class="menu-item">Item 1</a></li>
                <li><a href="#" class="menu-item">Item 2</a></li>
                <li><a href="#" class="menu-item">Item 3</a></li>
                <li><a href="#" class="menu-item">Item 4</a></li>
                <li><a href="#" class="menu-item">Item 5</a></li>
              </ul>
            </section>
          </div>
        </div>
      </div>
    </li>
    <li>
      <a href="#" class="menu-item first-item expand-btn">Blog</a>
      <div class="mega-menu blog sample">
        <div class="content">
          <div class="col">
            <a href="#" class="img-wrapper"><span class="img"><img src="https://picsum.photos/400?random=2" alt="Random Image" /></span></a>
            <div class="menu-title">Your Title</div>
            <p>
              I looked at a lot of menus, something is wrong everywhere.
              In this menu, in my opinion, I took into account all the shortcomings.
              Simple and clear code in pure JS. No Jquery, Bootstrap and other libraries are closed when you click outside the area and press Esc.
            </p>
            <a href="#" class="read-more">read more</a>
          </div>
          <div class="col">
            <a href="#" class="img-wrapper"><span class="img"><img src="https://picsum.photos/400?random=3" alt="Random Image" /></span></a>
            <div class="menu-title">Your Title</div>
            <p>
              I looked at a lot of menus, something is wrong everywhere.
              In this menu, in my opinion, I took into account all the shortcomings.
              Simple and clear code in pure JS. No Jquery, Bootstrap and other libraries are closed when you click outside the area and press Esc.
            </p>
            <a href="#" class="read-more">read more</a>
          </div>
          <div class="col">
            <a href="#" class="img-wrapper"><span class="img"><img src="https://picsum.photos/400?random=4" alt="Random Image" /></span></a>
            <div class="menu-title">Your Title</div>
            <p>
              I looked at a lot of menus, something is wrong everywhere.
              In this menu, in my opinion, I took into account all the shortcomings.
              Simple and clear code in pure JS. No Jquery, Bootstrap and other libraries are closed when you click outside the area and press Esc.
            </p>
            <a href="#" class="read-more">read more</a>
          </div>
          <div class="col">
            <a href="#" class="img-wrapper"><span class="img"><img src="https://picsum.photos/400?random=5" alt="Random Image" /></span></a>
            <div class="menu-title">Your Title</div>
            <p>
              I looked at a lot of menus, something is wrong everywhere.
              In this menu, in my opinion, I took into account all the shortcomings.
              Simple and clear code in pure JS. No Jquery, Bootstrap and other libraries are closed when you click outside the area and press Esc.
            </p>
            <a href="#" class="read-more">read more</a>
          </div>
        </div>
      </div>
    </li>
    <li><a href="#" class="menu-item first-item">Contact Us</a></li>
  </ul>
</header>
 -->


<main class="section bg-100">
  <div class="container">
    <h1>Multi-Level Mega Menu + Dropdown Menu</h1>
    <br>
    <p>
      I looked at a lot of menus, something is wrong everywhere.
      In this menu, in my opinion, I took into account all the shortcomings.
      Simple and clear code in pure JS. No Jquery, Bootstrap and other libraries are closed when you click outside the area and press Esc.
    </p>
    <br>
    <p>;)</p>
    <br>
    <br>
    <p>Without Jquery</p>
    <br>
    <br>
    <p>Full responsibility</p>
    <br>
    <br>
    <p>Closes when clicked outside the area</p>
    <br>
    <br>
    <p>Closes when the Esc key is pressed</p>
  </div>
</main>

<div class="overlay"></div>

<script src="script.js"></script>
<?php include(SHARED_PATH . '/main-footer.php'); ?>
