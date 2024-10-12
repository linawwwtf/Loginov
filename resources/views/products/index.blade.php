<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
            @component('components.product-card', ['product' => $product])
            @endcomponent
        @endforeach
    </div>
</div>

=======
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
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
</body>
</html>