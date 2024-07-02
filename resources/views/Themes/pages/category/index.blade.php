@extends('Themes.layouts.app')
@section('content')
    <style>
        .btn-fixed-width {
            width: 100px;
            /* Set your desired width */
        }
    </style>
    <div class="container">

        <div class="table-responsive table-card mt-100 mb-100">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row d-flex justify-content-end">
                <div class=" d-flex justify-content-end mb-2">
                    <div class="dropdown">

                        <button class="dropbtn"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M8.25 3a.5.5 0 0 1 .5.5v3.75h3.75a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-.5.5H8.75v3.75a.5.5 0 0 1-.5.5h-.5a.5.5 0 0 1-.5-.5V8.75H3.5a.5.5 0 0 1-.5-.5v-.5a.5.5 0 0 1 .5-.5h3.75V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>Thêm mới</button>
                        <div class="dropdown-content">
                            <p id="openModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M8.25 3a.5.5 0 0 1 .5.5v3.75h3.75a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-.5.5H8.75v3.75a.5.5 0 0 1-.5.5h-.5a.5.5 0 0 1-.5-.5V8.75H3.5a.5.5 0 0 1-.5-.5v-.5a.5.5 0 0 1 .5-.5h3.75V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                Thêm danh mục
                            </p>
                            <!-- Modal -->
                            <div id="myModal" class="modal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="varyingcontentModalLabel">Thêm danh mục</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.category.store') }}" method="POST" id="submitform"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">Tên danh mục:</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="col-form-label">Mô tả:</label>
                                                    <textarea required class="form-control" name="description" id="description" rows="4"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <p id="openModalProduct">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M8.25 3a.5.5 0 0 1 .5.5v3.75h3.75a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-.5.5H8.75v3.75a.5.5 0 0 1-.5.5h-.5a.5.5 0 0 1-.5-.5V8.75H3.5a.5.5 0 0 1-.5-.5v-.5a.5.5 0 0 1 .5-.5h3.75V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>Thêm sản phẩm
                            </p>
                            <div id="myModalProduct" class="modal" class="modal fade">
                                <div class="modal-dialog modal-dialog-centered"style="max-width: 1000px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="varyingcontentModalLabelProduct">Thêm sản phẩm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Mã hàng</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Tên
                                                                hàng</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Nhóm
                                                                hàng</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Thương hiệu
                                                                hàng</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="formFileSm" class="form-label">Small file input
                                                                example</label>
                                                            <input class="form-control form-control-sm" id="formFileSm"
                                                                type="file">
                                                        </div>
                                                        <div class="mt-2">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Giá
                                                                vốn</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Giá
                                                                bán</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Tồn
                                                                kho</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Trọng
                                                                lượng</label>
                                                            <input type="password" class="form-control"
                                                                id="placeholderInput" placeholder="Placeholder">
                                                        </div>
                                                        <div>
                                                            <input type="checkbox">Bán trực tiếp
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Xuất file</button>
                    </div>
                </div>
            </div>

            <table class="table table-nowrap table-striped-columns mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                <label class="form-check-label" for="cardtableCheck"></label>
                            </div>
                        </th>
                        <th scope="col">Mã danh mục</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="cardtableCheck{{ $loop->index }}">
                                    <label class="form-check-label" for="cardtableCheck{{ $loop->index }}"></label>
                                </div>
                            </td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ route('admin.category.detail', ['id' => $item->id]) }}">Sửa</a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" type="button"
                                    class="btn btn-sm btn-danger btn-fixed-width"
                                    href="{{ route('admin.category.delete', ['id' => $item->id]) }}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        var modal = document.getElementById("myModal");
        var openModal = document.getElementById("openModal");

        openModal.onclick = function() {
            modal.style.display = "block";
        }


        var closeModal = document.querySelector("#myModal .btn-close");

        closeModal.onclick = function() {
            modal.style.display = "none";
        }


        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        var modalProduct = document.getElementById("myModalProduct");
        var openModalProduct = document.getElementById("openModalProduct");

        openModalProduct.onclick = function() {
            modalProduct.style.display = "block";
        }

        var closeModalProduct = document.querySelector("#myModalProduct .btn-close");

        closeModalProduct.onclick = function() {
            modalProduct.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modalProduct) {
                modalProduct.style.display = "none";
            }
        }
        CKEDITOR.replace('description');
    </script>
@endsection