<div class="col-md-4">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">Стоимость: {{ number_format($product['cost'], 0, ',', ' ') }} руб.</p>
            <p class="card-text">Количество: {{ $product['amount'] }}</p>
        </div>
    </div>
</div>