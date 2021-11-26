<h1 class="text-center"> Création d'article </h1>
<form method="post" action="?route=CreateArticle" class="w-50 m-auto">
    <div class="mb-3" >
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>