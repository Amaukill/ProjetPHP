<div>
    <div>
        <h1 class="text-center"> Liste de catégories </h1>
        <table class="table w-100">
            <thead class="thead-dark">
            <tr>
                <td scope="col">
                    Id
                </td>
                <td scope="col">
                    Nom
                </td>

            </tr>
            </thead>
            <?php
            foreach ($data as $categorie) { ?>
                <tr>
                    <td>
                        <?php echo $categorie->id; ?>
                    </td>
                    <td>
                        <a href="?route=FindArticleByCategorie&id=<?php echo $categorie->id ?>"> <?php echo $categorie->name; ?></a>
                    </td>
                    <td>
                        <a href="?route=DeleteCategorie&id=<?php echo $categorie->id ?>"><i class="bi bi-x"></i></a>
                        <a href="?route=ModifyCategorieView&id=<?php echo $categorie->id ?>"><i class="bi bi-gear-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</div>