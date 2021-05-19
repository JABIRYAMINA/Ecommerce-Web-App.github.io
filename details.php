<?php
include_once("includes/templates/header.php")

?>
<div class="container mon-conteneur">
    <div class="row">
        <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/maquillage/rogee.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/maquillage/Rouge à Lèvres Crémeux OnColour.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/maquillage/uu.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        <div class="col-md-7">
          <p class="nouveau text-center">nouveau</p>
          <h2>Rouge à Lèvres Crémeux OnColour</h2>
          <p>one colour</p>
          <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
         
        </div>
        <p class="price">50 DH</p>
      <p><b>created-at</b></p>
      <p><b>updated-at</b></p>
      <label>Quantité</label>
      <input type="text" class="quantite" value="1">
      <button type="button" class="btn btn-default" id="panier">Ajouter au panier</button>
        </div>
    </div>
</div>
<?php
include_once("includes/templates/footer.php")

?>