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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Slot</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- <p>If you'll select on either unavailable or holiday don't change the default value of slot number which
                    is
                    0.</p> --}}
                <label for="Slot">Number of Slot</label>
                <input type="text" class="form-control" value="50" id="slotSize">
                {{-- <div>
                    <label for="Slot">Slot Status</label>
                </div> --}}
                {{-- <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> --}}
                <input type="hidden" class="form-control" value="Available" id="slotStatus">
                {{-- <label class="btn btn-outline-primary" for="btnradio1">Available</label> --}}

                {{-- <input type="radio" class="btn-check" value="Unavailable" name="btnradio" id="btnradio2"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Unavailable</label>

                    <input type="radio" class="btn-check" value="Holiday" name="btnradio" id="btnradio3"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Holiday</label>

                </div> --}}
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
                        <div>
                            <h5>Legend</h5>
                            {{-- <div style="height: 2px; background:black;"></div> --}}
                            <div class="d-flex flex-row ">
                                <div class="px-1" style=" height:15px; width:15px; background:#32ff7e;  "></div>
                                <div class=" px-1">
                                    <h6>Available</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-row ">
                                <div class="px-1" style=" height:15px; width:15px; background:#ff3838;  "></div>
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

            var slots = @json($events);

            $('#calendar').fullCalendar({
                unselectAuto: true,
                unselectCancel: '.past-day',
                displayEventTime: false,
                height: 570,
                events: slots,
                selectable: true,
                selectHelper: true,

                select: function(start, end, allDays) {
                    var today = new Date();
                    var selectedDate = start._d;
                    if (selectedDate >= today) {
                        $('#slotModal').modal('toggle');
                        $('#saveBtn').click(function() {
                            var title = $('#slotSize').val();
                            var start_date = moment(start).format('YYYY-MM-DD');
                            var end_date = moment(end).format('YYYY-MM-DD');
                            var slotStatus = $('#slotStatus').val();

                            $.ajax({
                                url: "{{ route('storeslot') }}",
                                type: "POST",
                                dataType: 'json',
                                data: {
                                    title,
                                    start_date,
                                    end_date,
                                    slotStatus
                                },
                                success: function(response) {
                                    if (response.status == 400) {
                                        // handle error
                                    } else {
                                        // $('#calendar').fullCalendar(
                                        // 'refetchEvents');
                                        $('#slotModal').modal('hide');
                                        $('#slotModal').find('input').val("");
                                    }
                                }
                            });
                        });
                    }
                },
                dayRender: function(date, cell) {
                    var currentDate = new Date();
                    if (date < currentDate) {
                        $(cell).addClass('past-day');
                        $(cell).click(function(e) {
                            e.preventDefault();
                            return false;
                        });
                    }
                }

            });
        });
    </script>
@endpush

<style>
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
        border: 1px solid #32ff7e !important;
        background-color: #32ff7e !important;

    }

    .past-day {
        pointer-events: none;
        background-color: #ddd;
    }
</style>
