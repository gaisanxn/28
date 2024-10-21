<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- END slider -->
<br><br><br>

<!-- ======= Title Section ======= -->
<div class="intro-body py-1">   
    <h1 class="intro-title text-center">
        <?php foreach ($profil as $title) : ?>
            <?= $title->title_website; ?>
        <?php endforeach; ?>
    </h1>
</div>
<!-- ======= Title Section ======= -->
<br>

<!-- ======= About Section ======= -->
<div class="container">
    <div class="row">
        <div class="col-md-12 section-t6 position-relative">
            <?php foreach ($profil as $descper) : ?>
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <img data-src="/asset-user/images/<?= $descper->foto_utama; ?>" 
                            alt="<?= $descper->nama_perusahaan; ?>" 
                            class="img-fluid lazyload">
                    </div>
                    <div class="col-md-6 col-lg-7 section-md-t3">
                        <div class="title-box-d">
                            <p class="color-d"><?= lang('Blog.titleAboutUs') ?></p>
                            <h3 class="title-d"><?= $descper->nama_perusahaan; ?></h3>
                        </div>
                        <p class="color-text-a">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo character_limiter($descper->deskripsi_perusahaan_in, 1080);
                            } ?>
                        </p>
                        <a href="<?= base_url('user/about') ?>" 
                            class="btn btn-brown py-2 px-3 mt-2 wow zoomIn">
                            <?= lang('Blog.btnReadmore') ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- ======= About Section ======= -->
<br><br><br><br><br><br><br>

<!-- ======= Latest News Section ======= -->
<section id="blog" class="blog">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-12 text-center">
                <div class="heading">
                    <h1><span style="color: #000000;"><?= lang('Blog.btnOurproducts') ?></span></h1>
                    <div class="bord-bot"></div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <?php 
            $count = 0;
            foreach ($tbproduk as $produk) : 
                if ($count < 3) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="blog-cont wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b" style="border: 3px solid #8B4513; border-radius: 1px; overflow: hidden;">
                                <a href="<?= base_url('user/produk/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                    <img src="/asset-user/images/<?= $produk->foto_produk; ?>" 
                                        alt="<?= (lang('Blog.Languange') == 'en') ? $produk->nama_produk_en : $produk->nama_produk_in ?>" 
                                        class="img-b img-fluid" style="object-fit: cover; width: 100%;">
                                </a>
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="<?= base_url('user/produk/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>" 
                                                style="color: #ffffff; padding: 10px; display: block; text-align: center;">
                                                <?= (lang('Blog.Languange') == 'en') ? $produk->nama_produk_en : $produk->nama_produk_in ?>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                $count++;
                endif;
            endforeach; ?>
        </div>
        <div class="title-link" align="right" style="padding-bottom: 50px;">
            <a href="<?= base_url('user/produk') ?>" style="color: #000000;">
                <?= lang('Blog.btnOurproducts') ?>
                <span class="bi bi-chevron-right"></span>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection('content') ?>
