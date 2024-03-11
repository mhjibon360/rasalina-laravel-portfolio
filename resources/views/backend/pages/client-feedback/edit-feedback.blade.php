@extends('backend.layouts.admin_master')
@section('title', 'edit client feedback')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Client Feedback</h4>
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
                            <h3 class="text-dark fw-bold lead d-inline">Edit Client-Feedback</h3>
                            <a href="{{ route('feedback.index') }}" class=" btn btn-dark btn-sm">All portfolio
                                Category</a>
                        </div>

                        <hr class=" text-info">
                        <form action="{{ route('feedback.update', $client->id) }}" method="post" id="myForm">
                            @csrf
                            @method('put')

                            <div class="my-3 form-group">
                                <label for="name">Client Name</label>
                                <input class="form-control" type="text" placeholder="client  name" id="name"
                                    name="name" value="{{ $client->name }}" required>
                            </div>

                            <div class="my-3 form-group">
                                <label for="name">Client Feedback(Comment)</label>
                                <textarea name="comment" id="comment" class=" form-control" rows="5" placeholder="writye client comment...."
                                    required>{{ $client->comment }}</textarea>
                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit"> Update
                                    Client Feedback</button>
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
                    name: {
                        required: true,
                    },
                    comment: {
                        required: true,
                    },

                },

                messages: {
                    name: {
                        required: 'Please enter cleint name name',
                    },
                    comment: {
                        required: 'Please enter cleint comment name',
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
