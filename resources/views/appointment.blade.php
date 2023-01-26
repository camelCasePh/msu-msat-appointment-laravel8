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

    {{-- <script nonce="75fed223-4b53-49eb-b0b3-5ee3409dd016">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script> --}}
</head>


{{-- modal --}}
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> --}}

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
                    <img src="../../dist/img/selectform.png" width="700px">

                </div>

                <br>
                <h5>2. Input your personal information </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/inputpersonalinfo.png" width="700px">

                </div>
                <br>
                <h5>3. Input year level and semester </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step2.png" width="700px">

                </div>
                <br>
                <h5>4. Select appointment date </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step3.png" width="700px">

                </div>
                <h5>5. Review request </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/reviewform.png" width="700px">

                </div>


            </div>

        </div>
    </div>
</div>
{{-- end modal --}}

<body>
    <header class="head d-flex flex-row mb-2 pt-2 pb-2 text-white">



        <div class="pl-3 pr-2">
            <img src="../../dist/img/msatlogo.jpg" width="50px" class="brand-image img-circle ">

        </div>


        <div class="d-flex align-items-start flex-column pb-2">
            <strong style="font-size: 20px">Msu-Msat Online Appointment</strong>
            <div class="ts-12">Maigo, Lanao del Norte</div>
        </div>
        <div class="ms-auto d-flex  justify-content-end flex-row bd-highlight right-navigation mr-5">
            <div class="p-2 bd-highlight"> <button>Contact</button> </div>
            <div class="p-2 bd-highlight"> <button>About</button></div>
            <div class="p-2 bd-highlight"> <button class="tutorial">How to make Appointment</button></div>
        </div>

    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="page1">


                        <div id="carouselExampleIndicators" class="carousel carousel-fade slide"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
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
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            {{-- end of carousel --}}
                        </div>

                        <h1 class="my-2"> <strong>Make Appointment for</strong></h1>

                        <h3> Undergraduate Student Requests forms</h3>
                        <div style="height: 2px; background:black;"></div>



                        {{-- chexbox button for undergrad --}}
                        <div class="d-flex align-content-start flex-wrap my-4 btn-group documents-btn" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check documents-btn" id="honorableDismissal"
                                autocomplete="off">
                            <label class="btn btn-outline-secondary m-1 p-5 fs-6 rounded documents-btn"
                                for="honorableDismissal">HONORABLE DISMISSAL</label>

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
                        {{-- end of checkbox button for undergrad --}}



                        <h3> Graduate Student Requests forms</h3>
                        <div style="height: 2px; background:black;"></div>


                        {{-- radio buttons --}}
                        {{-- <div class=" d-flex align-content-start flex-wrap my-4 btn-group documents-btn" role="group"
                            aria-label="Basic radio toggle button group">


                            <input type="radio" class="btn-check  documents-btn" name="btnradio" id="btnradio7"
                                autocomplete="off">
                            <label class="rounded documents-btn btn btn-outline-secondary m-1 p-5 fs-6 "
                                for="btnradio7">TOR</label>
                            <input type="radio" class="btn-check  documents-btn" name="btnradio" id="btnradio8"
                                autocomplete="off">
                            <label class="rounded documents-btn btn btn-outline-secondary m-1 p-5 fs-6"
                                for="btnradio8">FORM
                                137</label>
                        </div> --}}
                        {{-- checkbox button for graduate --}}
                        <div class="d-flex align-content-start flex-wrap my-4 btn-group documents-btn" role="group"
                            aria-label="Basic checkbox toggle button group">
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
                                <button type="button" class="next btn btn-secondary btn-lg">Next</button>
                            </div>
                        </div>


                        {{-- </div> --}}


                        {{-- end of page 1 --}}
                    </div>

                    <div class="page2">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request Form
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
                                    aria-label="readonly input example" id="name" name="name">
                            </div>

                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Email</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="email"
                                    aria-label="readonly input example" id="email" name="email">
                            </div>

                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <div class="col-3 pl-2 pr-2 flex-fill bd-highlight fs-5">Contact no.</div>
                            <div class="col-9 pl-2 pr-2 flex-fill bd-highlight ">
                                <input class="form-control bg-light" type="text"
                                    aria-label="readonly input example" id="contactNo" name="contactNo">
                            </div>

                        </div>
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
                                    aria-label="readonly input example" id="department" name="departments">
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
                                    aria-label="readonly input example" id="yearLevel" name="ye">
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

                    <div class="page3">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request Form
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

                    <div class="page4">
                        <h1 class="pt-3 pl-5 pb-3" style="background: #bdc3c7; color:black; padding:5px;">Request Form
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
                                                        style=" height:15px; width:15px; background:#32ff7e;  "></div>
                                                    <div class=" px-1">
                                                        <h6>Available</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row ">
                                                    <div class="px-1"
                                                        style=" height:15px; width:15px; background:#ff3838;  "></div>
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
                    <div class="page5">

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
            $(".page3").hide();
            $(".page4").hide();
            $(".next").hide();
            // $(".next2").hide();

            $('.carouselExampleIndicators').carousel({
                interval: 2000
            })

            // $(document).on('click', '#tutorial', function() {
            //     $("#exampleModal").modal('show');
            // });
            $(".tutorial").click(function() {
                $("#exampleModal").modal('show');
            })

            // $(".documents-btn").click(function() {
            //     $(".next").show();
            // })
            // $(document).ready(function() {
            //     $('input[type="checkbox"]').change(function() {
            //         if ($(this).is(':checked')) {
            //             $('.next').show();
            //         } else {
            //             $('.next').hide();
            //         }
            //     });
            // });
            $(document).ready(function() {
                $('input[type="checkbox"]').change(function() {
                    if ($('input[type="checkbox"]:checked').length > 0) {
                        $('.next').show();
                    } else {
                        $('.next').hide();
                    }
                });
            });

            $(".next").click(function() {
                $(".page1").fadeOut(500);
                $(".page2").fadeIn();

            })
            $(".backto1").click(function() {
                $(".page2").fadeOut(500);
                $(".page1").fadeIn();

            })
            $(".next2").click(function() {
                $(".page1").hide();
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



            function createInterval(i, code) {
                var count = 0;
                return setInterval(function() {
                    count++;
                    code();
                    console.log("Interval " + i + ": " + count);
                }, 1000);
            }

            var interval1 = createInterval(1, function() {
                if ($("#name, #email, #contactNo, #idNumber, #department, #course, #yearLevel").filter(
                        function() {
                            return !this.value;
                        }).length === 0) {
                    $(".next2").show();

                } else {
                    $(".next2").hide();
                }
            });
            var interval2 = createInterval(1, function() {
                if ($("#yearLvl, #semester").filter(
                        function() {
                            return !this.value;
                        }).length === 0) {
                    $(".next3").show();

                } else {
                    $(".next3").hide();
                }
            });
            // var $input1 = $("#input1"),
            //     $input2 = $("#input2"),
            //     $button = $("#button");

            // function checkInputs() {
            //     if ($input1.val() && $input2.val()) {
            //         $button.show();
            //     } else {
            //         $button.hide();
            //     }
            // }

            // $input1.on("input", checkInputs);
            // $input2.on("input", checkInputs);

            $('#calendar').fullCalendar({

            })



        });
    </script>
</body>

</html>


<style>
    * {
        margin: 0;
        padding: 0;
    }

    .head {
        height: 4rem;
        background-image: linear-gradient(to right, #ff512f, #dd2476);
    }

    .modal-body {
        overflow: hidden !important;
        /* height: 350px !important; */
        height: 500px !important;

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

    /* .carousel-inner {
        // height: 300px;
    }

    .item,
    img {
        height: 100% !important;
        width: 100% !important;
        border: 1px solid red;
    } */
    /* .carousel .item {
        height: 50px;
    }

    .item img {
        position: absolute;
        top: 0;
        left: 0;
        min-height: 50px;
    } */
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

    .documents-btn {
        min-height: 100px !important;
        min-width: 350px !important;
        text-align: center;
    }
</style>
