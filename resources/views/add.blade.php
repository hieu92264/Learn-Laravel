@extends('layouts.app')
@section('contents')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Thêm Sinh Viên</h3>
                    </div>
                    <div class="card-body">
                        <div class="notify-errors">
                            @if ($errors->any())
                                <div class="alert alert-danger text-center">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Tên sinh viên:</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Mời nhập tên">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-md-4 col-form-label text-md-right">Lớp:</label>
                                <div class="col-md-6">
                                    <input type="text" id="class" name="class" class="form-control"
                                        placeholder="Mời nhập lớp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Mời nhập email">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Thêm
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
