<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative py-0">
    <div class="swiper-wrapper">
        <?php foreach ($profil as $perusahaan) : ?>
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item-a intro-item">
                    <img src="<?= base_url('asset-user/images/') . $slider->file_foto_slider; ?>" alt="<?= $perusahaan->nama_perusahaan; ?>" class="carousel-image img-fluid">
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->
