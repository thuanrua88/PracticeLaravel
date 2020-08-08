@extends('layouts.app')
@section('content')
    @if(isset($product))
            @foreach($product as $product)
                @csrf
                Name: {{ $product->name }} <br>
                Description: {{ $product->description }} <br>
                Price: {{ $product->price }} <br>
                <a href="{{url('edit')}}/{{ $product->id }}"><button>edit</button></a>
                <a href="{{url('delete')}}/{{ $product->id }}"><button>delete</button></a>
                <br><br>
            @endforeach
    @endif
    <a href="{{ route('home') }}"><button>back</button></a>
@endsection
