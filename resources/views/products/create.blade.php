<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>products</h1>
<form action="/products" method="post">
    @csrf

        <div class="">
            <input name="title" type="text">
            <br>
            <small>@error('title') {{$message}} @enderror</small>
        </div>
        <div class="">
            <input name="price" type="text">
            <br>
            <small>@error('price') {{$message}} @enderror</small>
        </div>
        <div class="">
            <input name="discount" type="text">
            <br>
            <small>@error('discount') {{$message}} @enderror</small>
        </div>
        <div class="">
            <input name="description" type="text">
            <br>
            <small>@error('description') {{$message}} @enderror</small>
        </div>
        <div class="">
            <input name="photo" type="file">
            <br>
            <small>@error('photo') {{$message}} @enderror</small>
        </div>
        <button type="submit">save</button>
</form>
</body>
</html>
