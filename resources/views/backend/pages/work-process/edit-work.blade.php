@extends('backend.layouts.admin_master')
@section('title', 'edit working-process')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">working-process</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between align-items-center">
                            <h3 class="text-dark fw-bold lead d-inline">Edit working-process</h3>
                            <a href="{{ route('working.index') }}" class=" btn btn-dark btn-sm">All
                                working-process</a>
                        </div>

                        <hr class=" text-info">
                        <form action="{{ route('working.update', $work->id) }}" method="post" enctype="multipart/form-data"
                            id="myForm">
                            @csrf
                            @method('put')
                            <div class="my-3 form-group">
                                <label for="small_title">working-process Small Title</label>
                                <input class="form-control" type="text" placeholder="working-process small title"
                                    id="small_title" name="small_title" value="{{ $work->small_title }}" required>
                            </div>

                            <div class="my-3 form-group">
                                <label for="title">working-process Title</label>
                                <input class="form-control" type="text" placeholder="working-process title"
                                    id="title" name="title" value="{{ $work->title }}" required>
                            </div>

                            <div class="my-3 form-group">
                                <label for="details">Working Process Details</label>
                                <textarea name="details" id="elm1" rows="4" class=" form-control"
                                    placeholder="write your working-process details...">{{ $work->details }}</textarea>
                            </div>

                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <div class="my-3 form-group">
                                        <label for="icon">working-Process Icon Image</label>
                                        <input class="form-control icon" type="file" id="icon" name="icon"
                                            value="">
                                        <div class="my-2">
                                            <img src="{{ asset($work->icon) }}" class="icon_show img-fluid shadow p-2"
                                                style="height: 200px;width:200px;" id="icon_show" alt="">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit"> Update
                                    working-process</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- validateion --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    small_title: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    details: {
                        required: true,
                    },
                    icon: {
                        required: true,
                    },
                },

                messages: {
                    small_title: {
                        required: 'Please enter working-process small title',
                    },
                    title: {
                        required: 'Please enter working-process  title',
                    },
                    details: {
                        required: 'Please enter working-process details',
                    },
                    icon: {
                        required: 'Please select working-process Icon',
                    },
                },
                errorElement: 'strong',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>

    {{-- show cv file --}}
    <script>
        $(function() {
            $(document).on('change', '.icon', function(e) {
                icon_show.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>

    {{-- show icon --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '#icon', function(e) {
                show_icon.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>


@endsection
