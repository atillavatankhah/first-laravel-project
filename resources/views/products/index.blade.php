@extends('app.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">all products saved</h1>
        <div class="text-center">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">DISCOUNT</th>
                    <th scope="col">PHOTO</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}}</td>
                        <td>{{$product->photo}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <form action="{{route('products.destroy',$product)}}" method="post">
                                @csrf
                                    <a class="btn btn-info" type="button" href="{{route('products.edit',$product)}}">Edit</a>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
