<?php $tittle = "IDEA COB - Home";
session_start();?>
<?php require_once("partials/head.php");?>
<?php require_once("partials/header.php");?>
<main>
  <!-- HEAD -->

                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner" role="listbox">
                       <!-- Slide One - Set the background image for this slide in the line below -->
                       <div class="carousel-item active" style="background-image: url('images/crollcarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>CROLL</h2>
                           <p>Apliques | IP20 | Orientables | CRI90 </p>
                         </div>
                       </div>
                       <!-- Slide Two - Set the background image for this slide in the line below -->
                       <div class="carousel-item" style="background-image: url('images/fedrocarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>FEDRO</h2>
                           <p>Empotrables | IP20--IP44 | COB</p>
                         </div>
                       </div>
                       <!-- Slide Three - Set the background image for this slide in the line below -->
                       <div class="carousel-item" style="background-image: url('images/urocarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>URO</h2>
                           <p> Proyectores | Exterior | IP68</p>
                         </div>
                       </div>
                     </div>

                   </div>
                   <!-- NPRODUC -->
<div class="container-section-2-index" >
  <div class="row sectionindex">
      <div class="col letrablanca col-section-2-index col1" style="background-color: #080F5B">
          <div class="titlesectionindex"> <a href="faqs.php"></a> Por qué LED COB?</div>


      </div>
      <div class="col letrablanca col-section-2-index col2" style="background-color: #0D19A3">
          <div class="titlesectionindex"> <a href="productos2.php" class="">Armá tu luminaria! </a></div>

      </div>
      <div class="col col-section-2-index col3"style="background-color: #24FCC4" >
          <div class="titlesectionindex"> <a href="contacto.php"></a>Nuestras familias </div>

      </div>
  </div>


</div>


<div class="row justify-content-center titlesectionindex2 ">

        <h2> /revelá el espacio</h2>


</div>
<div class="vw-100 bg-dark">
  <div class="card-group mt-5 p-5">
    <div class="col-12 card m-2 letrablanca">
      <img class="card-img-top" src="images\lacoste.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="col-12 card m-2 letrablanca">
      <img class="card-img-top" src="images\lacoste.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="col-12 col-md-4 card m-2 letrablanca">
      <img class="card-img-top" src="images\lacoste.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>

</div>


</main>
<?php require_once("partials/footer.php"); ?>
</body>
</html>
