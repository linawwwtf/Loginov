<div class="col-md-4">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">Стоимость: {{ number_format($product['cost'], 0, ',', ' ') }} руб.</p>
            <p class="card-text">Количество: {{ $product['amount'] }}</p>
<<<<<<< HEAD
            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-primary">Заказать</a>
=======
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
        </div>
    </div>
</div>