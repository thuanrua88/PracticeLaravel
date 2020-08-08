@extends('layouts.app')
@section('content')
@if(isset($products))
    @foreach($products as $product)
        Name: {{ $product->name }} <br>
        Description: {{ $product->description }} <br>
        Price: {{ $product->price }} <br>
        <a href="{{url('edit')}}/{{ $product->id }}"><button>edit</button></a>
        <a href="{{url('delete')}}/{{ $product->id }}"><button>delete</button></a>
        <br><br>
    @endforeach
@endif
@endsection
