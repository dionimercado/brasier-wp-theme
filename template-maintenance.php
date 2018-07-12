<?php /* Template Name: Maintenance */ ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <?php wp_head() ?>

  <style media="screen">
    body {
      text-align: center;
      height: 100vh;
    }
    img {
      width: 100%;
      display: block;
    }
    p {
      display: block;
      font-size: 44px;
      font-family: 'Oswald', sans-serif;
      background-color: #7f8486;
      color: #edb8ba;
      padding: 10px 30px;
      text-transform: uppercase;
      margin-top: 3rem;
      border-radius: 100%;
    }

    @media screen and (max-width: 768px) {
      p {
        font-size: 30px;
        padding: 6px 30px;
      }
    }
  </style>
</head>
<body <?php body_class() ?>>

  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 mx-auto h-100">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="img-responsive" alt="">
          <p>Coming Soon</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <?php wp_footer() ?>
</body>
</html>
