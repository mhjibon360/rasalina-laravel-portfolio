@extends('backend.layouts.admin_master')
@section('title', 'edit portfolio')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">portfolio</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">edit</li>
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
                            <h3 class="text-dark fw-bold lead d-inline">edit portfolio</h3>
                            <a href="{{ route('working.index') }}" class=" btn btn-dark btn-sm">All
                                portfolio</a>
                        </div>

                        <hr class=" text-info">
                        <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            @method('put')
                            <div class="my-3 form-group">
                                <label for="category_id">portfolio Category</label>
                                <select name="category_id" id="category_id" class="select2 form-control">
                                    <option value="" selected disabled>--select category--</option>
                                    @foreach ($allCategory as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $portfolio->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="my-3 form-group">
                                <label for="title">portfolio Title</label>
                                <input class="form-control" type="text" placeholder="portfolio title" id="title"
                                    name="title" value="{{ $portfolio->title }}" required>
                            </div>

                            <div class="my-3 form-group">
                                <label for="details">Working Process Details</label>
                                <textarea name="details" id="elm1" rows="4" class=" form-control"
                                    placeholder="write your portfolio details...">{{ $portfolio->details }}</textarea>
                            </div>

                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <div class="my-3 form-group">
                                        <label for="icon">portfolio Image</label>
                                        <input class="form-control icon" type="file" id="icon" name="image"
                                            value="">
                                        <div class="my-2">
                                            <img src="{{ asset($portfolio->image) }}" class="icon_show img-fluid shadow p-2"
                                                style="height: 200px;width:200px;" id="icon_show" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit"> Update
                                    portfolio</button>
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
                        required: 'Please enter portfolio small title',
                    },
                    title: {
                        required: 'Please enter portfolio  title',
                    },
                    details: {
                        required: 'Please enter portfolio details',
                    },
                    icon: {
                        required: 'Please select portfolio Icon',
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
