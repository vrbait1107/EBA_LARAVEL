<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    @include('includes/headerScripts')

    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>{{ config('app.name') }} | HOME</title>

</head>

<body>

    <div id="loader"></div>

    @include('includes/navbar')


    <main class="container-fluid welcome-section">
        <div class="row mx-auto text-center">
            <h1 class="p-3 font-Staatliches-heading mx-auto text-white" data-aos="zoom-in" data-aos-duration="1500">
                Welcome to {{config('app.name')}}<br> National Level
                Techfest </h1>
            <img src="{{ asset('img/home/shodh1.jpg') }}" class="img-fluid" alt="Shodh">
        </div>
    </main>

    <main class="container-fluid p-5 second-section">
        <div class="row">
            <section class="col-md-7 mt-3 mb-5">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/home/git1.png') }}" class="d-block w-100 img-fluid" alt="git1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/home/git2.jpg') }}" class="d-block w-100 img-fluid" lt="git2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/home/git4.jpg') }}" class="d-block w-100 img-fluid" lt="git4">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="col-md-5">
                <h3 class="text-center font-time text-white">ABOUT {{ config('app_name') }} </h3>
                <p class="text-justify text-white">SHODH, GIT Lavel is the annual science and technology festival of
                    the Gharda
                    Institute of Technology
                    Lavel. Started in
                    2008 with the aim of providing a platform for the Indian student community to develop and showcase
                    their technical
                    prowess.

                    Year after year, SHODH explores the various aspects of science and technology and the profound
                    impacts they have on our
                    lives. For the last 12 years, SHODH has constantly grown, evolved, and pushed the boundaries of what
                    a college fest can
                    be. With something to offer for everyone, SHODH is the ideal destination for all technophiles: young
                    or old, beginner or
                    expert, student or professional to witness, learn and experience the wonders of science and
                    technology.

                    This year marks the 12th Edition of SHODH, GIT Lavel. The fest shall take place from 7th to 8th of
                    March, 2020 at the
                    beautiful, green campus of GIT Lavel in Maharashtra, India. Boasting of a huge roster of exciting
                    and engaging events,
                    this edition of SHODH promises to be grander, greater and more glorious than ever before.

                    So grab your friends, mark your calendars, and gear up for Kokan’s Largest Science and Technology
                    Festival.</p>

            </section>
        </div>
    </main>


    <div class="container">
        <div class="row">
            <section class="col-md-6 offset-md-3 py-5">
                <h2 class="text-center text-uppercase font-time  mb-4">Subscribe to our newsletter</h2>

                <form id="newsletterForm">
                    <div class="input-group">
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Enter Email">
                        <div class="input-group-append">
                            <input type="button" class="btn btn-danger" id="submit" value="Subscribe Now">
                        </div>
                    </div>
                    <h5 id="responseMessage" class="mt-3 text-center font-time"></h5>
                </form>

            </section>
        </div>
    </div>

    <hr>

    <?php $totaVisitors = 50; ?>

    <div class="visitor-container p-3">
        <h3 class="text-uppercase text-center text-dark font-time">Total Visitor
            Count: {{ $totaVisitors }}</h3>
    </div>


    @include('includes.footer')
    @include('includes.footerScripts')

    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
