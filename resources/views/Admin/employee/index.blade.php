@extends('admin.layout.index')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .icon-bell:before {
            content: "\f0f3";
            font-family: FontAwesome;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 2rem;
        }

        .card-header {
            background: linear-gradient(135deg, #6f42c1, #007bff);
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
        }

        .breadcrumbs {
            background: #fff;
            padding: 0.75rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .breadcrumbs a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumbs i {
            color: #6c757d;
        }

        .table-responsive {
            margin-top: 1rem;
        }

        .table {
            margin-bottom: 0;
        }

        .table th,
        .table td {
            padding: 1rem;
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }

        .btn {
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .page-header {
            margin-bottom: 2rem;
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin-top: 1rem;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination .page-item:hover .page-link {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .pagination .page-item.active .page-link,
        .pagination .page-item .page-link {
            transition: all 0.3s ease;
        }
    </style>
    <div class="page-inner">
        <div class="page-header">
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Nhân viên</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Danh sách</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="text-align: center; color:white">Danh sách nhân viên</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="basic-datatables_length">

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <form action="{{ route('admin.staff.findByPhone') }}" method="GET">
                                            <div id="basic-datatables_filter" class="dataTables_filter"><label>Tìm
                                                    kiếm:<input type="text" name="phone"
                                                        class="form-control form-control-sm"
                                                        placeholder="Nhập số điện thoại"
                                                        aria-controls="basic-datatables"></label></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="basic-datatables"
                                            class="display table table-striped table-hover dataTable" role="grid"
                                            aria-describedby="basic-datatables_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="" tabindex="0" aria-controls="basic-datatables"
                                                        rowspan="1" colspan="1" style="width: 127.375px;">Tên </th>
                                                    <th class="" tabindex="0" aria-controls="basic-datatables"
                                                        rowspan="1" colspan="1" style="width: 180.125px;">Email </th>
                                                    <th class="" tabindex="0" aria-controls="basic-datatables"
                                                        rowspan="1" colspan="1" style="width: 100.1875px;">Số điện
                                                        thoại </th>
                                                    <th class="" tabindex="0" aria-controls="basic-datatables"
                                                        rowspan="1" colspan="1" style="width: 94.1875px;">Địa chỉ</th>
                                                    <th class="" tabindex="0" aria-controls="basic-datatables"
                                                        rowspan="1" colspan="1" style="width: 120.2656px;">
                                                    </th>
                                                </tr>
                                            </thead>

                                            @if ($user)
                                                <tbody>
                                                    @foreach ($user as $key => $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->phone ?? '' }}</td>
                                                            <td>{{ $item->address ?? '' }}</td>
                                                            <td style="display: flex;">
                                                                <a style="margin-right: 20px" class="btn btn-warning"
                                                                    href="{{ route('admin.staff.edit', ['id' => $item->id]) }}">Sửa</a>

                                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                                                    class="btn btn-danger"
                                                                    href="{{ route('admin.staff.delete', ['id' => $item->id]) }}">Xóa</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            @else
                                                <tr>
                                                    <td class="text-center" colspan="6">
                                                        <div class="">
                                                            Không có nhân viên
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        </table>
                                        {{ $user->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $.notify({
                    icon: 'icon-bell',
                    title: 'Nhân viên',
                    message: '{{ session('success') }}',
                }, {
                    type: 'secondary',
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                    time: 1000,
                });
            });
        </script>
    @endif
@endsection
