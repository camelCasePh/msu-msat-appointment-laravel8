@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Appointment</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @if (Auth::user()->isAdmin == 0)
        <div class="card mt-5 ml-5 mr-5 ">
            <div class="card-header">



                <h3 class="card-title">Set Appointment</h3>
            </div>
            <div class="card-body  ">
                <p>Select a Request:</p>
                <div class="d-flex justify-content-center ">
                    <div class="flex-nowrap ">
                        <a class="btn btn-app ">
                            <i class="fas fa-solid fa-trash"></i>
                            Dropping of
                            Subjects
                        </a>
                        <a class="btn btn-app">

                            <i class="fas fa-regular fa-plus"></i>

                            adding of Subjects
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-solid fa-pen-to-square"></i>
                            Shifting Form
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-solid fa-x"></i>
                            Completion of INC Grade
                        </a>
                        <a class="btn btn-app">

                            <i class="fas fa-solid fa-ban"></i>
                            Request for Honorable Dismissal
                        </a>
                        <a class="btn btn-app">

                            <i class="fas fa-solid fa-file"></i>
                            Request for TOR
                        </a>
                        <a class="btn btn-app">

                            <i class="fas fa-solid fa-receipt"></i>
                            Request for certification form / form 137
                        </a>

                    </div>

                </div>
                {{-- <div class="clearfix">...</div> --}}
            </div>

            <style>
                .btn-app {

                    border-radius: 3px;
                    background-color: #f8f9fa;
                    border: 1px solid #ddd;
                    color: #6c757d;
                    font-size: 12px;
                    height: 100px;
                    margin: 0 0 10px 10px;
                    width: 120px;
                    padding: 20px 15px;
                    position: relative;
                    text-align: center;

                }
            </style>
    @endif
@endsection
