
<?php include('./includes/init.php');?>
<?php
include_once($tpl ."header.php");
include_once($tpl ."connect.php");

?>
  <img name="slideshow" class="container-fluid py-5 slider ">
 
  <!--fin description-->

  <section id="brand">
    <div class="row m-5 py-5">
      <img class="img-fluid col-lg-3 col-md-4 col-6 mx-auto" src="assets/images/oncolour-logo.jpg">
      <img class="img-fluid col-lg-3 col-md-4 col-6 mx-auto" src="assets/images/optimal.png">
      <img class="img-fluid col-lg-3 col-md-4 col-6 mx-auto" src="assets/images/GIORDANI_GOLD_jpg.jpg">
    </div>
    <div class="row text-center" id="description">
      <p class="col-lg-3 col-md-4 col-6 mx-auto">
        OnColour est une marque de maquillage irrésistible avec une large gamme de couleurs vives qui met en valeur
        instantanément votre look. Obtenez OnColour - elle est facile à utiliser et facile à aimer !</p>
      <p class="col-lg-3 col-md-4 col-6 mx-auto">Optimals
        Nos scientifiques ont sélectionné certains des ingrédients botaniques les plus efficaces et les plus connus en
        Suède pour créer des gammes de soins de la peau sur mesure avec des mélanges d'ingrédients naturels suédois.
        Découvrez les nouveaux produits Optimals !</p>
      <p class="col-lg-3 col-md-4 col-6 mx-auto">Giordani Gold
        Depuis 40 ans, Giordani Gold s’efforce de créer de beaux produits haut de gamme infusés aux matières premières
        les plus exclusives au monde. La quête du savoir-faire et de la perfection reflète notre désir de vous aider à
        vivre votre vie merveilleusement.</p>
    </div>
  </section>



  <!--fin description-->

  <!--nouveau produit-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0 mt-5">
      <h1 class="text-center">Latest product</h1>
      <?php
            $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 0, 3";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($products = $stmt->fetch(PDO::FETCH_ASSOC)) :
                $product_id = $products['id'];
                $product_title = $products['name'];
                $product_detail = substr($products['description'], 0, 140);
                $product_image = $products['picture'];
                $product_price = $products['price'];
        ?>
      <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid" src="assets/images/PARFUM/Eau de Parfum Amber Elixir Mystery.Jpeg" name="images"alt="">
        <div class="details">
          <h2><?php echo $product_title; ?></h2>
          <p><?php echo $product_detail; ?></p>
          <button class="text-capitalize">Acheter</button>
        </div>
      </div>
        <?php endwhile; ?>

    </div>

  </section>
  <section id="future" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Nouveau produit</h3>
      <hr class="mx-auto">
      <p></p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="assets/images/creme/Crème pour le Visage Riche en Vitamines E et B3.Jpeg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">support boots</h5>
        <h4 class=p-price>92 DH</h4>
        <button class="buy-btn">Decouvrir</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="assets/images/creme/Lotion Gel Anti Âge Intense pour le Visage NovAge Men.Jpeg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name"></h5>
        <h4 class=p-price>92 DH</h4>
        <button class="buy-btn">Decouvrir</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="assets/images/creme/Crème pour la Peau Sensible du Corps et du Visage Sun 360 IP 50.Jpeg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">support boots</h5>
        <h4 class=p-price>92 DH</h4>
        <button class="buy-btn">Decouvrir</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="assets/images/creme/Lotion Matifiante pour le Visage Love Nature à l'Extrait d'Arbre.Jpeg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">support boots</h5>
        <h4 class=p-price>92 DH</h4>
        <button class="buy-btn">Decouvrir</button>
      </div>
    </div>
  </section>
  <section id="banner" class="my-5 py-5">
  <div class="container">
      <h4>Nouvelle Mascara</h4>
      <h1>Mascara double effet<br>20%</h1>
      <button class="text-uppercase">Decouvrir</button>

    </div>
  </section>

  <?php include_once($tpl ."footer.php"); ?>