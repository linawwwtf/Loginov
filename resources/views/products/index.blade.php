<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Продукты</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                Цена: {{ $product->cost }}<br>
                Количество: {{ $product->amount }}
            </li>
        @endforeach
    </ul>
</body>
</html>