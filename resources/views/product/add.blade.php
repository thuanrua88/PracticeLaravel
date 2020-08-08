@extends('layouts.app')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        Name: <input type="text" name="name"><br>
        Description: <input type="text" name="description" ><br>
        Price: <input type="number" name="price" ><br>
        <button>Submit</button><br>
    </form>
    <a href="{{ route('home') }}"><button>back</button></a>
@endsection
