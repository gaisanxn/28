    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                    <div class="credits"><a><?php foreach ($profil as $footer) : ?><?= $footer->teks_footer; ?><?php endforeach; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->