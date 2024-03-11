@extends('backend.layouts.admin_master')
@section('title', 'working-process caption edit')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Mange working-process-Captions</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">working-process</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-dark fw-bold lead d-inline">Manage working-process Captions</h3>&nbsp;&nbsp;&nbsp;
                        Last Updated: <button class="d-inline btn btn-primary">
                            <marquee behavior="slow" direction="" class="d-block">
                                {{ $working->updated_at->format('d-F-Y') }}
                            </marquee>
                        </button>
                        <hr class=" text-info">
                        <form action="{{ route('work.processs.caoption.update', $working->id) }}" method="post"
                            id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="my-3 form-group">
                                <label for="title">Working-process Title</label>
                                <input class="form-control" type="text" placeholder="working-process title"
                                    id="title" name="title" value="{{ $working->title }}" required>
                            </div>
                            <div class="my-3 form-group">
                                <label for="details">Working-process Details</label>
                                <input class="form-control" type="text" placeholder="working-process details"
                                    id="details" name="details" value="{{ $working->details }}" required>
                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit">Update working-process
                                    Captions
                                </button>
                            </div>
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
                },
                messages: {
                    title: {
                        required: 'Please enter working-process title',
                    },
                    details: {
                        required: 'Please enter working-process details',
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




@endsection
