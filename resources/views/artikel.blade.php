<!DOCTYPE html>
<html lang="en">
<head>
  <title>Berita</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</head>
<body>

<div class="container" style="padding-top: 50px;">
  <a href="{{ route('landingPage') }}">
    <button class="btn btn-primary" style="color: black">Kembali</button>
  </a>
</div>
<br><br>
<div class="container">
    @foreach ($articles as $article)
    <div class="card">
        <div class="card-header text-dark">
            <h5>{{ $article->title }}</h5>
        </div>
        <div class="card-body">
            <a href="/articles/{{ $article->image }}">
                <img class="img-responsive" alt="{{ $article->title }}" style="width:400px;" src="/articles/{{ $article->image }}" >
            </a>
          <br><br>
            <p class="card-text text-dark">{{ $article->content }}</p>
            <br><br>
        </div>
      </div>
    @endforeach
</div>
</body>
</html>
