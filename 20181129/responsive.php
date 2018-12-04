<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Wireframe Seite</title>
  <link rel="stylesheet" href="responsive.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
</head>
<body>

  <div class="page">
    <?php
      // Header einbinden.
      include 'inc/header.php';
    ?>
    <div class="wrap wrap--main">
      <main class="main clearfix">
        <h1>Willkommen zu Media Queries</h1>
        <section>
          <article>
            <h2>Auch hier steht eine Überschrift</h2>
            <img src="images/bild1.jpg" class="align-left" >
            <p>Nulla non lorem eget dui fermentum luctus at nec quam. Proin sit amet enim vehicula urna consectetur pulvinar in a diam. In molestie metus vel commodo consequat. Donec ut leo a est congue rhoncus eget eget nisl. Cras finibus leo sit amet est sollicitudin facilisis.</p>
            <img src="images/bild2.jpg" class="align-right" >
            <p>Suspendisse efficitur sapien in elit tristique sodales. Nunc finibus eros vel porttitor auctor. Integer efficitur ipsum ac velit venenatis, a tempus arcu facilisis.</p>
            <div class="image-text">
              <img src="images/bild3.jpg" class="image-text__image" >
              <div class="image-text__text">Hier steht Text auf dem Bild</div>
            </div>
            <p>Morbi ut arcu nec purus sodales venenatis. Maecenas pretium massa non metus elementum iaculis. Donec sed massa blandit, pretium est sed, laoreet felis. Integer molestie quam eget mi lacinia, a consequat dui rhoncus.</p>
            <a class="read-more" href="#">Weiterlesen</a>
          </article>
        </section>
      </main>
      <aside class="sidebar">
        <h3>News</h3>
        <section>
          <article class="article">
            <header>
              <h4>Neue Website</h4>
              <span class="date">10.10.2018</span> - <span class="tags"><a href="#">#company</a></span>
            </header>
            <p>Duis volutpat sem in nunc volutpat ullamcorper. Praesent id turpis feugiat, gravida purus vitae, vehicula nulla. Integer ullamcorper arcu eget elit malesuada eleifend. Nulla eget massa non felis scelerisque faucibus id in leo.</p>
          </article>
          <article class="article">
            <header>
              <h4>Neue Website</h4>
              <span class="date">10.10.2018</span> - <span class="tags"><a href="#">#company</a></span>
            </header>
            <p>Duis volutpat sem in nunc volutpat ullamcorper. Praesent id turpis feugiat, gravida purus vitae, vehicula nulla. Integer ullamcorper arcu eget elit malesuada eleifend. Nulla eget massa non felis scelerisque faucibus id in leo.</p>
          </article>
          <article class="article">
            <header>
              <h4>News mit Bild</h4>
              <span class="date">10.10.2018</span> - <span class="tags"><a href="#">#company</a></span>
            </header>
            <img src="images/bild4.jpg">
          </article>
        </section>
      </aside>
    </div>
    <?php
      // Footer einbinden.
      include 'inc/footer.php';
    ?>
  </div>
</body>
</html>
