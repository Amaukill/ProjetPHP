<div>
    <div>

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
                    Description
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
                        <?php echo $article->name; ?>
                    </td>
                    <td>
                        <?php echo $article->price; ?>€
                    </td>
                    <td>
                        <?php echo $article->description; ?>
                    </td>
                    <td>
                        <a href="?route=DeleteArticle&id=<?php echo $article->id ?>"><i class="bi bi-x"></i></a>
                        <a href="?route=modifyArticle&id=<?php echo $article->id ?>"><i class="bi bi-gear-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</div>