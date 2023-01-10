<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="icon" type="image/png" href="dist/img/msatlogo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">



    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> --}}

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <script src="https://kit.fontawesome.com/612e1c7b76.js" crossorigin="anonymous"></script>

    <script nonce="75fed223-4b53-49eb-b0b3-5ee3409dd016">
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
    </script>
</head>


{{-- modal --}}
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">HOW TO MAKE AN APPOINTMENT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>1.Select a document to claim.</h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/selectform.png" width="300px">

                </div>

                <br>
                <h5>2. Input your personal information </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/inputpersonalinfo.png" width="300px">

                </div>
                <br>
                <h5>3. Input year level and semester </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step2.png" width="300px">

                </div>
                <br>
                <h5>4. Select appointment date </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/step3.png" width="300px">

                </div>
                <h5>5. Review request </h5>
                <div class="pl-3 pr-2">
                    <img src="../../dist/img/reviewform.png" width="300px">

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

    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

                    </div>

                </div>
            </div>
        </div>

    </section>
    <footer>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


    <script>
        $(document).ready(function() {
            $("#exampleModal").modal('show');
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
</style>
