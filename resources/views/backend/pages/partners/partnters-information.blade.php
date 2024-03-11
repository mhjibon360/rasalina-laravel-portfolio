@extends('backend.layouts.admin_master')
@section('title', 'edit partners informations')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Partners Informations</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">partners</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-dark fw-bold lead d-inline">Manage Partners Informations</h3>&nbsp;&nbsp;&nbsp;
                        Last Updated: <button class="d-inline btn btn-primary">
                            <marquee behavior="slow" direction="" class="d-block">
                                {{ $partnes->updated_at->format('d-F-Y') }}
                            </marquee>
                        </button>
                        <hr class=" text-info">
                        <form action="{{ route('update.partner.ifnormation', $partnes->id) }}" method="post"
                            id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="my-3 form-group">
                                <label for="small_title">Partners Small Title</label>
                                <input class="form-control" type="text" placeholder="hero small_title" id="small_title"
                                    name="small_title" value="{{ $partnes->small_title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="title">Partners Title</label>
                                <input class="form-control" type="text" placeholder="hero title" id="title"
                                    name="title" value="{{ $partnes->title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="title">Partners Title</label>
                                <textarea name="details" id="details" class=" form-control" rows="4">{{ $partnes->details }}</textarea>
                            </div>

                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit">Update Partners
                                    Informations
                                </button>
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
