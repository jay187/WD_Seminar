<?php
 /**
  * Header output.
  */
  $nav = array(
    'Home' => '/home.php',
    'Unternehmen' => '/company.php',
    'Kontakt' => '/contact.php'
  );
  $header_image = '';
  ?>
<header class="header">
  <div class="logonav wrap">
    <div class="logo">
      <img src="images/logo.svg" class="logo__image">
    </div>
    <nav class="navigation">
      <ul class="navigation-nav">
        <?php foreach ($nav as $title => $url) :
        $css_class = ['navigation-item'];
        $is_active = ($_SERVER['SCRIPT_NAME'] == $url);

        if($is_active) {
          $css_class[] = 'navigation-item--active';
          $header_image = strtolower($title) . '.jpg';
        }
        ?>
        <li class="<?php print join(' ', $css_class);?>">
            <a href="<?php print $url;?>"><?php print $title;?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </header>
  <div class="header-image wrap">
    <img src="images/<?php print $header_image;?>" >
</div>
