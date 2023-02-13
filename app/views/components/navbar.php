<?php $user = getLoginAccount();?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed vw-100 z-4">
  <a class="navbar-brand ml-4" href="#">Ticketing <i class="fa fa-fw fa-train"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Landing <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Service <small class="fa fa-fw fa-wrench"></small>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="<?= BASE_URL?>/home">Pesan Tiket<i class="fa fa-fw fa-arrow-right"></i></a>
      </li>
    </ul>
  
  </div>
</nav>