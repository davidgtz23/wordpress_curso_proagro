
    <div class="container footer_proagro">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Menú</h5>
            <?php if(has_nav_menu('footer-menu')): ?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'menu_id' => 'footer-menu',
                    'menu_class' => 'nav flex-column',
                    'container_class' => 'nav-item mb-2'
                ]); ?>
            <?php endif; ?>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5></h5>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5></h5>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2022 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </footer>
    </div>



    <?php wp_footer(); ?>
</body>
</html>