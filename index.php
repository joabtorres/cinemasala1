<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/regular.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/solid.min.css">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Cinema Sala 01</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/images/logo-menu.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselHomePage" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
      <div class="carousel-item">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
      <div class="carousel-item">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomePage" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHomePage" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container padding-section">
    <div class="row">
      <div class="col">
        <h3 class="text-center fw-bolder mb-5"><i class="fa-solid fa-clapperboard text-orange me-1"></i>Filmes em exibição</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="assets/images/filme-cartaz.jpg" alt="Titulo do filme - Cinema Sala01">
            <a href="" class="btn btn-success d-block mt-1"><i class="fa-solid fa-bullhorn"></i> Informações</a>
            <a href="" class="btn btn-danger d-block mt-1"><i class="fa-brands fa-youtube"></i> Trailer</a>
          </div>
          <div class="flex-grow-1 ms-3">
            <table class="table table-bordered table-striped">
              <thead>
                <tr class="bg-dark text-white">
                  <td colspan="2">
                    <h5 class="pt-2 pb-2 mb-0"><i class="fa-solid fa-clapperboard text-orange me-1"></i> Planeta dos Macacos: O Reinado <span class="float-end"><span class="p-1 ps-2 pe-2 me-1 bg-white text-black rounded">2D</span> <span class="p-1 ps-2 pe-2 me-1 bg-warning text-white rounded">12</span></span> </h5>
                  </td>
                </tr>
                <tr class="bg-secondary text-white">
                  <td width="250px">Dias</td>
                  <td>Sessões</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle">Quinta-feira - 09/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Sexta-feira - 10/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Sábado - 11/04/2024 </td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Domingo - 12/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Segunda-feira - 13/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Terça-feira - 14/04/2024 </td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Quarta-feira - 15/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" alt="Anuncie aqui - Cinema Sala 01"></div>
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" alt="Anuncie aqui - Cinema Sala 01"></div>
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" alt="Anuncie aqui - Cinema Sala 01"></div>
    </div>
  </div>
  <div id="container-img"></div>
  <div class="bg-secondary text-white" id="whatsapp-container">
    <div class="container pt-4 pb-5">
      <div class="row">
        <div class="col">
          <h3 class="text-center"><i class="fa-solid fa-ticket me-1 text-orange "></i> Antecipe seu ingresso</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="assets/images/whatsapp.png" alt="Whatsapp do cinema sala 01" class="align-self-center mr-3">
            </div>
            <div class="flex-grow-1 ms-3">
              <h3 class="mb-0">Garanta seu lugar conosco!</h3>
              <p class="mb-4">Compre seu ingresso via whatsApp e aproveite o melhor do cinema com toda a comodidade. É rapido, fácil e seguro.</p>
              <a href="#" class="btn btn-primary btn-lg"><i class="fa-brands fa-whatsapp text-orange me-1"></i> Entrar em contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-white" id="rodape">
    <div class="container pt-5 pb-1">
      <div class="row">
        <div class="col-md-4">
          <h5 class="fw-bold">Menu</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Home</a></li>
            <li><a href="#" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Filmes</a></li>
            <li><a href="#" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Nóticias</a></li>
            <li><a href="#" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Sobre</a></li>
            <li><a href="#" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Contato</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold">Mídias sociais</h5>
          <ul class="list-inline">
            <li>
              <a href="" title="Whatsapp do Cinema Sala1" target="_blank" class="fs-1 me-2"><i class="fa-brands fa-square-whatsapp"></i></a>
              <a href="" title="Facebook do Cinema Sala1" target="_blank" class="fs-1 me-2"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="" title="Instagram do Cinema Sala1" target="_blank" class="fs-1 me-2"><i class="fa-brands fa-square-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold">Empresa</h5>
          <ul class="list-unstyled">
            <li>CINEMA SALA 01</li>
            <li>CPNJ: XXXXXXXXXXXXXXX</li>
            <li>Endereço: </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <hr>
          <p class="text-center"> <i class="fa-regular fa-copyright me-1 text-danger"></i> 2024 | Desenvolvido com <i class="fa-regular fa-heart text-danger"></i> por <a href="https://joabtorres.com.br/" target="_blank" class="text-decoration-none text-white text-white-hover">Joab T. Alencar</a>.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>