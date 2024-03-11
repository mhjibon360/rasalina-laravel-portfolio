@php
    $id = Auth::user()->id;
    $admin = App\Models\User::findOrFail($id);
@endphp
@extends('backend.layouts.admin_master')
@section('title', 'your admin profile')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        label.select_image {
            height: 100px;
            width: 310px;
            border: 1px dashed orangered;
            display: inline-block;
            text-align: center;
            line-height: 100px;
            font-weight: 700;
            font-size: 28px;
            cursor: pointer;
            color: tomato;
            transition: .8s all;
        }

        label.select_image:hover {
            border: 2px dashed tomato;
            transition: .8s all;
            text-transform: uppercase;

        }
    </style>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">your profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title font-bold">Your Profile</h4>
                        <hr class=" text-primary">
                        <table class=" table table-bordered">
                            <tr>
                                <td class=" text-center" colspan="2">
                                    @if ($admin->image)
                                        <img style="height: 100px;width:100px;" src="{{ asset($admin->image) }}"
                                            class="img-thumbnail img-fluid " alt="">
                                    @else
                                        <img style="height: 100px;width:100px;" src="{{ asset('no_image.jpg') }}"
                                            class="img-thumbnail img-fluid " alt="">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $admin->name }}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>{{ $admin->email }}</td>
                            </tr>
                            <tr>
                                <td>UserName</td>
                                <td>
                                    @if ($admin->username)
                                        {{ $admin->username }}
                                    @else
                                        <p class=" text-warning">no username found</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>UserName</td>
                                <td>
                                    @if ($admin->phone)
                                        {{ $admin->phone }}
                                    @else
                                        <p class=" text-warning">no phone number found</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Creatd Time</td>
                                <td>
                                    @if ($admin->created_at)
                                        {{ $admin->created_at->format('d-F-Y') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Updated Time</td>
                                <td>
                                    @if ($admin->created_at == $admin->updated_at)
                                        <p class=" text-dark">no update found</p>
                                    @else
                                        {{ $admin->updated_at->format('d-F-Y') }}
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Your Profoile Details</h4>
                                <hr>
                                <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $admin->id }}">
                                    <div class="row align-item-center">
                                        <div class="col-lg-9">
                                            <div class="row mb-3">
                                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" placeholder="enter name"
                                                        id="name" name="name" value="{{ $admin->name }}">
                                                </div>
                                            </div> <!--signle form item-->
                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-3 col-form-label">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="email" placeholder="enter email"
                                                        id="email" name="email" value="{{ $admin->email }}">
                                                </div>
                                            </div> <!--signle form item-->
                                            <div class="row mb-3">
                                                <label for="username" class="col-sm-3 col-form-label">UserName</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" placeholder="enter username"
                                                        id="username" name="username" value="{{ $admin->email }}">
                                                </div>
                                            </div> <!--signle form item-->
                                            <div class="row mb-3">
                                                <label for="phone" class="col-sm-3 col-form-label">Mobile</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="number" placeholder="enter phone"
                                                        id="phone" name="phone" value="{{ $admin->email }}">
                                                </div>
                                            </div> <!--signle form item-->
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-3 col-form-label">Profile</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control d-none input_image" type="file"
                                                        placeholder="enter image" id="image" name="image"
                                                        value="">
                                                    <label for="image" class=" select_image" id="">select
                                                        file</label>
                                                </div>
                                            </div> <!--signle form item-->
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('no_image.jpg') }}" id="show_image"
                                                class="show_image img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <button type="submit" class=" btn btn-info">Update profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>

        <!-- end row -->
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('change', '.input_image', function(e) {
                show_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>
@endsection
