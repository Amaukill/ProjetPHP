<?php if ($data != null) { ?>
    <h1 class="text-center"> Modification de la catégorie <?php echo $data->name; ?> </h1>
<?php } else { ?>
    <h1 class="text-center"> Création de catégorie </h1>
<?php } ?>
<form method="POST" action="?route=ModifyCategorie<?php if ($data != null) { ?>&id=<?php echo $data->id;} ?>" class="w-50 m-auto">
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" name="name" placeholder="<?php if ($data != null) {echo $data->name;} ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>