@extends('backend.layouts.admin_master')
@section('title', 'home about multi image edit')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home About </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">MultiImage</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="text-dark fw-bold lead ">Home About Multi Image Edit</h3>
                            <<a href="{{ route('multiimage.index') }}"
                                class="btn btn-dark fw-bold btn-sm waves-effect waves-light">
                                All
                                MultiImage</a>
                        </div>
                        <hr class=" text-info">
                        <form action="{{ route('multiimage.update', $image->id) }}" method="post"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            @method('put')

                            <div class="my-3 form-group">
                                <label for="image">Home About Multi Image</label>
                                <input class="form-control image" type="file" placeholder="hero image" id="image"
                                    name="image_name" value="{{ $image->image_name }}" >
                                <div class="my-2">
                                    if
                                    <img src="{{ asset($image->image_name) }}"
                                        class="show_image img-fluid img-thumbnail shadow p-2"
                                        style="height: 200px;width:200px;" id="show_image" alt="">
                                </div>
                            </div>
                            <div class="my-3">
                                <button class="btn btn-info waves-effect waves-light" type="submit">Update Multi
                                    Image</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

 
    {{-- image preview --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '.image', function(e) {
                show_image.src = URL.createObjectURL(e.target.files['0']);
            });
        });
    </script>
@endsection
