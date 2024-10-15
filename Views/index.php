<?php include_once 'Views/template/header-principal.php'; ?>

  <!-- Start Banner Hero -->
  <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/1.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="h1 text-util"><b>ARTESANIAS</b> BOLIVIANAS</h1>
                <h3 class="h2">TODO LO QUE BUSCAS ESTÁ AQUÍ</h3>
                <p>
                QUIERES COMPRAR UN REGALO TRADICIONAL Y A BUEN PRECIO?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/22.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">ARTESANIAS BOLIVIANAS</h1>
                <h3 class="h2">TODO LO QUE BUSCAS ESTÁ AQUÍ</h3>
                <p>
                 QUIERES AYUDAR A LOS ARTESANOS DE TODOS LOS RINCONES DE <strong>NUESTRO PAÍS?</strong> 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/carrusel/33.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">ARTESANIAS BOLIVIANAS</h1>
                <h3 class="h2">TODO LO QUE BUSCAS ESTÁ AQUÍ </h3>
                <p>
                  OBTEN DESCUENTOS Y PROMOCIONES, HABLA DIRECTAMENTE CON LOS ARTESANOS, ESCRIBENOS SI TIENES ALGUNA DUDA
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <!-- End Banner Hero -->


  <!-- Start Categories of The Month -->
  <section class="container py-5">
    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Categorias</h1>
        <p>
          Contamos con las siguientes:
        </p>
      </div>
    </div>
    <div class="row">
      <?php foreach ($data['categorias'] as $categoria) { ?>
        <div class="col-12 col-md-2 p-5 mt-3">
          <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
          <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- End Categories of The Month -->


  <!-- Start Featured Product -->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Productos</h1>
          <p>
            Estos son algunos de nuestra variedad de produtos
          </p>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data['nuevoProductos'] as $producto) { ?>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
              <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <?php
                $uno = ($producto['calificacion'] >= 1) ? 'text-warning' : 'text-muted';
                $dos = ($producto['calificacion'] >= 2) ? 'text-warning' : 'text-muted';
                $tres = ($producto['calificacion'] >= 3) ? 'text-warning' : 'text-muted';
                $cuatro = ($producto['calificacion'] >= 4) ? 'text-warning' : 'text-muted';
                $cinco = ($producto['calificacion'] == 5) ? 'text-warning' : 'text-muted';                
                ?>
                <li>
                  <i class="<?php echo $uno; ?> fa fa-star"></i>
                  <i class="<?php echo $dos; ?> fa fa-star"></i>
                  <i class="<?php echo $tres; ?> fa fa-star"></i>
                  <i class="<?php echo $cuatro; ?> fa fa-star"></i>
                  <i class="<?php echo $cinco; ?> fa fa-star"></i>
                </li>
                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
              </ul>
              <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
              <p class="card-text">
              <?php echo $producto['descripcion']; ?>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- End Featured Product -->
<?php include_once 'Views/template/footer-principal.php'; ?>

</body>

</html>