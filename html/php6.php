<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Php with bootstrap</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
  </head>
  <body>

    <div class="container">
<header>
  <h1><a href="php2.php">1.Örneğe Git</a></h1>
  <p class="lead">
    <?php
    $sonuc=4+4;
    if($sonuc==8)
    {
      echo "Bu sayfa Sakarya Üniversitesi öğrenci balosu davetiyesidir !";
    }
    ?>
  </p>
</header>
<div class='navbar'>
  <?php
  $menu=Array("Home","Features","Testimonials","Sabis");
  echo "
  <ul class='nav navbar-nav'>
    <li class='active'><a href='#'>$menu[0]</a></li>
    <li><a href='#features'>$menu[1]</a></li>
    <li><a href='#testimonials'>$menu[2]</a></li>
    <li><a href='http://sabis.sakarya.edu.tr' target='_blank'>$menu[3]</a></li>
  </ul>";
  ?>
</div>
<div class="carousel slide" id="carousel-example">
<ol class="carousel-indicators">
  <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example" data-slide-to="1"></li>
  <li data-target="#carousel-example" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="item active">
    <img src="http://www.lorempixel.com/1170/300" alt="Image">
    <div class="carousel-caption">This is caption</div>
  </div>
  <div class="item">
    <img src="http://www.lorempixel.com/1170/300/people" alt="Image">
    <div class="carousel-caption">This is caption 2</div>
  </div>
  <div class="item">
    <img src="http://www.lorempixel.com/1170/300/business" alt="Image">
    <div class="carousel-caption">This is caption 3</div>
  </div>
</div>
<a href="#carousel-example" class="left carousel-control" data-slide="prev">
  <span class="icon-prev"></span></a>
<a href="#carousel-example" class="right carousel-control" data-slide="next">
  <span class="icon-next"></span></a>
</div>
<section id="features">
  <h3>
    Product Features
  </h3>
  <p>
    <?php
     if($menu[0]=="Home")
     {
       echo "HOME SWEET HOME";
     }
     else {
       echo "ANAN ZAAAA xd";
     }
     ?>
  </p><hr>
  <div class="row">
    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi.
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi.
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi.
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi.
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi.
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
        <div class="media"><a href="#" class="pull-left">
          <img src="http://lorempixel.com/64/64" alt="Image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Feature Name</h4>
          <p>
              Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>


  </div>
</section>
<hr>
<section id="testimonials">
<div class="panel">
  <div class="panel-heading">A few words from our customers.</div>
  <div class="row">
    <div class="col-lg-6">
      <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, molestiae. <small>John from<cite>Source</cite></small></blockquote>
    </div>
    <div class="col-lg-6">
      <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, nemo?<small>John from<cite>Source</cite></small></blockquote>
    </div>
  </div>
</div>
 </section>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
