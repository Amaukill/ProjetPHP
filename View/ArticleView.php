<div>
    <div>
        <h1 class="text-center"> Liste d'articles </h1>
        <table class="table w-100">
            <thead class="thead-dark">
            <tr>
                <td scope="col">
                    Id
                </td>
                <td scope="col">
                    Nom
                </td>
                <td scope="col">
                    Prix
                </td>
                <td scope="col">
                    Actions
                </td>

            </tr>
            </thead>
            <?php
            foreach ($data as $article) { ?>
                <tr>
                    <td>
                        <?php echo $article->id; ?>
                    </td>
                    <td>
                        <a href="?route=ShowArticle&id=<?php echo $article->id ?>"> <?php echo $article->name; ?></a>
                    </td>
                    <td>
                        <?php echo $article->price; ?>€
                    </td>
                    <td>
                        <a href="?route=DeleteArticle&id=<?php echo $article->id ?>"><i class="bi bi-x"></i></a>
                        <a href="?route=ModifyArticleView&id=<?php echo $article->id ?>"><i class="bi bi-gear-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</div>