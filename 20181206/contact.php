<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Kontakt</title>
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
        <h1>Kontakt</h1>
        <div class="contact-form">
          <?php include 'inc/form.php';?>
        </div>
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
