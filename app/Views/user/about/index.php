<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Start Page Header Section -->
<section class="page-header-image">
    <img src="/asset-user/images/logo12.jpeg" alt="Page Header Image" class="img-fluid">
    <div class="page-header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single text-white text-left"><?php echo lang('Blog.titleAboutUs'); ?></h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item justify-content-center">
                                <a href="<?= base_url('user/home') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo lang('Blog.headerAbout') ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Header Section -->
<br>
<br>
<!-- ======= About Section ======= -->
<div class="container">
    <div class="row align-items-center">
        <?php foreach ($profil as $descper) : ?>
            <div class="col-md-6 col-lg-5 d-flex align-items-center">
                <img data-src="/asset-user/images/<?= $descper->foto_utama; ?>" 
                     alt="<?= $descper->nama_perusahaan; ?>" 
                     class="img-fluid lazyload">
            </div>
            <div class="col-md-6 col-lg-7">
                <div class="title-box-d">
                    <p class="color-d"><?= lang('Blog.titleAboutUs') ?></p>
                    <h3 class="title-d"><?= $descper->nama_perusahaan; ?></h3>
                </div>
                <p class="color-text-a">
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo ($descper->deskripsi_perusahaan_en);
                    } ?>
                    <?php if (lang('Blog.Languange') == 'in') {
                        echo ($descper->deskripsi_perusahaan_in);
                    } ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- ======= About Section ======= -->
<br>
<br>

<?= $this->endSection('content'); ?>
