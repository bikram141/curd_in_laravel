@extends('layout.main')

@section('section')

<div>
    <a class="btn btn-dark" href="{{url('/')}}" role="button">Back</a>
<h1 m-5> product list</h1>
<a class="btn btn-primary" href="{{route('addProduct')}}" role="button">add product</a>
</div>
@include('layout.alert_msg')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">type</th>
        <th scope="col">url</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @if($product->count() >0 )
        @foreach($product as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->type}}</td>
        <td>{{$item->url}}</td>
        <td><a class="btn btn-success" href="{{route('editProduct',$item->id)}}" role="button">edit</a>
        <form action="{{route('deleteProduct',$item->id)}}" method="post">
            <button type="submit" class="btn btn-danger">delete</button>
            {!! method_field('delete') !!}
            {!! csrf_field() !!}
        </form>
        </td>
      </tr>
     @endforeach
     @else
     <td>
<h6>no data is available</h6></td>
     @endif
    
    </tbody>
  </table>
@endsection