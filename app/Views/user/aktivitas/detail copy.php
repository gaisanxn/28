<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleActivities');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('user/home') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.titleActivities');  ?></span>
        </div>
    </div>
</div>

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <h1 style="color: #116530">
                    <b>
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo $tbaktivitas->nama_aktivitas_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $tbaktivitas->nama_aktivitas_in;
                        } ?>
                    </b>
                </h1>
                <p>
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo $tbaktivitas->deskripsi_aktivitas_en;
                    } elseif (lang('Blog.Languange') == 'in') {
                        echo $tbaktivitas->deskripsi_aktivitas_in;
                    } ?>
                </p>
            </div>
            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <img data-src="/asset-user/images/<?= $tbaktivitas->foto_aktivitas ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                    echo $tbaktivitas->nama_aktivitas_en;
                                                                                                } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbaktivitas->nama_aktivitas_in;
                                    } ?>" class="img-fluid lazyload">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<?= $this->endSection('content'); ?>