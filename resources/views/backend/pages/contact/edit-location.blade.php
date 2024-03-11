@extends('backend.layouts.admin_master')
@section('title', 'edit map location')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Map Location</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-dark fw-bold lead d-inline">Manage Map Location</h3>&nbsp;&nbsp;&nbsp;
                                Last Updated: <button class="d-inline btn btn-primary">
                                    <marquee behavior="slow" direction="" class="d-block">
                                        {{ $map->updated_at->format('d-F-Y') }}
                                    </marquee>
                                </button>
                                <hr class=" text-info">
                                <form action="{{ route('update.location', $map->id) }}" method="post" id="myForm">
                                    @csrf
                                    @method('PUT')

                                    <div class="my-3 form-group">
                                        <label for="map_link">Map Location Address(Iframe link)</label>
                                        <textarea class="form-control" id="map_link" name="map_link" required  rows="10">{{ $map->map_link }}</textarea>
                                    </div>

                                    <div class="my-3">
                                        <button class="btn btn-info waves-effect waves-light" type="submit">Update
                                            Location</button>
                                    </div>
                            </div>
                            </form>
                            <div class="col-6">
                                {!! $map->map_link !!}
                            </div>
                        </div>

                    </div>
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
                    map_link: {
                        required: true,
                    },

                },
                messages: {
                    map_link: {
                        required: 'Please enter map address location link',
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
