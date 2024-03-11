@extends('backend.layouts.admin_master')
@section('title', 'mange home about informations')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Mange Home-About</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-dark fw-bold lead d-inline">Manage Home About Informations</h3>&nbsp;&nbsp;&nbsp;
                        Last Updated: <button class="d-inline btn btn-primary">
                            <marquee behavior="slow" direction="" class="d-block">
                                {{ $homeAbout->updated_at->format('d-F-Y') }}
                            </marquee>
                        </button>
                        <hr class=" text-info">
                        <form action="{{ route('home.about.update', $homeAbout->id) }}" method="post"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="my-3 form-group">
                                <label for="small_title">Home About Small Title</label>
                                <input class="form-control" type="text" placeholder="hero small_title" id="small_title"
                                    name="small_title" value="{{ $homeAbout->small_title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="title">Home About Large Title</label>
                                <input class="form-control" type="text" placeholder="hero title" id="title"
                                    name="title" value="{{ $homeAbout->title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="experience_title">Home About Experience Title</label>
                                <input class="form-control" type="text" placeholder="hero experience_title"
                                    id="experience_title" name="experience_title" value="{{ $homeAbout->experience_title }}"
                                    required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="details">Home Hero Long Details</label>

                                <textarea name="details" id="details" rows="4" class=" form-control">{{ $homeAbout->details }}</textarea>
                            </div>


                            <div class="row my-2">
                                <div class="col-lg-6">
                                    <div class="my-3 form-group">
                                        <label for="cv">Home About Cv File</label>
                                        <input class="form-control cv" type="file" id="cv" name="cv"
                                            value="">
                                        <div class="my-2">
                                            @if ($homeAbout->cv)
                                                <img src="{{ asset($homeAbout->cv) }}"
                                                    class="show_cv img-fluid img-thumbnail shadow p-2"
                                                    style="height: 200px;width:200px;" id="show_cv" alt="">
                                             
                                            @else
                                                <img src="{{ asset('no_image.jpg') }}"
                                                    class="show_cv img-fluid img-thumbnail shadow p-2"
                                                    style="height: 200px;width:200px;" id="show_cv" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-3 form-group">
                                        <label for="logo">Home About Logo Icon</label>
                                        <input class="form-control" type="file" id="logo" name="logo"
                                            value="">
                                        <div class="my-2">
                                            @if ($homeAbout->cv)
                                                <img src="{{ asset($homeAbout->logo) }}"
                                                    class="show_logo img-fluid img-thumbnail shadow p-2"
                                                    style="height: 100px;width:100px;" id="show_logo" alt="">
                                            @else
                                                <img src="{{ asset('no_image.jpg') }}"
                                                    class="show_logo img-fluid img-thumbnail shadow p-2"
                                                    style="height: 100px;width:100px;" id="show_logo" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit">Update Home
                                    Hero</button>
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
                    experience_title: {
                        required: true,
                    },
                    details: {
                        required: true,
                    },

                },
                messages: {
                    small_title: {
                        required: 'Please enter small title',
                    },
                    title: {
                        required: 'Please enter title',
                    },
                    experience_title: {
                        required: 'Please enter experience title',
                    },
                    details: {
                        required: 'Please enter about details',
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
        $(document).ready(function() {
            $(document).on('change', '.cv', function(e) {
                show_cv.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>

    {{-- show logo --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '#logo', function(e) {
                show_logo.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>


@endsection
