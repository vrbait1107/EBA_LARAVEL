<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBA | NOT FOUND</title>


    @include('includes/headerScripts')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mr-auto ml-auto py-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title bg-warning p-2">Error Page</h1>
                        <h2 class="card-title">404 Error</h2>
                        <p class="card-text">The Page you are searching for is not available.</p>
                        <a href="index.php" class="btn btn-primary">Go to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
