@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
{{-- Modal --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">

                <div class="text-center mt-5">
                    <h4>Downloading Report by:</h4>

                </div>
                <div class="row ">
                    <div class="d-flex justify-content-evenly mt-3">
                        <button class="btn btn-secondary ">Daily</button>
                        <button class="btn btn-secondary ">Weekly</button>
                        <button class="btn btn-secondary ">Monthly</button>
                        <button class="btn btn-secondary ">Yearly</button>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary">Save changes</button>
            </div>
        </div>
    </div>
</div>

{{-- personal info modal --}}
<div class="modal fade" id="personalInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">

                <div class="text-center mt-5">
                    <h4>Downloading Report by:</h4>

                </div>
                <div class="row ">
                    <div class="d-flex justify-content-evenly mt-3">
                        <button class="btn btn-secondary ">Daily</button>
                        <button class="btn btn-secondary ">Weekly</button>
                        <button class="btn btn-secondary ">Monthly</button>
                        <button class="btn btn-secondary ">Yearly</button>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{-- end Modal --}}
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mx-3">
                <div class="card-header ">
                    <div class="d-flex mb-3">
                        <div class="me-auto p-2"> <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Download Record
                            </button></div>
                        <div class="p-2"><button class="btn btn-sm btn-secondary">Today</button></div>
                        <div class="p-2"><button class="btn btn-sm btn-secondary">Show All</button></div>
                    </div>


                </div>


                <div class="card-body">

                    <table class="table table-striped table-hover " id="studentsReqTbl"
                        class="display
                    ">

                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Request Form</th>
                                <th>Request Date</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>



                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bryan Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>mark Ladion</td>
                                <td>COR</td>
                                <td>12/15/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>mike Ladion</td>
                                <td>COR</td>
                                <td>12/10/21</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>tyson Ladion</td>
                                <td>COR</td>
                                <td>11/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>james Ladion</td>
                                <td>COR</td>
                                <td>12/08/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>peter Ladion</td>
                                <td>COR</td>
                                <td>01/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>watson Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>mark Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>james Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>harden Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>stephen Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>curry Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>michael Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>jackson Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>hype Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>lol Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>taeyo Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>sam Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>uncle Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>sam Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>hi Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>hello Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>barbie Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>banjo Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Brick Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bam Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bodt Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-success"
                                        data-bs-toggle="modal">Claimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>miya Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bryan Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bryan Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>Bryan Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>sampong Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>libo Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>ni Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>peter cayetano</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>mike Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>tyson Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>mike Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>pan Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>peter Ladion</td>
                                <td>COR</td>
                                <td>12/10/22</td>
                                <td>

                                    <a href="claim-confirmation-modal" class="btn btn-secondary"
                                        data-bs-toggle="modal">Unclaimed</i></a>
                                </td>
                            </tr>

                            {{-- <tr class="expandable-body ">

                                <td colspan="5">
                                    <div class="p2- m-2">
                                        <h3>Personal Information</h3>
                                    </div>

                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">Name</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="Bryan Ladion" aria-label="readonly input example"
                                                readonly></div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">Email</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="camelCase.ph@gmail.com"
                                                aria-label="readonly input example" readonly></div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class=" col-6 pl-2 pr-2 flex-fill bd-highlight">Contact No.</div>
                                        <div class=" col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="09558733688" aria-label="readonly input example"
                                                readonly></div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">ID number</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="145274" aria-label="readonly input example"
                                                readonly>
                                        </div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">Department</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="Department of Compuer Science"
                                                aria-label="readonly input example" readonly>
                                        </div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">Course</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="Computer Science"
                                                aria-label="readonly input example" readonly></div>

                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight">Year Level</div>
                                        <div class="col-6 pl-2 pr-2 flex-fill bd-highlight"><input class="form-control"
                                                type="text" value="4" aria-label="readonly input example"
                                                readonly>
                                        </div>

                                    </div>




                                </td>
                            </tr> --}}


                        </tbody>
                    </table>

                </div>

            </div>
        </div>


    </div>
    </div>
@endsection
@push('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#studentsReqTbl').DataTable({
                responsive: true
            });
        });
    </script>
@endpush

<style>
    .card-header {
        background-color: #dfe6e9 !important;

    }

    .card {
        background-color: #dfe6e9 !important;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #b2bec3 !important;
        border-radius: 5px !important;
    }

    /* .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    background-color: #b2bec3 !important;
} */
</style>
