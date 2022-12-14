<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} | CONTACT US</title>

    @include('includes/headerScripts')

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>

<body>

    @include('includes.navbar')

    <main class="mb-5 container">

        <h3 class="text-center my-5 text-uppercase alert-info font-Staatliches-heading" data-aos="zoom-in"
            data-aos-duration="1500">
            Contact us</h3>

        <h5 class="text-center w-responsive mx-auto mb-3" data-aos="zoom-in" data-aos-duration="1500">Do you have any
            questions? Please do not
            hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</h5>

        <div class="row">

            <section class="col-md-8" data-aos="zoom-in" data-aos-duration="1500">

                <form id="contactForm" action="" method="POST">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="">Your Email</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="3"
                            class="form-control md-textarea"></textarea required>
                    </div>

                    <div class="text-center my-2">
                        <div class="h-captcha text-center" data-sitekey="{{ config('app.h_captcha_sitekey') }}"></div>
                    </div>

                    <div class="text-center text-md-left">
                        <input class="btn btn-primary rounded-pill btn-block" type="submit" id="submit" name="submit" value="Send">
                    </div>

                </form>
            </section>


            <section class="col-md-3 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker mb-2 fa-3x"></i>
                        <h5 class="text-success mb-5">Gharda Institute of Technology Lavel-Khed, Maharashtra, INDIA</h5>
                    </li>

                    <li><i class="fa fa-phone mb-2 fa-3x"></i>
                        <h5 class="text-success mb-5">+ 01 234 567 89</h5>
                    </li>

                    <li><i class="fa fa-envelope mb-2 fa-3x"></i>
                        <h5 class="text-success">git-india.edu.in</h5>
                    </li>
                </ul>
            </section>

        </div>
    </main>

    <script>
        CKEDITOR.replace("message")
    </script>

    @include('includes/footer');
    @include('includes/footerScripts')
  
    <script src="{{ asset('js/contactUs.js') }}"></script>

</body>

</html>
