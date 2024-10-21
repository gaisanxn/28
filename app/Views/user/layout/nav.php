 <!-- ======= Header/Navbar ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
     <div class="container">
         <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
             <span></span>
             <span></span>
             <span></span>
         </button>
         <?php foreach ($profil as $header) :  ?>
             <a class="navbar-brand text-brand" href="<?= base_url('user/home') ?>">
                 <img src="<?= base_url('asset-user/images/') . $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" style="max-width: 170px; height: auto;">
             </a>
             <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a id="home-link" href="<?= base_url('user/home') ?>" class="nav-item nav-link <?php if (current_url() == base_url('user/home') || current_url() == base_url()) echo 'active'; ?>"><?php echo lang('Blog.headerHome'); ?></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="<?= base_url('user/about') ?>"><?php echo lang('Blog.headerAbout'); ?></a>
                     </li>
                        <a href="<?= base_url('artikel') ?>" class="nav-item nav-link <?php if (current_url() == base_url('artikel')) echo 'active'; ?>"><?php echo lang('Blog.headerArticle'); ?></a>

                     <li class="nav-item">
                         <a class="nav-link " href="<?= base_url('user/produk') ?>"><?php echo lang('Blog.headerProducts'); ?></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="<?= base_url('user/aktivitas') ?>"><?php echo lang('Blog.headerActivities'); ?></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="<?= base_url('user/contact') ?>"><?php echo lang('Blog.headerContact'); ?></a>
                     </li>
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo lang('Blog.headerLanguage'); ?></a>
                         <div class="dropdown-menu bg-light m-0">
                             <a href="<?= site_url('lang/in') ?>" class="dropdown-item">Indonesia</a>
                             <a href="<?= site_url('lang/en') ?>" class="dropdown-item">English</a>
                         </div>
                     </div>
                 </ul>
             </div>
         <?php endforeach;  ?>
     </div>
 </nav>
 <!-- End Header/Navbar -->