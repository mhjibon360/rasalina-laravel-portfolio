@extends('backend.layouts.admin_master')
@section('title', 'edit portfolio category')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Portflio category</h4>
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
                            <h3 class="text-dark fw-bold lead d-inline">Edit portfolio category</h3>
                            <a href="{{ route('portfoliocategory.index') }}" class=" btn btn-dark btn-sm">All portfolio
                                Category</a>
                        </div>

                        <hr class=" text-info">
                        <form action="{{ route('portfoliocategory.update', $category->id) }}" method="post" id="myForm">
                            @csrf
                            @method('put')
                            <div class="my-3 form-group">
                                <label for="name">Portfolio Category</label>
                                <input class="form-control" type="text" placeholder="category name" id="name"
                                    name="name" value="{{ $category->name }}" required>
                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit"> Update
                                    Portfolio Category</button>
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
                },

                messages: {
                    name: {
                        required: 'Please enter portfolio category name',
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
