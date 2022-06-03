
<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
  <footer class="text-center text-lg-start bg-light text-muted" id="sobre">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Petshop
          </h6>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque rerum magni ullam error aut impedit nostrum veniam laborum, voluptatem accusantium possimus eum ea similique, vero illo, animi ex adipisci corrupti?
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Serviços
          </h6>
          <p>
            <a href="#!" class="text-reset">Entrega Domicílio</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Centro Veterinário</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Exames e Vacinas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Centro de Estética</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links
          </h6>
          <p>
            <a href="#!" class="text-reset">Exemplo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Exemplo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Exemplo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Exemplo</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fa fa-home"></i> Fortaleza-CE, CEP: 60000-000</p>
          <p>
            <i class="fa fa-envelope"></i>
            info@petshop.com
          </p>
          <p><i class="fa fa-phone"></i> (85) 9xxxx-xxxx</p>
          <p><i class="fa fa-print"></i> (85) 9xxxx-xxxx</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
