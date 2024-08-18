<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
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
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit">delete</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
               </tbody>
           </table>
       </div>
   </div>

</body>
</html>
