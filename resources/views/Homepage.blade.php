@extends('layouts.Frontend')
@section('content')
<div class="col-lg-5 mx-auto">
  <div class="card mt-5">
    <div class="card-header">Add Toso</div>
    <div class="card-body">
      <form action="{{ route('store')}}" method="POST">
        @csrf
        <input name='title' type="text" class="form-control my-2 @error('title') is-invalid  @enderror" placeholder="Todo Title">
        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <textarea name="detail" id="" placeholder="Todo Detail" class="form-control my-2 @error('detail') is-invalid  @enderror" ></textarea>
        @error('detail')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <input name='author' type="text" class="form-control my-2 @error('author') is-invalid  @enderror" placeholder="Author">
        <label for="">publish Date</label>
        <input type="date" class="form-control my-2 @error('date') is-invalid  @enderror" name='date'>
        <button class="btn w-100 btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>


@endsection