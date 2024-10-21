<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<section class="page-header-image">
    <img src="/asset-user/images/logo12.jpeg" alt="Page Header Image" class="img-fluid">
    <div class="page-header-content">    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single text-white">
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
</section>
<!-- End Intro Single-->
<br>
<br>
<!-- ======= About Section ======= -->
<div class="container">
    <div class="row">
        <div class="col-md-12 section-t6 position-relative">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <img data-src="/asset-user/images/<?= $tbproduk->foto_produk ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                echo $tbproduk->nama_produk_en;
                                                                                            } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbproduk->nama_produk_in;
                                    } ?>" class="img-fluid lazyload">
                </div>
                <div class="col-lg-2 d-none d-lg-block position-relative">
                </div>
                <div class="col-md-6 col-lg-5 section-md-t3">
                    <div class="title-box-d">
                        <h3 class="title-d">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $tbproduk->nama_produk_en;
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo $tbproduk->nama_produk_in;
                            } ?>
                        </h3>
                    </div>
                    <p class="color-text-a">
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo $tbproduk->deskripsi_produk_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $tbproduk->deskripsi_produk_in;
                        } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= About Section ======= -->
<br>
<br>

<?= $this->endSection('content'); ?>