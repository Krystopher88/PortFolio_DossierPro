<?php
require_once('templates/header.php');

$recipes = getRecipes($pdo);
?>

<!-- MainStart -->
<h1>Liste de nos recettes</h1>
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