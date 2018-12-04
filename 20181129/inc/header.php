<?php
 /**
  * Header output.
  */

  $nav = array('Home', 'Unternehmen', 'News');
?>
<header class="header">
  <div class="logonav wrap">
    <div class="logo">
      <img src="images/logo.svg" class="logo__image">
    </div>
    <nav class="navigation">
      <ul class="navigation-nav">
        <?php for ($i = 0; $i < count($nav); $i++) :?>
        <li><a href="#"><?php print $nav[$i];?></a></li>
        <?php endfor; ?>
      </ul>
    </nav>
  </div>
</header>
<div class="header-image wrap">
  <img src="images/header.jpg" >
</div>
