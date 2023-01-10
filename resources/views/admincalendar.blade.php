@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
@endsection

{{-- start modal --}}
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="slotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Calendar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>If you'll select on either unavailable or holiday don't change the default value of slot number which
                    is
                    0.</p>
                <label for="Slot">Number of Slot</label>
                <input type="text" class="form-control" value="0" id="slotSize">
                <div>
                    <label for="Slot">Slot Status</label>
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" value="Available" name="btnradio" id="btnradio1"
                        autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Available</label>

                    <input type="radio" class="btn-check" value="Unavailable" name="btnradio" id="btnradio2"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Unavailable</label>

                    <input type="radio" class="btn-check" value="Holiday" name="btnradio" id="btnradio3"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Holiday</label>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" id="saveBtn" class="btn btn-secondary">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}
@section('content')
    <div class="card mx-1">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-11">
                        <div id="calendar">

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // fetchstudent();

            // function fetchstudent() {
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ route('fetchslot') }}",
            //         dataType: "json",
            //         success: function(response) {
            //             console.log(response.slots)
            // var slots = response.events;
            //         }
            //     });
            // }
            var slots = @json($events);


            $('#calendar').fullCalendar({
                displayEventTime: false,
                height: 570,
                events: slots,
                selectable: true,
                selectHelper: true,
                // eventBackgroundColor: '#378006',
                select: function(start, end, allDays) {
                    $('#slotModal').modal('toggle');
                    $('#saveBtn').click(function() {
                        // e.preventDefault();
                        var title = $('#slotSize').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');
                        var slotStatus = $('input[name="btnradio"]:checked').val();


                        $.ajax({
                            url: "{{ route('storeslot') }}",
                            type: "POST",
                            dataType: 'json',
                            // contentType: "application/json; charset=utf-8",
                            data: {
                                title,
                                start_date,
                                end_date,
                                slotStatus
                            },
                            success: function(response) {
                                // alert(response)
                                // console.log(response)
                                if (response.status == 400) {

                                } else {
                                    $('#slotModal').modal('hide');
                                    $('#slotModal').find('input').val("");
                                }
                            },

                            // error: function(error) {
                            //     // if (error.responseJSON.errors) {
                            //     //     $(#title).html(error.responseJSON.errors);
                            //     // }
                            // },
                        });

                    });
                }

            })

        });

        // function fetchslot() {
        //     $.ajax({
        //         type: "GET",
        //         url: "/fetch-slots",
        //         dataType: "json",
        //         success: function(response) {
        //             console.log(response.slots);
        //         }
        //     });
        // }

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
    </script>
@endpush

<style>
    /* .card-header {
        background-color: #ecf0f1 !important;

    }


    .card {
        background-color: #ecf0f1 !important;
    } */

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #b2bec3 !important;
        border-radius: 5px !important;
    }

    .fc-title {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

    }

    .fc-event {
        height: 50px;
        display: flex !important;
        flex-wrap: wrap !important;
        padding: 5px;
        align-content: center !important;

        background-color: black !important;

    }
</style>
