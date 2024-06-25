<!-- Title Bar -->
<?php
$titolo = get_field('azienda_testo_sopra_immagine_intro');
$immagine = get_field('azienda_immagine_introduzione');
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