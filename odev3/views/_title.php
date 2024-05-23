<?php define("baslik", "Popüler Filmler"); ?>

<?php
    $activeFilmSayisi = 0;

    foreach(getData()["movies"] as $film) {
        if($film["is-active"]) {
            $activeFilmSayisi++;
        }
    }
?>
    
<h1 class="mb-4"><?php echo baslik ?></h1>
<p class="text-muted">
    <?php echo "$activeFilmSayisi kategoride $activeFilmSayisi film listelenmiştir." ?>
</p>