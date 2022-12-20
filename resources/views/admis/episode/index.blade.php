@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="" class="btn btn-success btn-sm">Thêm mới</a>
                <div class="card">
                    <h4 class="alert alert-success text-center mt-2">Danh sách Tập phim</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">link phim</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th scope="row">sadsd</th>
                                <th scope="row">dasdsd</th>
                                <th scope="row">
                                    <p>sua</p>
                                    <p>xoa</p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
