<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Цена: {{ $product->cost }}</p>
    <p>Количество: {{$product->amount}}</p>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form action="{{ route('product.order', $product->id) }}" method="POST">
        @csrf
        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1" required>
        @error('quantity')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Заказать</button>
    </form>
</body>
</html>