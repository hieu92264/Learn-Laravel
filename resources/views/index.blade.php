@extends('layouts.app')
@section('contents')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Quản lý thông tin sinh viên</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($infor) && count($infor) > 0)
                        @foreach ($infor as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ url('/infor/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <a href="{{ url('/infor/add') }}" class="btn btn-primary">Thêm thông tin sinh viên</a>
        </div>

    </div>
@endsection
