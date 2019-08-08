<?php
  require("config.php");
?>
<header id="header">
  <div class="header__top">
    <div class="container">
      <div class="header__top__logo">
        <h1><?php echo $config["title"]?></h1>
      </div>
      <nav class="header__top__menu">
        <ul>
          <li><a href="/">Main</a></li>
          <li><a href="/pages/about-me.php">About</a></li>
          <li><a href="<?php echo $config["facebook_url"]?>">Facebook</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="header__bottom">
    <div class="container">
      <nav>
        <ul>
          <li><a href="#">Security</a></li>
          <li><a href="#">Programming</a></li>
          <li><a href="#">Lifestyle</a></li>
          <li><a href="#">Music</a></li>
          <li><a href="#">Guide</a></li>
          <li><a href="#">Overviews</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>