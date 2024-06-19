<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #FFF5DA;">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/images/logo.svg') ?>" alt="Logo" height="30">
        Kemakom
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary text-white" href="#register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</body>

</html>