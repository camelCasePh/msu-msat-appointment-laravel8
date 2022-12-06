@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">



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
