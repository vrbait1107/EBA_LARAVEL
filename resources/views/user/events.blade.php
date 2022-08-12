<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name') }} | DEPARTMENTS</title>

    @include('includes.headerScripts')

</head>

<body>

    @include('includes/navbar')

    <main class="container mt-5 text-uppercase">

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/EXTC.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">EXTC
                    ENGINEERING</h3>
                <hr>

                <form id="extcForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center text-uppercase btn  btn-outline-dark rounded-pill"
                        value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Electronics and Telecommunication">
                </form>

            </div>
        </section>

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/CHEM.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">CHEMICAL
                    ENGINEERING</h3>
                <hr>

                <form id="chemicalForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center text-uppercase btn btn-outline-dark rounded-pill"
                        value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Chemical">
                </form>
            </div>
        </section>

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/COMP.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">COMPUTER
                    ENGINEERING</h3>
                <hr>

                <form id="computerForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Computer">
                </form>
            </div>
        </section>

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/MECH.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">MECHANICAL
                    ENGINEERING</h3>
                <hr>

                <form id="mechanicalForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Mechanical">
                </form>
            </div>
        </section>

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/CIVIL.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">CIVIL
                    ENGINEERING</h3>
                <hr>

                <form id="civilForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Civil">
                </form>
            </div>
        </section>

        <section class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset('img/departments/SYNERGY.jpg') }}" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="height:250px">
            </div>

            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">SYNERGY EVENTS</h3>
                <hr>
                <a href="synergyEvents.php" class="text-center btn btn-outline-dark rounded-pill">View Events</a>
            </div>
        </section>

    </main>

    @include('includes.footer')
    @include('includes.footerScripts')


    <script src="{{ asset('js/eventPage.js') }}"></script>

</body>

</html>
