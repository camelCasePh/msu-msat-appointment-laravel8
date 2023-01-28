<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="dist/img/msatlogo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />





    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <script src="https://kit.fontawesome.com/612e1c7b76.js" crossorigin="anonymous"></script>


</head>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">HOW TO MAKE AN APPOINTMENT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>1.Select a document to claim.</h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/selectform.png" id="tutimg">

                </div>

                <br>
                <h5>2. Input your personal information </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/inputpersonalinfo.png" width="700px" id="tutimg">

                </div>
                <br>
                <h5>3. Input year level and semester </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step2.png" width="700px" id="tutimg">

                </div>
                <br>
                <h5>4. Select appointment date </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step3.png" width="700px" id="tutimg">

                </div>
                <h5>5. Review request </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/reviewform.png" width="700px" id="tutimg">

                </div>


            </div>

        </div>
    </div>
</div>
{{-- end modal --}}

<body>
    <header class="head d-flex flex-row  pt-4 pb-2 text-white">



        <div class="pl-3 pr-2">
            <img src="../../dist/img/msatlogo.jpg" width="50px" class="brand-image img-circle ">

        </div>


        <div class="d-flex align-items-start flex-column pb-2">
            <strong style="font-size: 30px">Msu-Msat Online Appointment</strong>
            <div class="ts-12">Maigo, Lanao del Norte</div>
        </div>
        <div class="ms-auto d-flex  justify-content-end flex-row bd-highlight right-navigation mr-5">
            <div class="p-2 bd-highlight"> <button class="nav fs-5" id="appointmentbtn">Home</button> </div>
            <div class="p-2 bd-highlight"> <button class="nav fs-5" id="track">Track</button> </div>
            <div class="p-2 bd-highlight"> <button class="nav fs-5">Contact</button> </div>
            <div class="p-2 bd-highlight"> <button class="nav fs-5">About</button></div>
            <div class="p-2 bd-highlight"> <button class="nav tutorial fs-5">How to make Appointment</button></div>
        </div>

    </header>
    <section>
        <div id="carouselExampleIndicators" class=" position-relative page1 carousel carousel-fade slide darken"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../dist/img/maigo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../dist/img/maigo2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../dist/img/maigo3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            {{-- end of carousel --}}
            <div class="d-flex bd-highlight m-4 tracker-searchbar position-absolute top-0 end-0 translate-middle-y">


                <div class="col-9 pl-2 pr-2 flex-fill bd-highlight">

                    <input class="form-control bg-light" type="text" aria-label="readonly input example"
                        placeholder="e.g 001-001" id="name" name="name">
                </div>
                <div class="col-3 pl-2 pr-2 flex-fill bd-highlight">
                    <button class=" trackerBtn btn text-white">Track</button>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="appointment">

                        <div class="page1 px-5">

                            <h3 class="my-2"> <strong>MAKE APPOINTMENT FOR:</strong></h3>
                            <div class="card card-page1">
                                <div class="card-header card-header-page1 fs-6">
                                    <strong>Undergraduate Student Requests Documents</strong>
                                </div>
                                <div class="card-body">
                                    {{-- chexbox button for undergrad --}}
                                    <div class="d-flex align-content-start flex-wrap my-4 btn-group " role="group"
                                        aria-label="Basic checkbox toggle button group">

                                        <input type="checkbox" class="btn-check documents-btn" id="shiftingForm"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="shiftingForm">SHIFTING FORM</label>

                                        <input type="checkbox" class="btn-check documents-btn" id="inc"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="inc">COMPLETION OF INC GRADE</label>

                                        <input type="checkbox" class="btn-check documents-btn" id="addSubject"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="addSubject">ADDING OF SUBJECT</label>
                                        <input type="checkbox" class="btn-check documents-btn" id="cor"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="cor">COR</label>
                                        <input type="checkbox" class="btn-check documents-btn" id="dropSubject"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="dropSubject">DROPPING OF SUBJECT</label>


                                    </div>

                                    <div class="d-flex flex-row">

                                        <div class="ms-auto">
                                            <button type="button"
                                                class="undergradProceedBtn btn btn-secondary btn-lg">Proceed</button>
                                        </div>
                                    </div>
                                    {{-- end of checkbox button for undergrad --}}
                                </div>
                                {{-- end of card --}}
                            </div>
                            <div class="card card-page1">
                                <div class="card-header card-header-page1 fs-6">
                                    <strong>Graduate Student Requests Documents</strong>
                                </div>
                                <div class="card-body">
                                    {{-- check box button for graduate --}}

                                    <div class="d-flex align-content-start flex-wrap my-4 btn-group" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check documents-btn"
                                            id="honorableDismissal" autocomplete="off">
                                        <label
                                            class=" text-wrap btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="honorableDismissal">HONORABLE DISMISSAL</label>

                                        <input type="checkbox" class="btn-check documents-btn" id="tor"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="tor">TOR</label>

                                        <input type="checkbox" class="btn-check documents-btn" id="formonethreeseven"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                            for="formonethreeseven">FORM 137</label>


                                    </div>
                                    {{-- end of check box button for graduate --}}


                                    <div class="d-flex flex-row">
                                        <div class="ms-auto">
                                            <button type="button"
                                                class="gradProceedBtn btn btn-secondary btn-lg">Proceed</button>
                                        </div>
                                    </div>
                                    {{-- end of card body --}}
                                </div>
                                {{-- end of card --}}
                            </div>



                            {{-- </div> --}}

                            {{-- end of card --}}
                        </div>
                        {{-- end of page 1 --}}
                    </div>

                    <div class="card p-5 page2">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request
                            Form
                        </h1>
                        <div>
                            <img src="../../dist/img/step1.png">

                        </div>
                        <h3>Personal Information</h3>
                        <div style="height: 2px; ;background:black;"></div>

                        <div class="d-flex bd-highlight mb-2 mt-3">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight">Name</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="userName" name="name">
                            </div>

                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Email</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="email"
                                    aria-label="readonly input example" id="email-input" name="email">
                            </div>

                        </div>
                        <div class="alert alert-danger" role="alert" id="invalidEmail">
                            Hi, before proceeding please make sure, your email is active and valid, because it will
                            be used for sending notifications about your appointment.
                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Contact no.</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="contactNo" name="contactNo">
                            </div>

                        </div>
                        <div class="alert alert-danger" role="alert" id="invalidNumber">
                            Hi, before proceeding please make sure, your Phone number is active and valid, because
                            it will
                            be used for sending notifications about your appointment </div>

                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">ID Number</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="idNumber" name="idNumber">
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Department</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="department" name="department" readonly>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-auto-close="true" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Select Department
                                </button>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item">Computer Science</li>
                                    <li class="dropdown-item">Education</li>
                                    <li class="dropdown-item">Industrial Technology</li>
                                    <li class="dropdown-item">Senior High School</li>
                                    <li class="dropdown-item">Junior High School</li>


                                </div>
                            </div>
                        </div>

                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Course</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="course" name="course">
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Year Level</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="yearLevel" name="yearLevel">
                            </div>

                        </div>


                        <div class="d-flex flex-row">
                            <button type="button" class="backto1 btn btn-secondary btn-lg">Back</button>

                            <div class="ms-auto">
                                <button type="button" class="next2 btn btn-secondary btn-lg ">Next</button>
                            </div>
                        </div>
                        {{-- end of page 2 --}}
                    </div>

                    <div class="card p-5 page3">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request
                            Form
                        </h1>
                        <div>
                            <img src="../../dist/img/step22.png">

                        </div>
                        <h3>Request Form</h3>
                        <div style="height: 2px; background:black;"></div>
                        <div class="d-flex bd-highlight mb-2 mt-3">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight">Year Level</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight">

                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="yearLvl">
                            </div>

                        </div>
                        <div class="d-flex bd-highlight mb-2 mt-3">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight">Semester</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight">

                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="semester">
                            </div>

                        </div>

                        <div class="d-flex flex-row">

                            <button type="button" class="backto2 btn btn-secondary btn-lg">Back</button>

                            <div class="ms-auto">
                                <button type="button" class="next3 btn btn-secondary btn-lg">Next</button>
                            </div>
                        </div>
                        {{-- end of page 3 --}}
                    </div>

                    <div class="card p-5 page4">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request
                            Form
                        </h1>
                        <div>
                            {{-- <img src="../../dist/img/step22.png"> --}}

                        </div>
                        <h3>Calendar</h3>
                        <div style="height: 2px; background:black;"></div>
                        <div class="card mx-1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-md-11">
                                            <div>
                                                <h5>Legend</h5>
                                                {{-- <div style="height: 2px; background:black;"></div> --}}
                                                <div class="d-flex flex-row ">
                                                    <div class="px-1"
                                                        style=" height:15px; width:15px; background:#32ff7e;  ">
                                                    </div>
                                                    <div class=" px-1">
                                                        <h6>Available</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row ">
                                                    <div class="px-1"
                                                        style=" height:15px; width:15px; background:#ff3838;  ">
                                                    </div>
                                                    <div class=" px-1">
                                                        <h6>Full</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="calendar">

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-row">
                            <button type="button" class="backto3 btn btn-secondary btn-lg">Back</button>

                            <div class="ms-auto">
                                <button type="button" class="next4 btn btn-secondary btn-lg">Next</button>
                            </div>
                        </div>
                        {{-- end of page 4 --}}
                    </div>
                    <div class="card p-5 page5">
                        {{-- end of page 5 --}}
                    </div>
                    {{-- end of appointment --}}
                </div>
                <div class="tracker">
                    <div class="card  " style="height:100vh">

                        <div class="d-flex  justify-content-center pt-5 mt-5 ">
                            <div class="fs-5 mt-5">Transaction
                                Number:
                            </div>
                            <div class="col-6 mt-5">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="transNum" name="transactionNumber">
                            </div>

                        </div>

                        {{-- <button
                                class="btn btn-lg  btnTrack position-absolute top-50 start-50 translate-middle">Track</button> --}}
                        <div class="d-flex justify-content-center mt-2">
                            <button type="button " class=" col-2 btn btn-danger btnTrack">Track</button>
                        </div>
                    </div>
                </div>
                {{-- end of col dev --}}
            </div>
            {{-- end of row dev --}}
        </div>
        {{-- end of container dev --}}
        </div>

    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#exampleModal").modal('show');
            $(".page2").hide();
            $(".next2").hide();
            $(".next3").hide();
            $(".page3").hide();
            $(".page4").hide();
            $(".page5").hide();
            $(".undergradProceedBtn").hide();
            $(".gradProceedBtn").hide();
            $(".tracker").hide();
            $("#invalidEmail").hide();
            $("#invalidNumber").hide();

            $('#dropdownMenuButton').on('click', function() {
                $('.dropdown-menu').toggle();

                $('.dropdown-menu li').on('click', function() {
                    var selectedOption = $(this).text();
                    $('#department').val(selectedOption);
                    $('.dropdown-menu').toggle('false');
                });
            });

            $('.carouselExampleIndicators').carousel({
                interval: 2000
            })

            $(".tutorial").click(function() {
                $("#exampleModal").modal('show');
            })

            $("#shiftingForm, #inc, #addSubject, #cor, #dropSubject").change(function() {
                if ($("#shiftingForm").prop("checked") || $("#inc").prop("checked") || $("#addSubject")
                    .prop("checked") || $("#cor").prop("checked") || $("#dropSubject").prop("checked")) {
                    $('.undergradProceedBtn').show();
                } else {
                    $('.undergradProceedBtn').hide();

                }
            });
            $("#honorableDismissal, #tor, #formonethreeseven").change(function() {
                if ($("#honorableDismissal").prop("checked") || $("#tor").prop("checked") || $(
                        "#formonethreeseven").prop("checked")) {
                    $('.gradProceedBtn').show();
                } else {
                    $('.gradProceedBtn').hide();

                }
            });


            $(".undergradProceedBtn").click(function() {
                $(".page1").fadeOut(500);
                $(".page2").fadeIn();

            })
            $(".gradProceedBtn").click(function() {
                $(".page1").fadeOut(500);
                $(".page2").fadeIn();

            })

            $(".backto1").click(function() {
                $(".page2").fadeOut(500);
                $(".page1").fadeIn();

            })
            // $("#name, #email-input, #contactNo, #idNumber, #department, #course, #yearLevel").change("input",
            //     function() {
            //         if ($("#name").val() != "" && $("#email-input").val() != "" && $("#contactNo").val() !=
            //             "" && $("#idNumber").val() != "" && $("#department").val() != "" && $("#course")
            //             .val() != "" && $("#yearLevel").val() != "") {
            //             $("#next2").show();
            //         } else {
            //             $("#next2").hide();
            //         }
            //     });
            // $("#name, #email-input, #contactNo, #idNumber, #department, #course, #yearLevel").on("input",
            //     function() {
            //         if ($("#name").val().length > 0 && $("#email-input").val().length > 0 && $("#contactNo")
            //             .val().length > 0 && $("#idNumber").val().length > 0 && $("#department").val().length >
            //             0 && $("#course").val().length > 0 && $("#yearLevel").val().length > 0) {
            //             $(".next2").show();
            //         } else {
            //             $(".next2").hide();
            //         }
            //     });

            $("#userName, #email-input, #contactNo, #idNumber, #department, #course, #yearLevel").on("input",
                function() {
                    if ($("#userName").val().length > 0 && $("#email-input").val().length > 0 && $("#contactNo")
                        .val().length > 0 && $("#idNumber").val().length > 0 && $("#department").val().length >
                        0 && $("#course").val().length > 0 && $("#yearLevel").val().length > 0) {
                        console.log("show button");
                        $(".next2").show();
                    } else {
                        console.log("hide button");
                        $(".next2").hide();
                    }

                });
            // #yearLvl, #semester
            $("#yearLvl, #semester").on("input",
                function() {
                    if ($("#yearLvl").val().length > 0 && $("#semester").val().length > 0) {

                        $(".next3").show();
                    } else {
                        console.log("hide button");
                        $(".next3").hide();
                    }

                });


            $(".next2").click(function() {
                // $(".page1").hide();
                $(".page2").fadeOut(500);
                $(".page3").fadeIn();

            })

            $(".next3").click(function() {
                $(".page1").hide();
                $(".page3").fadeOut(500);
                $(".page4").fadeIn();

            })
            $(".backto2").click(function() {
                $(".page3").fadeOut(500);
                $(".page2").fadeIn();

            })
            $(".next4").click(function() {
                $(".page1").hide();
                $(".page4").fadeOut(500);
                $(".page5").fadeIn();

            })
            $(".backto3").click(function() {
                $(".page4").fadeOut(500);
                $(".page3").fadeIn();

            })



            // function createInterval(i, code) {
            //     var count = 0;
            //     return setInterval(function() {
            //         count++;
            //         code();
            //         console.log("Interval " + i + ": " + count);
            //     }, 1000);
            // }

            // var interval1 = createInterval(1, function() {
            //     if ($("#name, #email-input, #contactNo, #idNumber, #department, #course, #yearLevel")
            //         .filter(
            //             function() {
            //                 return !this.value;
            //             }).length === 0) {
            //         $(".next2").show();

            //     } else {
            //         $(".next2").hide();
            //     }
            // });

            // var interval2 = createInterval(1, function() {
            //     if ($("#yearLvl, #semester").filter(
            //             function() {
            //                 return !this.value;
            //             }).length === 0) {
            //         $(".next3").show();

            //     } else {
            //         $(".next3").hide();
            //     }
            // });

            $('#calendar').fullCalendar({

            })

            // Handles error message

            $("#email-input").on("input", function() {
                var pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
                if (!pattern.test($(this).val())) {
                    $("#invalidEmail").show();

                } else {
                    $("#invalidEmail").hide();
                }
            });


            $("#contactNo").on("input", function() {
                // Get the current value of the input field
                var inputValue = $(this).val();

                // Check if the input value is a number and starts with 0 followed by 9 and is 11 digit number
                var numberRegex = /^09\d{9}$/;
                if (numberRegex.test(inputValue)) {

                    $("#invalidNumber").hide();

                } else {

                    $("#invalidNumber").show();
                }
            });


            //end of error message handling
            //HANDLES DROP DOWN



            //END OF HANDLING A DROPDOWN
            // tracker page
            // $("#track").click(function() {
            //     $(".appointment").fadeOut(500);
            //     $(".tracker").fadeIn();


            //     $("#appointmentbtn").click(function() {
            //         $(".tracker").fadeOut(500);
            //         $(".appointment").fadeIn();
            //     })

            //     $(".btnTrack").hide();



            //     $("#transNum").on("input", function() {
            //         if ($(this).val() && $.isNumeric($(this).val())) {
            //             // do something if the input field has a value and the value is a number
            //             $(".btnTrack").show();
            //         } else {
            //             // do something if the input field is empty or the value is not a number
            //             $(".btnTrack").hide();
            //         }
            //     });
            // })



            // end of tracker page
        });
    </script>
</body>

</html>


<style>
    * {
        margin: 0;
        padding: 0;
    }

    .card-header-page1 {
        background-color: #800000 !important;
        color: white !important;

    }

    .card-header:first-child {
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
    }

    .head {
        height: 6rem;
        background: #800000;
        /* background-image: linear-gradient(to right, #ff512f, #dd2476); */
    }

    .carousel-item {
        position: relative;
    }

    .carousel-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 5);
        /* black color with 50% opacity */
    }

    .modal-body {
        overflow: hidden !important;
        /* height: 350px !important; */
        height: 500px !important;
        min-height: 100px;
        min-width: 100px;

    }

    .modal-body:hover {
        overflow-y: auto !important;
    }

    /* .right-navigation div a {} */

    .right-navigation div button {
        background: none;
        border: none;
        color: white;
        font-weight: bold;
    }

    .right-navigation div a:hover {

        background: white;
        color: #ff512f;
        padding: 5px;
    }


    .carousel .carousel-item {
        height: 400px;
    }

    .carousel-item img {
        position: absolute;
        object-fit: cover;
        top: 0;
        left: 0;
        min-height: 400px;
    }

    .tracker-searchbar {
        z-index: 1;
    }

    .documents-btn {
        max-height: 250px !important;
        max-width: 250px !important;
        text-align: center;
        border-radius: 20px !important;
        border-color: #107ABE !important;
        border: 3px solid #107ABE !important;
    }

    .documents-btn:hover {
        background-color: #800000 !important;
    }

    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
        background-color: #800000 !important;
        border: 3px solid #800000 !important;
    }

    body {
        background-color: #dfe6e9 !important;
    }

    .trackerBtn {
        background-color: #800000 !important;
    }

    .card-page1 {
        border-radius: 20px;
        box-shadow: 0px 0px 10px 0px darkgray;
    }

    #tutimg {
        width: 700px;
        min-width: 100px !important;
        min-height: 100px !important;
    }

    .nav:hover {
        /* background: white; */
        /* padding: 2px;
        color: #ff3838; */
        border-bottom: 2px solid white;
    }

    /* .bg-light {
        background-color: #e74c3c !important;
    } */

    .transNum {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: white !important;
        background-color: #c0392b !important;
        background-clip: padding-box;
        border: 1px solid black !important;
        border-radius: 0.25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        width: 50px !important;
        height: 50px !important;

    }
</style>
