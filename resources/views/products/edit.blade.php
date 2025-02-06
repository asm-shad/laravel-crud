<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        input::placeholder {
            color: #999;
        }
    </style>
</head>
<body>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($error->all() as $error)
                <li>{{$error}}</li>            
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method("put")
        <h1>Edit a Product</h1>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="qty">Qty:</label>
            <input type="text" id="qty" name="qty" placeholder="Enter Quantity"  value="{{$product->qty}}">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" placeholder="Enter Price"  value="{{$product->price}}">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" placeholder="Enter Description"  value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update a new Product">
        </div>
    </form>
</body>
</html>