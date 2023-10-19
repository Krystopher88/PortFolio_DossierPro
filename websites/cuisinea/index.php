<?php
require_once('templates/header.php');

$recipes = getRecipes($pdo, _home_recipes_limit_);
?>

<!--  reprendre au live 10 , reprendre les commentaire à la fin-->

<!-- MainStart -->
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="./assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Cuisinea Themes" width="350" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - Recettes de cuisine </h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quis dolores quo hic inventore tempore accusamus nostrum tempora quasi, sit, alias magnam eos optio, nulla itaque. Alias aliquam ut earum.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
    </div>
  </div>
</div>
<!-- CardRecipesStart -->
<div class="row">

  <?php foreach ($recipes as $key => $recipe) {
    include('templates/recipes_partials.php');
  } ?>

</div>
<!-- CardRecipesEnd -->
<!-- MainEnd -->

<?php
require_once('templates/footer.php');
?>