@extends('backend.layouts.admin_master')
@section('title', 'all tab group')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Tab Group </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }};">dashboard</a></li>
                            <li class="breadcrumb-item active">All</li>
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
                            <h3 class="text-dark fw-bold lead ">All Tab Group List &nbsp; <span
                                    class="btn btn-success shadow-lg">{{ count($alltab) }}</span></h3>
                            <<a href="{{ route('tab-group.create') }}"
                                class="btn btn-dark fw-bold btn-sm waves-effect waves-light">
                                Add
                                New Tab Group</a>
                        </div>
                        <hr class=" text-info">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Si</th>
                                    <th>Tab Group Name</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alltab as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>

                                        <td>{{ $item->tab_name }}</td>
                                        <td>
                                            {{ $item->created_at->format('d-M-Y') }}
                                        </td>
                                        <td style="width:20%">
                                            <a href="{{ route('tab-group.edit', $item->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>

                                            <form action="{{ route('tab-group.destroy', $item->id) }}" method="post"
                                                class=" d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm delete_btn" id="delete_btn"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $(document).on('click', '#delete_btn', function(event) {
                event.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>




@endsection
