<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title"><i class="fas fa-cart-arrow-down"></i> Carrito</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
            <thead>
              <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <div class="d-flex justify-content-around mb-3">
        <h3 id="totalGeneral"></h3>
        <?php if (!empty($_SESSION['correoCliente'])) { ?>
          <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar Pedido</a>
        <?php } else { ?>
          <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Login</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<!-- Login directo -->

<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="titleLogin">Iniciar Sesión</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body m-3">
        <div class="text-center">
          <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/logo.png'; ?>" alt="" width="100">
        </div>
        <div class="row">
          <div class="col-md-12" id="frmLogin">
            <div class="form-group mb-3">
              <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
              <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo Electrónico">
            </div>
            <div class="form-group mb-3">
              <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
              <input id="claveLogin" class="form-control" type="text" name="claveLogin" placeholder="Contraseña">
            </div>
            <a href="#" id="btnRegister">Todavia no tienes una cuenta?</a>
            <div class="float-end">
              <button class="btn btn-primary btn-lg" type="button" id="login">Login</button>
            </div>
          </div>
          <!-- formulario de registro -->
          <div class="col-md-12 d-none" id="frmRegister">
            <div class="form-group mb-3">
              <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre</label>
              <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre Completo">
            </div>
            <div class="form-group mb-3">
              <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
              <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo Electrónico">
            </div>
            <div class="form-group mb-3">
              <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
              <input id="claveRegistro" class="form-control" type="text" name="claveRegistro" placeholder="Contraseña">
            </div>
            <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
            <div class="float-end">
              <button class="btn btn-primary btn-lg" type="button" id="registrarse">Registrarse</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
  <div class="container">
    <div class="row">

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-util border-bottom pb-3 border-light logo">Ubicanos</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li>
            <i class="fas fa-map-marker-alt fa-fw"></i>
            123 Av. 16 De Julio El Prado 
          </li>
          <li>
            <i class="fa fa-phone fa-fw"></i>
            <a class="text-decoration-none" href="tel:010-020-0340">2 2232360</a>
          </li>
          <li>
            <i class="fa fa-envelope fa-fw"></i>
            <a class="text-decoration-none" href="mailto:info@company.com">InfJager123@company.com</a>
          </li>
        </ul>
      </div>

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li><a class="text-decoration-none" href="#">Joyeria</a></li>
          <li><a class="text-decoration-none" href="#">Tejidos</a></li>
          <li><a class="text-decoration-none" href="#">Artesanias</a></li>
          <li><a class="text-decoration-none" href="#">Ceramica</a></li>
          <li><a class="text-decoration-none" href="#">Mantas</a></li>
          <li><a class="text-decoration-none" href="#">Aguayos</a></li>
          <li><a class="text-decoration-none" href="#">Hechos a mano</a></li>
        </ul>
      </div>

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-light border-bottom pb-3 border-light">Más Información</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li><a class="text-decoration-none" href="#">Hogar</a></li>
          <li><a class="text-decoration-none" href="#">Sobre Nosotros</a></li>
          <li><a class="text-decoration-none" href="#">Ubicación de nuestras tiendas</a></li>
          <li><a class="text-decoration-none" href="#">Preguntas Frecuentes</a></li>
          <li><a class="text-decoration-none" href="#">Contacto</a></li>
        </ul>
      </div>

    </div>

    <div class="row text-light mb-4">
      <div class="col-12 mb-3">
        <div class="w-100 my-3 border-top border-light"></div>
      </div>
      <div class="col-auto me-auto">
        <ul class="list-inline text-left footer-icons">
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-auto">
        <label class="sr-only" for="subscribeEmail">Dirección de correo electrónico</label>
        <div class="input-group mb-2">
          <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
          <div class="input-group-text btn-util text-light">Suscribir</div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-100 bg-black py-3">
    <div class="container">
      <div class="row pt-2">
        <div class="col-12">
          <p class="text-left text-light">
            Copyright &copy; 2024 JaGer
          </p>
        </div>
      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  const base_url = '<?php echo BASE_URL; ?>';

  function alertaPerzanalizada(mensaje, type, titulo = '') {
    toastr[type](mensaje, titulo)

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  }
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
<!-- End Script -->