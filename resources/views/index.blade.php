
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV DETRANS LOGISTIK</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logos/logo.jpeg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#berita">Berita</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#legalitas">Legalitas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Visi & Misi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Pelayanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#trucksUnit">Unit Truck</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#delivryPrice">Pengiriman</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#customer">Customer</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading text-black">Selamat Datang di Logistik Kami!</div>
                <div class="masthead-heading text-uppercase">CV.DETRANS LOGISTIK</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Lihat lebih banyak</a>
            </div>
        </header>
        <!-- Berita-->
        <section class="page-section" id="berita">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Berita</h2>
                </div>
                <br><br>
                <div>
                    <!--Carousel Wrapper-->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      &nbsp; Berita Teratas
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
      <li data-target="#multi-item-example" data-slide-to="3"></li>
      <li data-target="#multi-item-example" data-slide-to="4"></li>
      <li data-target="#multi-item-example" data-slide-to="5"></li>
      <li data-target="#multi-item-example" data-slide-to="6"></li>
      <li data-target="#multi-item-example" data-slide-to="7"></li>
      <li data-target="#multi-item-example" data-slide-to="8"></li>
      <li data-target="#multi-item-example" data-slide-to="0"></li>
      <li data-target="#multi-item-example" data-slide-to="10"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--slide-->
      @foreach ($articles->reverse() as $article)
        <div class="{{ $loop->first ? 'carousel-item active' : 'carousel-item' }}">
                <div class="row">
                    <div class="col">
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
                                    <a href="{{ route('artikel') }}" class="btn btn-primary">Lihat Berita Lainnya ...</a>
                                </div>
                              </div>
                    </div>
                </div>
        </div>
      @endforeach
      <!--/slide-->
    </div>
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->
                </div>
            </div>
        </section>
        <!-- Legalitas-->
        <section class="page-section bg-light" id="legalitas">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Legalitas</h2>
                </div>
                <br><br>
                <div class="text-center">
                    <div class="row">
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas1.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas1.jpeg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas2.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas2.jpeg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas3.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas3.jpeg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas4.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas4.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="text-center">
                    <div class="row">
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas5.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas5.jpeg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas6.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas6.jpeg" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/assets/img/legalitas/legalitas7.jpeg">
                                <img width="250px" height="400px" src="/assets/img/legalitas/legalitas7.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Visi & Misi</h2>
                    <br>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row text-center">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visi</h4>
                        <p class="text-muted">Menjadi badan usaha pengangkutan darat yang terus berkembang dan menjadi salah satu yang terbaik</p>
                    </div>
                    <!-- <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div> -->
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Misi</h4>
                        <p class="text-muted">Memberikan pelayanan terbaik secara profesional dan penuh tanggung jawab dalam segala aspek serta efisiensi kerja dalam pengangkutan kerja</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portofolio</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                    <br>
                    <br>
                </div>

                <!-- asli dari template -->
                <!-- <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/others/portofolio6.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div id="carouselExampleControls" class="carousel slide text-center col-lg-7 mx-auto" data-ride="carousel">
                    <div class="carousel-inner">
                      @foreach ($images->reverse() as $image)
                        <div class="{{ $loop->first ? 'carousel-item active' : 'carousel-item' }}">
                            <img class="img-responsive" alt="{{ $image->title }}" style="width:400px;" src="/uploads/{{ $image->image }}" >
                        </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                  <br><br>

                  <div class="text-center">
                    <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/detrans_log?igshid=hb9ihmlnleh6" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <p>@detrans_log</p>
                  </div>
                </div>
                <br><br><br>
                <div class="col-lg-7 mx-auto text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="6" ></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="9" ></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="10"></li> --}}
                        </ol>

                        <div class="carousel-inner">
                          @foreach ($youtubes->reverse() as $youtube)
                            <div class="{{ $loop->first ? 'carousel-item active' : 'carousel-item' }}">
                                <iframe
                                    width="560"
                                    height="315"
                                    src="{{ $youtube->youtube_link }}"
                                    allowfullscreen>
                                </iframe>
                                {{-- <h1>{{ $youtube->youtube_link }}</h1> --}}
                            </div>
                          @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                <br><br>
                <div class="text-center">
                    <a class="btn btn-dark btn-social mx-2" href="https://youtu.be/VXV3-MggmxA" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <p>Dedi Haris</p>
                </div>

            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <br>
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Kami adalah perusahaan yang bergerak dibidang pengangkutan darat. Dengan rute Pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali dan Lombok. Kami memiliki armada yang siap melayani kebutuhan anda. Dengan armada fuso, tronton, trailer yang bagus dan terawat. Serta sopir yang berpengalaman siap untuk melayani kiriman anda</p></div>
                    <!-- <h3 class="section-subheading text-muted">Kami adalah perusahaan yang bergerak dibidang pengangkutan darat. Dengan rute Pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali dan Lombok. Kami memiliki armada yang siap melayani kebutuhan anda. Dengan armada fuso, tronton, trailer yang bagus dan terawat. Serta sopir yang berpengalaman siap untuk melayani kiriman anda</h3> -->
                    <br>
                </div>
                <!-- <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul> -->
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pelayanan Kami</h2>
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Melayani pengangkutan ke seluruh Pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali dan Lombok sesuai dengan segmentasi kargo darat yang dibutuhkan oleh pelanggan, sesuai dengan kondisi yang ada</p></div>
                </div>
                <div class="text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Java_Transportation_Network_id.svg/450px-Java_Transportation_Network_id.svg.png" class="img-fluid" alt="Responsive image">
                </div>
                <br>
                    <!-- <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-1"></div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Melayani pengangkutan ke seluruh Pulau Jawa, Sumatera, Kalimantan, Sulawesi, Bali dan Lombok sesuai dengan segmentasi kargo darat yang dibutuhkan oleh pelanggan, sesuai dengan kondisi yang ada</p></div>
                </div> -->
            </div>
        </section>


        <!-- Jenis dan Spesifikasi trucks -->
        <section class="page-section" id="trucksUnit">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Unit Truck Kami</h2>
                    <br>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="team-member">
                            <!-- <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" /> -->
                            <h4>Jenis Kendaraan</h4>
                            <br>
                            <p class="text-muted">Truk Fuso</p>
                            <p class="text-muted"><b>Truk Colt Diesel</b></p>
                            <p class="text-muted">Truk Tronton</p>
                            <p class="text-muted"><b>Truk Gandeng</b></p>
                            <p class="text-muted">Truk Trailer Bak</p>
                            <p class="text-muted"><b>Truk Semi Trailer</b></p>
                            <p class="text-muted">Low Bad / Dolly</p>
                            <p class="text-muted"><b>Salfoder</b></p>
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="team-member">
                            <!-- <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" /> -->
                            <h4>Spesifikasi</h4>
                            <br>
                            <p class="text-muted">Panjang Bak 6 - 8M, Berat +/- 10 Ton</p>
                            <p class="text-muted"><b>Panjang Bak 4 - 5,5M, Berat +/- 4 - 7 Ton</b></p>
                            <p class="text-muted">Panjang Bak 9,5M, Berat +/- 25 - 30 Ton</p>
                            <p class="text-muted"><b>Panjang Bak Engkel Gandeng 5,5M, Berat +/- 30 Ton</b></p>
                            <p class="text-muted">Panjang Bak 13M, Berat +/- 50 Ton</p>
                            <p class="text-muted"><b>Panjang Bak 10M, Berat +/- 45 Ton</b></p>
                            <p class="text-muted">Panjang Bak 7 - 12M</p>
                            <p class="text-muted"><b>Panjang Bak 9,5M</b></p>
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Delivery Price -->
        <section class="page-section bg-light" id="delivryPrice">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Harga Pengiriman</h2>
                    <br>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!-- <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4> -->
                                    <br>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Kami akan menentukan harga pengiriman berdasarkan jenis mobil dan dengan jarak yang harus ditempuh dan berat muatan yang harus dikirim</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!-- <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4> -->
                                    <br>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Harga yang berikan hanyalah ongkos kirim dan diluar biaya asuransi dan biaya bongkar muat (kecuali ada kesepakatan yang ditentukan)</p></div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!-- <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4> -->
                                    <br>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Kami punya komitmen untuk selalu memberikan harga yang competitive untuk anda</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <!-- <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4> -->
                                    <br>
                                    <br>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Silahkan hubungi kami lebih lanjut untuk harga pengiriman yang anda butuhkan </p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>
                                    Jadilah
                                    <br />
                                    Bagian
                                    <br />
                                    Dari Kami !
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Clients-->
        <section class="page-section" id="customer">
            <div class="py-5">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Customer Kami</h2>
                        <br><br><br><br>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="https://i0.wp.com/lokerku.net/wp-content/uploads/2019/11/PT-Fajar-Surya-Wisesa-Tbk.png" alt="" /></a>
                        </div>
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" width="150" height="150" src="https://tatagraha.com/wp-content/uploads/2020/08/nagata-logo-300x300.jpg" alt="" /></a>
                        </div>

                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAM1BMVEX////gACr3v8roQF/vf5TiEDf97/LkIEXzn6/73+TsYHrmMFL5z9fqUG31r7zucIjxj6HjkHExAAADaUlEQVR4nO3Y2ZqjKhSGYSOg4Hz/V9smoiwQHLr30X6+96jKCoRfF4NVVQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+t5pad0qZz49Snba1+GvtuaTVfr1Jrg916S+Vq63WatX+vsooNeol+Vg96e9oVL8Np/2OZxqepLC+SazvrB/5fkUnDffrdXy5Dn2UWpy+a572j6jSZ8YlvZGJxZSafr9geB+kFR24fIuM1t4EWXVXUbqLhn7w74Jo2Vw9DrLeNXcX5POxxRxWdDRrrWcV9dTKr38UxMUP2GZbmLXsfzpZ1W0jg/Rq+8isTLE/IdRBGI6b5l5efBVkjG+haW5aNDqMsxNB5LOcws01peqKb4fo335HNEafeRLEz/QQZ76N7o6baQpB5ASI+gsGce90ssQ1y1a1b4I0rR9FKJnhukUly3soBQmVk1w/db1lGfWUeXQvgviZ7sQarK5bVHK9dsUgKtedlJT0N43SU1xmz4O48MFQDMtdkOOJlEvr/om4/C7Shh3qZtGMhrWN4rfUNUfHYr5ng4Qh6GKQOXdbYkNxP+z2r3scZJK/h/2kuwxijwH0cvntxdxyoW7M6dRzaMpbohpeBfEzffS/Zlb2cOF7yPptEqGbXw65IfqdZJRHham64LT8aMS+CbI9/2OlD3O4PwWZTp0YPwMvd3ZT3tm9YRnzJWafB/FLeVgSQkHs144WSRmY0e4lcxVE3Rwb9zC2Ox+DvzW5/9zVsSTIxRBMco6uozNeK6dMsZd2vj7KN9HTWl9MxrjOpqfLr/1cGM8tlvDXXszgPUgb3pDWtxZtb19I5rVJshK4RWTRD4M0F28DR9joN5G8DcMs7CO3tsLu0sUgKu9HQW5eB9pzi6oO2c1RXX8bZJ8V5ngfTII8LC3xWpinz0GiPWyv8L8MssjvatX6/vxlxbG5eRZkuyF92r8LvbtzkMqJ1SVZfl8GuS7sz3YieBDE35DzjAxnC5UJUjUiSfcvQdxc3AtD5/dB/EzPvCuINWDKHVHkhhIdUd7OkbVQdXnpnqIBl4NsUyp7Dgpr0/rqdg4SrRJ9+X3kmXX3UKciW3fbZMDFIH6m588P4Tbp/OlXzFMz/FsQn8b/7+x3nnv0HzEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+I/8AR5XF3F6N61OAAAAAElFTkSuQmCC" alt="" /></a>
                        </div>
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLmklsj4F9sybdoN2WI_yG9J8gMN0Gpey7paD8ClbNUPMYyZr1zT8yQ0CbSQKrR19GBbk&usqp=CAU&ec=45780880" alt="" /></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="data:image/jpeg;base64,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" alt="" /></a>
                        </div>
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="http://2.bp.blogspot.com/-ygoBMVVkWG8/Vj3x1EZf1lI/AAAAAAAAACo/_-f1Qc6jeIw/s640/PT.%2BSuperex%2BRaya%2B-%2BAluminium%2BExtrusions.jpg" alt="" /></a>
                        </div>
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="data:image/png;base64,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" alt="" /></a>
                        </div>
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#!"><img class="img-fluid d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeLo7bgSC59-juUoSG40c4e8AX8XIfaKAYHw&usqp=CAU" alt="" /></a>
                        </div>

                    </div> -->
                    <div class="center">
                        <div >
                            <a href="#!"><img width="800" height="800" class="img-fluid d-block mx-auto" src="assets/img/customer.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                    <br>
                    <br><br>
                </div>
                <!-- <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form> -->
                <div class="row text-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <br><br>
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="col-md-5">
                            <h4 class="text-left text-white">Head Office :</h4>
                            <p class="text-white text-left">Jl. KalijatenRT.21 RW.03 Korlap1 No. 30 TAMAN –SIDOARJO <br> Telp. 081370873894 <br> Email : dediekspedisi32@gmail.com</p>
                            <p class="text-white text-left">Contact Person <br> DediHarisMihardiyanto <br> Hp: 081370873894 <br> Email : dediekspedisi32@gmail.com</p>
                        </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Kunjungi Lini Masa Kami</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://youtu.be/VXV3-MggmxA" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/detrans_log?igshid=hb9ihmlnleh6" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=+6287825119580&text=Halo Detrans, saya mau kirim barang ..." target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://m.facebook.com/dedi.mihardiyanto#_=_" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->

        <!-- Modal ini untuk menampilkan gambar pada PORTFOLIO -->

        <!-- Modal 1-->
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body"> -->
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal 2-->
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body"> -->
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal 3-->
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal 4-->
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body"> -->
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal 5-->
        <!-- <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body"> -->
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal 6
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body"> -->
                                    <!-- Project Details Go Here-->
                                    <!-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
