<div class="text-center">
    <h1>Bienvenue </h1>
</div>
<?php
$response = file_get_contents("https://meme-api.herokuapp.com/gimme/50");
$response = json_decode($response);
$i = rand(1, 50);
if ($response->count >= 0) {
    ?>
    <div class="text-center">
        <img class="img-fluid" style="height: 50vh;" src="<?php echo $response->memes[$i]->url ?>">
    </div>
<?php } ?>