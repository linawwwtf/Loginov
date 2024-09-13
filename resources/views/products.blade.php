<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
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

</body>
</html>