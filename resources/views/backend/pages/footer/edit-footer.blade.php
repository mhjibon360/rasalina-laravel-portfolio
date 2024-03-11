@extends('backend.layouts.admin_master')
@section('title', 'edit footer informations')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Footer</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">footer</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Last Updated: <button class="d-inline btn btn-primary">
                            <marquee behavior="slow" direction="" class="d-block">
                                {{ $footer->updated_at->format('d-F-Y') }}
                            </marquee>
                        </button>
                        <hr class=" text-info">
                        <form action="{{ route('update.footer', $footer->id) }}" method="post" id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4">
                                    <h3 class="text-info fw-bold lead d-inline">CONTACT US
                                    </h3>&nbsp;&nbsp;&nbsp;
                                    <div class="my-3 form-group">
                                        <label for="contact_title">Contact Title</label>
                                        <input class="form-control" type="text" id="contact_title" name="contact_title"
                                            value="{{ $footer->contact_title }}" required>
                                    </div>
                                    <div class="my-3 form-group">
                                        <label for="contact_number">Contact Number</label>
                                        <input class="form-control" type="text" id="contact_number" name="contact_number"
                                            value="{{ $footer->contact_number }}" required>
                                    </div>
                                    <div class="my-3 form-group">
                                        <label for="contact_number">Contact Details</label>
                                        <textarea class="form-control" name="contact_details" id="contact_details" rows="4" required>{{ $footer->contact_details }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <h3 class="text-info fw-bold lead d-inline">My Address
                                    </h3>&nbsp;&nbsp;&nbsp;
                                    <div class="my-3 form-group">
                                        <label for="address_title">Address Title</label>
                                        <input class="form-control" type="text" id="address_title" name="address_title"
                                            value="{{ $footer->address_title }}" required>
                                    </div>
                                    <div class="my-3 form-group">
                                        <label for="address_name">Address Name</label>
                                        <input class="form-control" type="text" id="address_name" name="address_name"
                                            value="{{ $footer->address_name }}" required>
                                    </div>

                                    <div class="my-3 form-group">
                                        <label for="address_location">Address Locations</label>
                                        <input class="form-control" type="text" id="address_location"
                                            name="address_location" value="{{ $footer->address_location }}" required>
                                    </div>
                                    <div class="my-3 form-group">
                                        <label for="address_email">Address E-mail</label>
                                        <input class="form-control" type="email" id="address_email" name="address_email"
                                            value="{{ $footer->address_email }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <h3 class="text-info fw-bold lead d-inline">Follow Me
                                    </h3>&nbsp;&nbsp;&nbsp;
                                    <div class="my-3 form-group">
                                        <label for="follow_title">Follow Title</label>
                                        <input class="form-control" type="text" id="follow_title" name="follow_title"
                                            value="{{ $footer->follow_title }}" required>
                                    </div>
                                    <div class="my-3 form-group">
                                        <label for="follow_big_title">Follow Big Title</label>
                                        <input class="form-control" type="text" id="follow_big_title"
                                            name="follow_big_title" value="{{ $footer->follow_big_title }}" required>
                                    </div>

                                    <div class="my-3 form-group">
                                        <label for="follow_details">Follow Details</label>
                                        <textarea class="form-control" name="follow_details" id="follow_details" rows="4" required>{{ $footer->follow_details }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="my-3 form-group">
                                        <label for="footer_title">Footer Title</label>
                                        <input class="form-control" type="text" id="footer_title" name="footer_title"
                                            value="{{ $footer->footer_title }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit">Update
                                    Footer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- validateion --}}
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    title: {
                        required: true,
                    },
                    details: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                        required: 'Please enter services title',
                    },
                    details: {
                        required: 'Please enter services details',
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
    </script> --}}
@endsection
