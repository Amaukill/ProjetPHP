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
            <?php foreach( $data as $article){ ?>
            <tr>
                <td>
                    <?php echo $article->id ; ?>
                </td>
                <td>
                    <?php echo $article->name ; ?>
                </td>
                <td>
                    <?php echo $article->price ; ?>€
                </td>
                <td>
                    <?php echo $article->description ; ?>
                </td>
                <td>

                </td>
            </tr>
            <?php } ?>
        </table>

    </div>
</div>