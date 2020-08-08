@extends('layouts.app')
@section('content')
    <form action="{{ url('find') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="text" placeholder="tìm kiếm" name="find">
        <button>Tìm kiếm</button>
    </form>
    <a href="{{ route('add') }}"><button>Add new</button></a><br>
@endsection
