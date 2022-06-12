<?php require 'includes/header.php';
     require 'includes/init.php';
//  Database Connection 
$conn = require 'includes/db.php';


// if (!$conn) {
// die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// echo "</br>";
?>

<!-- Owel slider -->
<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item"><img src="/uploads/IMAGE (1).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (10).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (11).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (12).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (13).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (14).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (15).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
  <div class="item"><img src="/uploads/IMAGE (16).jpg" alt="Owl Image"
      style="width: 626px; height: 530px; object-fit: cover;"></div>
</div>

<!-- Start Main Content -->
<!-- Start our services section -->
<section id="our_services">
  <h1 hidden>what we do section</h1>
  <div class="container mb-5">
    <div class="row text-center">
      <div class="col-12">
        <h2>Our Services</h2>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <p class="lead">We are a digital photography studio specializing in landscape, advertorial and conceptual
          photography, based in New York. We love to turn ideas into beautiful things.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row gx-lg-5 gy-lg-5 px-lg-3 text-center">
      <div class="mt-0 mt-lg-3 col-lg-4">
        <h3><img src="/css/images/icons/camera-new-icon-last.png" alt="camera" /> Photography</h3>
        <p class="lead">Donec elit non mi porta gravida eureget metus. Aenean eu leo quam. Pellentesque ornare sem por
          quam venenatis
          vestibulum.</p>
      </div>
      <div class="mt-0 mt-lg-3 col-lg-4 text-center">
        <h3><img src="/css/images/icons/video-icon-new.png" alt="video" /> Motion Video</h3>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id
          elit. Sed
          posuere consectetur.</p>
      </div>
      <div class="mt-0 mt-lg-3 col-lg-4 text-center">
        <h3><img src="/css/images/icons/brush up.png" alt="retouching" />Photo Retouching</h3>
        <p class="lead">Maecenas sed diam eget risus varius blandit amet non magna. Nullam id dolor id nibh ultricies
          vehiculaelit
          praesent commodo.</p>
      </div>
    </div>
  </div>
</section>
<!-- End our services section -->
<!-- Start Our Speciality   -->
<section id="our_speciality">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2>Our Speciality</h2>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <p class="lead">We are a digital photography studio specializing in landscape, advertorial and conceptual
          photography, based in New York. We love to turn ideas into beautiful things.</p>
      </div>
    </div>
  </div>

  <div class="container mt-1">
    <div class="row">
      <div class="mt-3 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="/css/images/cards/fashion.png" alt="Card image cap"
            style="width: 350px; height: 228px; object-fit: cover;" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h3>Fashion</h3>
            <p class="lead text-center">This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <!-- /col -->
      <div class="mt-3 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="/css/images/cards/products.png" alt="Card image cap"
            style="width: 350px; height: 228px; object-fit: cover;" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h3>Products</h3>
            <p class="lead text-center">This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <!-- /col -->
      <div class="mt-3 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="/css/images/cards/events.png" alt="Card image cap"
            style="width: 350px; height: 228px; object-fit: cover;" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h3>Events</h3>
            <p class="lead text-center">This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End Our Speciality   -->

<?php require 'includes/footer.php';?>