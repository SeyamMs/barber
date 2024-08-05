<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept FAYA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    @include('partials.header')

    @include('partials.hero')

    <section class="services">
        <h2>Onze diensten</h2>
        <div class="service-cards">
            @foreach ($services as $service)
                <div class="service-card">
                    <img src="{{ $service->image }}" alt="Student">
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->duration }} min.<br>{{ $service->price }} {{ $service->currency }}</p>
                    <a href="{{ route('books.show', $service->id) }}">Nu boeken</a>
                    <a href="{{ route('books.index') }}">Nu boeken</a>
                </div>
            @endforeach
        </div>
    </section>


    @include('partials.footer')
</body>

</html>
