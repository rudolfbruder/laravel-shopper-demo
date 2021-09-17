<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Shopper</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    @include('components.shared.navbar')
    <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-4 mt-8">
            <div>
                @include('components.products.card-one')
            </div>
            <div>
                @include('components.products.card-two')
            </div>
            <div>
                @include('components.products.card-three')
            </div>
        </div>
    </div>
</body>

<script src="{{ mix('/js/app.js') }}"></script>

</html>