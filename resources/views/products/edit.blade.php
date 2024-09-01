@extends('app.master')
@section('content')
    <h1 class="text-center">Edit products</h1>
    <div class="container text-center">
        <form action="/products" method="post">
            @csrf

            <div class="">
                <input name="title" type="text" placeholder="Title">
                <br>
                <small class="text-danger"> @error('title') {{$message}} @enderror</small>
            </div>
            <div class="">
                <input name="price" type="text" placeholder="price">
                <br>
                <small class="text-danger"> @error('price') {{$message}} @enderror</small>
            </div>
            <div class="">
                <input name="discount" type="text" placeholder="discount">
                <br>
                <small class="text-danger">@error('discount') {{$message}} @enderror</small>
            </div>
            <div class="">
                <input name="description" type="text" placeholder="description">
                <br>
                <small class="text-danger">@error('description') {{$message}} @enderror</small>
            </div>
            <div class="">
                <input name="photo" type="file">
                <br>
                <small class="text-danger">@error('photo') {{$message}} @enderror</small>
            </div>
            <button type="submit">save</button>
        </form>

    </div>
@endsection
