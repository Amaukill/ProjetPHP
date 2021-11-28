<?php if ($data != null) { ?>
    <h1 class="text-center"> Modification de l'article <?php echo $data->name; ?> </h1>
<?php } else { ?>
    <h1 class="text-center"> Création d'article </h1>
<?php } ?>
<form method="POST" action="?route=ModifyArticle<?php if ($data != null) { ?>&id=<?php echo $data->id;} ?>" class="w-50 m-auto">
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" name="name" placeholder="<?php if ($data != null) {
            echo $data->name;
        } ?>">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" class="form-control" name="price" placeholder="<?php if ($data != null) {echo $data->price;} ?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" placeholder="<?php if ($data != null) {echo $data->description;} ?>">
    </div>
    <div class="mb-3">
        <label for="categorie_id" class="form-label">ID de la Catégorie</label>
        <input type="number" class="form-control" name="categorie_id" placeholder="<?php if ($data != null) {echo $data->categorie_id;} ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>