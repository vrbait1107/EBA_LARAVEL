<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | ABOUT</title>

    @include('includes.headerScripts')

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

</head>

<body>

    @include('includes.navbar')

    <main class="container">
        <div class="row">


            <section class="col-md-10 offset-md-1">
                <div class="p-5 my-3 text-justify" data-aos="zoom-in" data-aos-duration="1500">

                    <h1 class="p-1 text-center text-uppercase alert-info font-Staatliches-heading">About Shodh</h1>
                    <hr>
                    <p>SHODH, GIT Lavel is the annual science and technology festival of the Gharda Institute of
                        Technology Lavel.
                        Started in 2008 with the aim of providing a platform for the Indian student community to develop
                        and showcase
                        their technical prowess. </p>
                    <p>Year after year, SHODH explores the various aspects of science and technology and the profound
                        impacts they have
                        on our lives. For the last 12 years, SHODH has constantly grown, evolved, and pushed the
                        boundaries of what a
                        college fest can be. With something to offer for everyone, SHODH is the ideal destination for
                        all technophiles:
                        young or old, beginner or expert, student or professional to witness, learn and experience the
                        wonders of science
                        and technology.</p>
                    <p> This year marks the 12th Edition of SHODH, GIT Lavel. The fest shall take place from 7th to 8th
                        of March,
                        2020 at the beautiful, green campus of GIT Lavel in Maharashtra, India. Boasting of a huge
                        roster of exciting and
                        engaging events, this edition of SHODH promises to be grander, greater and more glorious than
                        ever before.</p>
                    <p> So grab your friends, mark your calendars, and gear up for Kokan’s Largest Science and
                        Technology Festival. </p>

                </div>
            </section>
        </div>
    </main>

    @include('includes.footer')
    @include('includes.footerScripts')

</body>

</html>
