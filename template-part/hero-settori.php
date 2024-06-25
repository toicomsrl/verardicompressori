<!-- Title Bar -->
<?php
$titolo = get_field('settori_titolo_testata');
$immagine = get_field('settori_immagine_testata');
?>

<div class="pbmit-title-bar-wrapper" style="background-image: url('<?php echo $immagine; ?>'">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <h2 class="pbmit-tbar-title"><?php echo $titolo; ?></h2>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->