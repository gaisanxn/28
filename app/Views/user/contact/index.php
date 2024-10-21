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
                                echo lang('Blog.titleOurContact');
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
                                <?php echo lang('Blog.headerContact') ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Intro Single-->
<br>
<br>
<br>
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <?php foreach ($profil as $desc) : ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <!-- <p class="fs-5 fw-bold text-primary">Contact Us</p> -->
                    <h5 class="display-7 mb-5">
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo $desc->deskripsi_kontak_en;
                        } ?>
                        <?php if (lang('Blog.Languange') == 'in') {
                            echo $desc->deskripsi_kontak_in;
                        } ?>
                    </h5>
                    <p class="mb-4"></p>
                </div>
            <?php endforeach;  ?>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100">
                    <div class="map">
                        <?php foreach ($profil as $maps) : ?>
                            <?php echo $maps->link_maps ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?= $this->endSection('content'); ?>