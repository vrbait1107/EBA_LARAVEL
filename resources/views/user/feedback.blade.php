<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | EVENT FEEDBACK</title>

    @include('includes/headerScripts')

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    <style>
        hr {
            border: 1px solid black;
            margin-bottom: 25px;
        }
    </style>

</head>

<body>

    @include('includes/navbar')

    <main class="container">
        <div class="row">
            <section class="col-md-8 mt-5 mb-3 offset-md-2">
                <h3 class="font-Staatliches-heading alert-info text-center mb-5">
                    EVENT FEEDBACK</h3>

                <h4 class="font-time text-center">Please take few moments to complete this survey</h4>
                <hr class="text-dark">

                <form action="" method="post" name="feedbackForm" id="feedbackForm">

                    <!-- Response Message -->
                    <div id="responseMessage"></div>

                    <div class="form-group">
                        <label class="font-weight-bold">Q.1 Have you participated in any event in GIT SHODH
                            before?</label>
                        <br />
                        <input type="radio" name="attendBefore" class="attendBefore" value="yes">
                        <label>Yes</label> <br />
                        <input type="radio" name="attendBefore" class="attendBefore" value="no">
                        <label>No</label>
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">Q.2 How likely are you to attend one of our events in the
                            future?</label>
                        <br />
                        <input type="radio" name="likelyAttend" class="likelyAttend" value="1">
                        <label class="mr-5">1</label>
                        <input type="radio" name="likelyAttend" class="likelyAttend" value="2">
                        <label class="mr-5">2</label>
                        <input type="radio" name="likelyAttend" class="likelyAttend" value="3">
                        <label class="mr-5">3</label>
                        <input type="radio" name="likelyAttend" class="likelyAttend" value="4">
                        <label class="mr-5">4</label>
                        <input type="radio" name="likelyAttend" class="likelyAttend" value="5">
                        <label class="mr-5">5</label>
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">Q.3 How likely are you to recommend our events to a
                            friend?</label>
                        <br />
                        <input type="radio" name="likelyRecommendFriend" class="likelyRecommendFriend" value="1">
                        <label class="mr-5">1</label>
                        <input type="radio" name="likelyRecommendFriend" class="likelyRecommendFriend" value="2">
                        <label class="mr-5">2</label>
                        <input type="radio" name="likelyRecommendFriend" class="likelyRecommendFriend" value="3">
                        <label class="mr-5">3</label>
                        <input type="radio" name="likelyRecommendFriend" class="likelyRecommendFriend" value="4">
                        <label class="mr-5">4</label>
                        <input type="radio" name="likelyRecommendFriend" class="likelyRecommendFriend" value="5">
                        <label class="mr-5">5</label>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Q.4 What did you like most about the event?</label>
                        <textarea name="likeMost" id="likeMost" cols="30" rows=3 class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Q.5 What did you like least about the event?</label>
                        <textarea name="likeLeast" id="likeLeast" cols="30" rows=3 class="form-control"></textarea>
                    </div>

                    <div class="table-responsive">

                        <label class="font-weight-bold">Q.6 Overall Satisfaction</label>

                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Parameter</th>
                                    <th>Rating: 1</th>
                                    <th>Rating: 2</th>
                                    <th>Rating: 3</th>
                                    <th>Rating: 4</th>
                                    <th>Rating: 5</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">

                                <tr>
                                    <td>Location</td>
                                    <td><input type="radio" name="location" class="location" value="1"></td>
                                    <td><input type="radio" name="location" class="location" value="2"></td>
                                    <td><input type="radio" name="location" class="location" value="3"></td>
                                    <td><input type="radio" name="location" class="location" value="4"></td>
                                    <td><input type="radio" name="location" class="location" value="5"></td>
                                </tr>

                                <tr>
                                    <td>Events</td>
                                    <td><input type="radio" name="events" class="events" value="1"></td>
                                    <td><input type="radio" name="events" class="events" value="2"></td>
                                    <td><input type="radio" name="events" class="events" value="3"></td>
                                    <td><input type="radio" name="events" class="events" value="4"></td>
                                    <td><input type="radio" name="events" class="events" value="5"></td>
                                </tr>

                                <tr>
                                    <td>Events Coordinators</td>
                                    <td><input type="radio" name="coordinators" class="coordinators"
                                            value="1">
                                    </td>
                                    <td><input type="radio" name="coordinators" class="coordinators"
                                            value="2"></td>
                                    <td><input type="radio" name="coordinators" class="coordinators"
                                            value="3"></td>
                                    <td><input type="radio" name="coordinators" class="coordinators"
                                            value="4"></td>
                                    <td><input type="radio" name="coordinators" class="coordinators"
                                            value="5">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Event Fee</td>
                                    <td><input type="radio" name="eventsPrice" class="eventsPrice" value="1">
                                    </td>
                                    <td><input type="radio" name="eventsPrice" class="eventsPrice" value="2">
                                    </td>
                                    <td><input type="radio" name="eventsPrice" class="eventsPrice" value="3">
                                    </td>
                                    <td><input type="radio" name="eventsPrice" class="eventsPrice" value="4">
                                    </td>
                                    <td><input type="radio" name="eventsPrice" class="eventsPrice" value="5">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">Q.7 How can we improve this event?</label>
                        <textarea name="suggestion" id="suggestion" cols="30" rows=3 class="form-control"></textarea>
                    </div>

                    <div class="text-center my-2">
                        <div class="h-captcha text-center" data-sitekey="{{ config('app.h_captcha_sitekey') }}"></div>
                    </div>

                    <input type="submit" name="submit" id="submit"
                        class="btn text-center btn-primary btn-block rounded-pill" value="Submit Feedback">
                </form>
            </section>
        </div>
    </main>


    @include('includes/footer')
    @include('includes/footerScripts')

    <script src="{{ asset('js/feedbackForm.js') }}"></script>


</body>

</html>
