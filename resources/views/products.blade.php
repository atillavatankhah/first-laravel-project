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
    <form action="/create" method="post">
        @csrf
        <div>
           <div class="">
               <input type="text">
           </div>

            <div class="">
                <input name="title" type="text">
            </div> <div class="">
                <input name="price" type="text">
            </div> <div class="">
                <input name="discount" type="text">
            </div> <div class="">
                <input name="description" type="text">
            </div>
            <div class="">
                <input name="photo" type="file">
            </div> <div class="">
        </div>
        <button type="submit">save</button>
    </form>
</body>
</html
