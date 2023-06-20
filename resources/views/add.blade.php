@extends('layout.main')

@section('section')

<div>
<h1 m-5>Add product</h1>
<a class="btn btn-primary" href="{{route('list')}}" role="button">Back</a>
</div>
<form class="row g-3" action="{{route('craeteProduct')}}" method="post">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">name</label>
      <input type="text" class="form-control" name="name" id="inputEmail4">
    </div>
   
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">type</label>
        <input type="text" class="form-control" name="type" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">url</label>
        <input type="text" class="form-control" name="url" id="inputEmail4">
      </div>
   
   
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection