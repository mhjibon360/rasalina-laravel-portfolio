@extends('backend.layouts.admin_master')
@section('title', 'mange home hero')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Mange Home</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">Hero</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-dark fw-bold lead d-inline">Manage Home Hero Informations</h3>&nbsp;&nbsp;&nbsp;
                        Last Updated: <button class="d-inline btn btn-primary">
                            <marquee behavior="slow" direction="" class="d-block">{{ $hero->updated_at->format('d-F-Y') }}
                            </marquee>
                        </button>
                        <hr class=" text-info">
                        <form action="{{ route('update.home.hero', $hero->id) }}" method="post"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="my-3 form-group">
                                <label for="title">Home Hero Title</label>
                                <input class="form-control" type="text" placeholder="hero title" id="title"
                                    name="title" value="{{ $hero->title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="details">Home Hero Short Details</label>
                                <input class="form-control" type="text" placeholder="hero details" id="details"
                                    name="details" value="{{ $hero->details }}">
                            </div>
                            <div class="my-3 form-group">
                                <label for="button_text">Home Hero Button Text</label>
                                <input class="form-control" type="text" placeholder="hero button_text" id="button_text"
                                    name="button_text" value="{{ $hero->button_text }}">
                            </div>
                            <div class="my-3 form-group">
                                <label for="view_link">Home Hero Video LInk</label>
                                <input class="form-control" type="text" placeholder="hero view_link" id="view_link"
                                    name="view_link" value="{{ $hero->view_link }}">
                            </div>
                            <div class="my-3 form-group">
                                <label for="image">Home Hero Profile Image</label>
                                <input class="form-control image" type="file" placeholder="hero image" id="image"
                                    name="image" value="">
                                <div class="my-2">
                                    @if ($hero->image)
                                        <img src="{{ asset($hero->image) }}"
                                            class="show_image img-fluid img-thumbnail shadow p-2"
                                            style="height: 200px;width:200px;" id="show_image" alt="">
                                    @else
                                        <img src="{{ asset('no_image.jpg') }}"
                                            class="show_image img-fluid img-thumbnail shadow p-2"
                                            style="height: 200px;width:200px;" id="show_image" alt="">
                                    @endif
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
                    title: {
                        required: true,
                    },
                    details: {
                        required: true,
                    },
                    button_text: {
                        required: true,
                    },
                    view_link: {
                        required: true,
                    },
                    image: {
                        required: false,
                    },
                },
                messages: {
                    title: {
                        required: 'Please enter home title',
                    },
                    details: {
                        required: 'Please enter home details',
                    },
                    button_text: {
                        required: 'Please enter home button place holder text',
                    },
                    view_link: {
                        required: 'Please enter home video link',
                    },
                    image: {
                        required: 'Please pickup home profile photo',
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
    {{-- image preview --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '.image', function(e) {
                show_image.src = URL.createObjectURL(e.target.files['0']);
            });
        });
    </script>
@endsection
