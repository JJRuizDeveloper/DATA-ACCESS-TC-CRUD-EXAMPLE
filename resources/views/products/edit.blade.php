<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product: {{$product->name}}</h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $product->name }}" />
        <input type="submit" value="Update" />
    </form>
</body>
</html>