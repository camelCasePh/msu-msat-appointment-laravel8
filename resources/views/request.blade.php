@extends('layouts.app')

@section('content')
    <style>
        .table>:not(:last-child)>:last-child>* {
            border-bottom-color: red;

        }

        .page-item.active .page-link {
            background-color: red;
            color: white;
        }
    </style>










    {{-- end modal --}}

    <div class="row">
        <div class="col-12">
            <div class="card mx-3">
                <div class="card-header ">
                    <h3 class="card-title">Request</h3>
                </div>



                {{-- modal --}}






                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover ">

                        <thead>
                            <tr>

                                <th>Last name</th>
                                <th>First name</th>
                                <th>Request</th>
                                <th>Request date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>




                </div>
                </thead>
                <tbody>
                    {{-- @foreach ($leads as $lead)
                                @if ($lead->active == 1) --}}
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>sdasdas</td>
                        <td>ddsfdsf</td>
                        <td>dsfsdfs</td>
                        <td>fdsfsdf</td>

                        <td> {{-- @if (Auth::user()->role == 1) --}}
                            {{-- <td class="d-flex justify-content-around"><a href="#editModal{{ $lead->id }}"
                                        data-bs-toggle="modal"><i class="fa-solid fa-pencil" style="color:black;"> </i></a> --}}
                            <a href="#deleteModal" data-bs-toggle="modal"><i class="fa-solid fa-trash-can"
                                    style="color:red;"></i></a>
                        </td>
                        {{-- @endif --}}

            </div>



            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- form --}}
                        <form method="POST" action="#">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="id">
                            <input type="hidden" name="active" value=0>

                            <div class="modal-body">

                                <h5>Are you sure you want to delete this data?</h5>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end deletemodal --}}
            </tr>
            <tr class="expandable-body ">
                <td colspan="5">
                    <div class="d-flex justify-content-around ">

                        <div class="flex-nowrap">
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>
                            <span class="p-2 m-2">
                                <strong>Name:</strong> dasdasdasdasd
                            </span>




                        </div>



                    </div>
                </td>
            </tr>
            {{-- @endif
                    @endforeach --}}

            </tbody>
            </table>
            {{-- {{ $leads->links() }} --}}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    </div>
@endsection
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

<style>
    .modalBody {
        height: 350px;
        overflow: hidden;
    }

    .modalBody:hover {
        overflow-y: auto;
    }

    .editmodalBody {
        height: 350px;
        overflow: hidden;
    }

    .editmodalBody:hover {
        overflow-y: auto;
    }
</style>
