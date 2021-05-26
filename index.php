
<?php include('./includes/init.php');?>
<?php
include_once($tpl ."functions/function.php");
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
      <h1 class="text-center"></h1>
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
     <?php echo " <img class='img-fluid lg'  src='admin/uploads/".$products['picture']."'alt='avatar'/>";?>
        <div class="details">
          <h2><?php echo $product_title; ?></h2>
          <p><?php echo $product_detail; ?></p>
          <p><?php echo $product_price; ?></p>
          <button class="text-capitalize">Acheter</button>
        </div>
      </div>
        <?php endwhile; ?>

    </div>

  </section>
  <section id="future" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
    
      <hr class="mx-auto">
      <p>Nouveau produit</p>
    </div>
    <?php
            $row = "SELECT * FROM products ORDER BY id DESC LIMIT 4, 7";
            $stmnt = $pdo->prepare($row);
            $stmnt->execute();
            while ($prod = $stmnt->fetch(PDO::FETCH_ASSOC)) :
                $prod_id = $prod['id'];
                $prod_title = $prod['name'];
                $prod_detail = substr($products['description'], 0, 140);
                $prod_image = $prod['picture'];
                 $prod_price = $prod['price'];
        ?>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-4 col-md-4 col-12">
      <?php echo " <img class='img-fluid mb-3'  src='admin/uploads/".$prod['picture']."'alt='avatar'/>";?>
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $prod_title; ?></h5>
        <h4 class=p-price><?php echo $prod_price; ?></h4>
        <button class="buy-btn">Decouvrir</button>
      </div>
      <?php endwhile; ?>
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
