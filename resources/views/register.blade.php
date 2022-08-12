<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes/headerScripts')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>EBA | REGISTRATION</title>

</head>

<body>


    @include('includes/nav')

    <main class="container mt-4">

        <h2 class="text-center mx-auto font-time text-uppercase">User Registration</h2>
        <h6 class="alert alert-danger text-center font-sans">Note: 1) Following details will be used
            for your Certificate Generation so please provide proper details.</h6>

        <hr>

        <h5 class="font-sans text-center">Already have an account? <a href="login.php"> Please Login here</a></h5>

        <div class="row">

            <section class="col-md-6 offset-md-3">

                <form action="" method="post" id="userRegisterForm">


                    <div id="firstStep" class="my-5 steps-div">

                        <h4 class="text-uppercase font-time  breadcrumb">Personal Details</h4>

                        <div class="form-group">
                            <label for="userName">Enter Your Username</label>
                            <input type="email" class="form-control" name="userName" id="userName"
                                placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName"
                                placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName"
                                placeholder="Last Name">
                        </div>


                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number</label>
                            <input type="text" class="form-control" name="mobileNumber" id="mobileNumber"
                                placeholder="Mobile Number">
                        </div>

                        <button type="button" class="btn btn-primary" id="firstStepButton">Continue</button>

                    </div>

                    <div id="secondStep" class="my-5 steps-div">

                        <h4 class="text-uppercase font-time breadcrumb">College Details</h4>

                        <div class="form-group">
                            <label for="collegeName">Enter Your College Name</label>
                            <input list="collegeNameList" class="form-control" name="collegeName" id="collegeName"
                                placeholder="College Name" autocomplete="off">
                            <datalist id="collegeNameList">
                                <option disabled selected>Choose Your College</option>
                                <option> (10 )Anjuman-I-Islam's M. H. Saboo Siddik College of Engineering</option>
                                <option> (17 )Bharati Vidyapeeth's College of Engineering</option>
                                <option> (55 )Fr. Conceicao Rodrigues College of Engineering</option>
                                <option> (116 )CHATRAPATI SHIVAJI MAHARAJ INSTITUTE OF TECHNOLOGY</option>
                                <option> (124 )Mahatma Gandhi Mission's College of Engineering and Technology</option>
                                <option> (126 )Mahavir Education Trust's Shah and Anchor Kutchi Engineering College
                                </option>
                                <option> (174 )Ramrao Adik Institute of Technology</option>
                                <option> (237 )Terna Public Charitable Trust's College of Engineering</option>
                                <option> (238 )Thadomal Shahani Engineering College</option>
                                <option> (356 )Padmabhushan Vasantdada Patil Prathisthan Engineering College</option>
                                <option> (366 )Vivekanand Education Society's Institute of Technology</option>
                                <option> (368 )Watumull Institute of Electronic Engineering and Computer Technology
                                </option>
                                <option> (385 )Jawahar Education Society's Annasaheb Chadaman Patil College of
                                    Engineering
                                </option>
                                <option> (390 )Mandar Education Society's Rajaram Shinde College of Engineering</option>
                                <option> (403 )Smt. Indira Gandhi Engineering College</option>
                                <option> (426 )Agnel Charities Fr. Conceicao Rodrigues Institute of Technology</option>
                                <option> (428 )Datta Meghe College of Engineering</option>
                                <option> (438 )Konkan Gyanpeeth's College of Engineering ,R. D. College of Pharmacy
                                </option>
                                <option> (442 )Lokmanya Tilak Jankalyan Shikshan Sanstha's Lokmanya Tilak College of
                                    Engineering
                                </option>
                                <option> (443 ) Finolex Academy of Management and Technology's College of Engineering
                                </option>
                                <option> (461 )Shivajirao S. Jondhale College of Engineering</option>
                                <option> (466 )Vidyavardhini's College of Engineering and Technology</option>
                                <option> (522 )Rizvi College of Engineering</option>
                                <option> (523 )Rajendra Mane College of Engineering and Technology</option>
                                <option> (524 )Manjara Charitable Trust's Rajiv Gandhi Institute of Technology</option>
                                <option> (531 )St. Francis Institute of Technology</option>
                                <option> (532 )Atharva College of Engineering</option>
                                <option> (533 )Sindhudurga Shikshan Prasarak Mandal's College of Engineering</option>
                                <option> (534 )Vidyalankar Institute of Technology</option>
                                <option> (561 )Mahatma Education Society's Pillai's Institute of Information Technology,
                                    Enineering Media Studies a</option>
                                <option> (688 )The Bombay Salesian Society's Don Bosco Institute of Technology</option>
                                <option> (689 )Excelsior Education Society's K. C. College of Engineering</option>
                                <option> (690 )South Indian Education Society's College of Engineering</option>
                                <option> (691 )K. J. Somaiya Institute of Engineering and Information Technology
                                </option>
                                <option> (692 )Saraswati Education Socity's Saraswati College of Engineering</option>
                                <option> (734 )Yadavrao Tasgaonkar Institute of Engineering ,Technology & Pharmacy
                                </option>
                                <option> (736 )Xavier Institute of Engineering</option>
                                <option> (742 )Gharda Institute of Technology</option>
                                <option> (751 )SHIVAJIRAO'S JONDHLE COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                <option> (776 )ALAMURI RATNAMALA INSTITUTE OF ENGINEERING</option>
                                <option> (779 )ST.JOHN COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                <option> (780 )YADAVRAO TASGAONKAR ENGINEERING & MANAGEMENT</option>
                                <option> (802 )THEEM COLLEGE OF ENGINEERING</option>
                                <option> (807 )G.V.ACHARYA INSTITUTE OF ENGINEERING</option>
                                <option> (822 )PILLAI'S HOCL COLLEGE OF ENGINEERING</option>
                                <option> (823 )VIVA INSTITUTE OF TECHNOLOGY</option>
                                <option> (824 )SES'S GROUP OF INSTITUTIONS</option>
                                <option> (857 )DILKAP RESEARCH INSTT OF ENGG & MGT</option>
                                <option> (889 )BHARAT COLLEGE OF ENGINEERING</option>
                                <option> (890 )L.R.TIWARI COLLEGE OF ENGG</option>
                                <option> (944 )ANJUMAN ISLAM SCHOOL OF ENGG</option>
                                <option> (945 )VISWATMAK OM GURUDEV COLLEGE OF ENGG</option>
                                <option> (946 )GOPINATH M VEDAK INSTT OF TECHNOLOGY</option>
                                <option> (948 )B.R. HARNE COLLEGE OF ENGG & TECHNOLOGY</option>
                                <option> (949 )METROPOLITAN INSTT OF TECHNOLOGY</option>
                                <option> (978 )MAHARSHI PARSHURAM COLLEGE OF ENGG - VELNESHWAR, GUHAGAR</option>
                                <option> (982 )VIDYA VIKAS EDUCATION TRUST, VASAI</option>
                                <option> (990 )VISHWANIKETAN INST OF MANG. & ENGINEERING TECH</option>
                                <option> (991 )IDAL INSTTITUTE OF TECH.</option>
                                <option> (995 )NEW HORIZON INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                <option> (996 )A P SHAH INSTITUTE OF TECHNOLOGY</option>
                                <option>IF OTHER PLEASE SPECIFY</option>
                            </datalist>
                        </div>


                        <div class="form-group">
                            <label for="department">Enter Your Department Name</label>
                            <input list="departmentName" class="form-control" name="department" id="department"
                                placeholder="Department Name" autocomplete="off">
                            <datalist id="departmentName">
                                <option value="Electronics and Telecommunication"></option>
                                <option value="Chemical"></option>
                                <option value="Civil"></option>
                                <option value="Mechanical"></option>
                                <option value="Computer"></option>
                                <option value="Electrical"></option>
                                <option value="Petrochemical"></option>
                                <option value="Information Technology"></option>
                                <option value="Plastic and Polymer"></option>
                                <option value="Instrumentation"></option>
                                <option value="Computer Science"></option>
                                <option value="Electronics and Communication"></option>
                                <option value="Aeronautical"></option>
                                <option value="Agricultural"></option>
                                <option value="Electrical and Instrumentation"></option>
                                <option value="Arts"></option>
                                <option value="Commerce"></option>
                                <option value="Science"></option>
                                <option value="Electronics"></option>
                            </datalist>
                        </div>

                        <div class="form-group">
                            <label for="year">Enter Your Acadmic Year</label>
                            <input list="yearName" class="form-control" name="year" id="year"
                                placeholder="First/Second/Third/Last Year" autocomplete="off">
                            <datalist id="yearName">
                                <option value="First Year"></option>
                                <option value="Second Year"></option>
                                <option value="Third Year"></option>
                                <option value="Fourth Year"></option>
                            </datalist>
                        </div>

                        <button class="btn btn-secondary" type="button" id="secondStepButtonBack">Back</button>
                        <button class="btn btn-primary" type="button"
                            id="secondStepButtonContinue">Continue</button>

                    </div>


                    <div id="thirdStep" class="my-5 steps-div">

                        <h4 class="text-uppercase font-time breadcrumb">Password Details</h4>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" autocomplete="off">
                            <small class="text-danger">Password should Contain atleast 8 Character, Minimum one
                                uppercase letter,
                                Minimum one lowercase letter,
                                minimum one number, Minimum one special character. </small>
                        </div>


                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword"
                                autocomplete="off" placeholder="Confirm Password">
                        </div>

                        {{-- <div class="text-center my-2">
                            <div class="g-recaptcha text-center" data-sitekey='{{ $recaptchaSiteKey }}'></div>
                        </div> --}}

                        <button class="btn btn-secondary" id="thirdStepButton" type="button">Back</button>

                        <input type="submit" name="submit" class="btn btn-primary" value="Register Here">

                    </div>


                </form>
            </section>
        </div>
    </main>

    @include('includes/footerScripts')

    <script src="{{ asset('js/register.css') }}"></script>

    <script>
        $(document).ready(function() {
            $("#firstStepButton").click(function() {
                $(".steps-div").hide();
                $("#secondStep").show();
            })

            $("#secondStepButtonBack").click(function() {
                $(".steps-div").hide();
                $("#firstStep").show();

            })

            $("#secondStepButtonContinue").click(function() {
                $(".steps-div").hide();
                $("#thirdStep").show();
            })

            $("#thirdStepButton").click(function() {
                $(".steps-div").hide();
                $("#secondStep").show();
            })

        })
    </script>

</body>

</html>
