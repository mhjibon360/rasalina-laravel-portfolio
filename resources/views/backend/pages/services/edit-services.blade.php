@extends('backend.layouts.admin_master')
@section('title', 'edit services')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Services</h4>
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
                            <h3 class="text-dark fw-bold lead d-inline">Edit Services</h3>
                            <a href="{{ route('services.index') }}" class=" btn btn-dark btn-sm">All Services</a>
                        </div>

                        <hr class=" text-info">
                        <form action="{{ route('services.update', $service->id) }}" method="post"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            @method('put')
                            <div class="my-3 form-group">
                                <label for="title">Services Title</label>
                                <input class="form-control" type="text" placeholder="services title" id="title"
                                    name="title" value="{{ $service->title }}" required>
                            </div>

                            <div class="my-3 form-group">
                                <label for="details">Saervices Details</label>
                                <textarea name="details" id="elm1" rows="4" class=" form-control"
                                    placeholder="write your services details...">{{ $service->details }}</textarea>
                            </div>

                            <div class="row my-2">
                                <div class="col-lg-6">
                                    <div class="my-3 form-group">
                                        <label for="thumbnail_image">Service Thumbnail Image</label>
                                        <input class="form-control thumbnail_image" type="file" id="thumbnail_image"
                                            name="thumbnail_image" value="">
                                        <div class="my-2">
                                            <img src="{{ asset($service->thumbnail_image) }}"
                                                class="thumbnail_image_show img-fluid shadow p-2"
                                                style="height: 200px;width:200px;" id="thumbnail_image_show" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-3 form-group">
                                        <label for="icon">Services Icon</label>
                                        <input class="form-control" type="file" id="icon" name="icon"
                                            value="">
                                        <div class="my-2">
                                            <img src="{{ asset($service->icon) }}"
                                                class="show_icon img-fluid img-thumbnail shadow p-2"
                                                style="height: 100px;width:100px;" id="show_icon" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit"> Update
                                    Services</button>
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
                    thumbnail_image: {
                        required: false,
                    },
                    icon: {
                        required: false,
                    },
                },

                messages: {
                    title: {
                        required: 'Please enter services title',
                    },
                    details: {
                        required: 'Please enter services details',
                    },
                    thumbnail_image: {
                        required: 'Services Thumbnail Image',
                    },
                    icon: {
                        required: 'Please select Services Icon',
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
            $(document).on('change', '.thumbnail_image', function(e) {
                thumbnail_image_show.src = URL.createObjectURL(e.target.files[0]);
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
