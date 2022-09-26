@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/profile-pic.jpg"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ Auth::user()->fName }} {{ Auth::user()->lName }}
                            </h3>
                            <p class="text-muted text-center">BS in Computer Science</p>
                            <p class="text-muted text-center">{{ Auth::user()->studentType }}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                {{-- <li class="list-group-item">
                                    <b>Student Type:</b>
                                    <p class="float-right">Student</p>
                                </li> --}}
                                <li class="list-group-item">
                                    <b>Contact No:</b>
                                    <p class="float-right">098756431234</p>
                                </li>
                                @if (Auth::user()->studentType == 'student')
                                    <li class="list-group-item">
                                        <b>Year Level: </b>
                                        <p class="float-right">4th year</p>
                                    </li>
                                @endif
                                @if (Auth::user()->studentType == 'alumni')
                                    <li class="list-group-item">
                                        <b>School Year: </b>
                                        <p class="float-right">2022</p>
                                    </li>
                                @endif
                                <li class="list-group-item">
                                    <b>School Id:</b>
                                    <p class="float-right">1342341</p>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                        </div>

                    </div>




                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">

                            <p class=" btn btn-primary disabled">Additional
                                Info</p>

                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row ">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control " id="inputEmail"
                                            placeholder="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2" placeholder="Address">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Edit Additional Info</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
