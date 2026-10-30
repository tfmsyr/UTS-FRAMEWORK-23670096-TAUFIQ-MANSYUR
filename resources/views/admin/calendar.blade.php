@extends('admin')

@section('title', 'Calendar')

@push('styles')
    {{-- Salin <link> CSS kalender dari <head> calendar.html asli, lalu ganti path-nya ke asset() --}}
    {{-- Contoh: --}}
    {{-- <link href="{{ asset('assets/admin/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css" /> --}}
@endpush

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Calendar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-3 col-md-4">

                                    <h6 class="mb-3">Create Events</h6>
                                    <form method="post" id="add_event_form">
                                        <input type="text" class="form-control new-event-form" placeholder="Create new event..." />
                                    </form>

                                    <div id='external-events' class="mt-4">
                                        <h6 class="mb-3">Draggable Events</h6>
                                        <div class='fc-event'>Design Review - Myra</div>
                                        <div class='fc-event'>Project Meeting</div>
                                        <div class='fc-event'>Weekly Review</div>
                                        <div class='fc-event'>Planning</div>
                                        <div class='fc-event'>Kickoff Meeting</div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox mt-3">
                                        <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                    </div>

                                </div>

                                <div id='calendar' class="col-lg-9 col-md-8 mt-3 mt-lg-0"></div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@push('scripts')
    {{-- Salin <script> kalender dari bagian bawah calendar.html asli (sebelum </body>), --}}
    {{-- lalu ganti path-nya ke asset(). Contoh: --}}
    {{-- <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/plugins/fullcalendar/main.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/pages/calendar.init.js') }}"></script> --}}
@endpush