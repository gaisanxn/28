<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>


<section class="page-header-image">
    <img src="/asset-user/images/logo12.jpeg" alt="Page Header Image" class="img-fluid">
    <div class="page-header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single text-white text-left">
                            <?php foreach ($profil as $perusahaan) :
                                echo lang('Blog.titleOurproducts');
                                if (!empty($perusahaan)) {
                                    echo ' ' . $perusahaan->nama_perusahaan;
                                }
                            endforeach; ?>
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item justify-content-center">
                                <a href="<?= base_url('user/home') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo lang('Blog.headerProducts') ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Intro Single-->

<!-- ======= Latest News Section ======= -->
<section class="section-news section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">
                            <?php echo lang('Blog.btnOurproducts'); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper" style="display: flex; gap: 5px; justify-content: center; align-items: center;">
                <?php foreach ($tbproduk as $produk) : ?>
                    <div class="card-box-b card-shadow news-box" style="margin-right: 5px;">
                        <div class="img-box-b" style="border: 3px solid #8B4513; border-radius: 1px; overflow: hidden;">
                            <img src="/asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                echo $produk->nama_produk_en;
                                                                                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $produk->nama_produk_in;
                            } ?>" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="<?= base_url('user/produk/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                            <?php if (lang('Blog.Languange') == 'en') {
                                                echo $produk->nama_produk_en;
                                            } ?>
                                            <?php if (lang('Blog.Languange') == 'in') {
                                                echo $produk->nama_produk_in;
                                            } ?>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Latest News Section -->
<br>
<br>

<?= $this->endSection('content'); ?>
