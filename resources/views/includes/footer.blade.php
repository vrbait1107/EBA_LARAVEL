<footer class="p-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h5 class="mb-3 text-uppercase">Pages</h5>
                <ul class="footerList">
                    <li><a class="text-dark" href="{{ route('user-home') }}">Home</a></li>
                    <li><a class="text-dark" href="{{ route('events') }}">Events</a></li>
                    <li><a class="text-dark" href="">Get Certificate</a></li>
                    <li><a class="text-dark" href="">Verify Certificate</a></li>
                    <li><a class="text-dark" href="{{ route('sponsors') }}">Developers</a></li>
                    <li><a class="text-dark" href="{{ route('developers') }}">Sponsors</a></li>
                    <li><a class="text-dark" href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a class="text-dark" href="{{ route('feedback') }}">Feedback</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="mb-3 text-uppercase">About</h5>
                <ul class="footerList">
                    <li><a class="text-dark" href="{{ route('about') }}">About</a></li>
                    <li><a class="text-dark" href="{{ route('contactus') }}">Contact Us</a></li>
                    <li><a class="text-dark" href="#">Terms & Condition </a></li>
                    <li><a class="text-dark" href="#">Privacy policy</a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="mb-3 text-uppercase">Join Us</h5>
                <a href="#" class='text-blue' target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </span>
                </a>

                <a href="#"  target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </span>
                </a>

                <a href="#" class='text-danger' target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </span>
                </a>

                <a href="#" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-linkedin fa-stack-1x"></i>
                    </span>
                </a>

                <a href="#" class='text-danger' target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center">
        &copy; {{ config('app.name') }} All Rights Reserved.
    </div>
</footer>
