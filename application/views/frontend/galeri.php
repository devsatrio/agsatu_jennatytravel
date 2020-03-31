<section class="gallery-one">
    <div class="container">
        <div class="text-center">
        <h1>Galeri</h1>
        </div>
        <div class="row">
            <?php foreach($gambar as $row){?>
            <div class="col-lg-3 col-md-6">
                <div class="gallery-one__single text-center">
                    <img src="http://localhost/agsatu_jennaty/gambar/galeri/<?php echo $row->gambar;?>" alt="" width="100%">
                    <p><?php echo $row->judul;?></p>
                    <a class="gallery-one__link img-popup" href="http://localhost/agsatu_jennaty/gambar/galeri/<?php echo $row->gambar;?>"><i
                            class="tripo-icon-plus-symbol"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</section>