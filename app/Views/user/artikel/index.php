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
                                echo lang('Blog.titleOurarticle');
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
                                <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo lang('Blog.headerArticle') ?>
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
                            Artikel Terkini
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper" style="display: flex; gap: 5px; justify-content: center; align-items: center;">
                <?php foreach ($artikelterbaru as $row) : ?>
                    <div class="card-box-b card-shadow news-box" style="margin-right: 5px; position: relative;">
                        <a href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>" style="display: block; position: relative;">
                            <div class="img-box-b" style="border: 3px solid #8B4513; border-radius: 1px; overflow: hidden;">
                                <img class="img-b img-fluid" style="object-fit: cover; width: 100%;" src="<?= base_url('asset-user') ?>/images/<?= $row->foto_artikel; ?>" alt="<?= $row->judul_artikel; ?>" loading="lazy">
                            </div>
                            <div class="card-overlay" style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.5); color: #fff; padding: 10px;">
                                <div class="card-header-b" style="color: #fff;">
                                    <div class="card-title-b">
                                        <h2 class="title-2" style="color: #fff;">
                                            <?= substr(strip_tags($row->judul_artikel), 0, 10) ?>...
                                        </h2>
                                    </div>
                                    <div class="card-date" style="color: #fff;">
                                        <span><?= date('d F Y', strtotime($row->created_at)); ?></span>
                                    </div>
                                    <p style="color: #fff;"><?= substr(strip_tags($row->deskripsi_artikel), 0, 30) ?>...</p>
                                </div>
                            </div>
                        </a>
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
