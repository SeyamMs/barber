<div>
    @include('partials.hero')

    <section class="services">
        <h2>Onze diensten</h2>
        <div class="service-cards">
            @foreach ($services as $service)
                <div class="service-card">
                    <img src="{{ $service->image }}" alt="{{ $service->name }}" />
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->duration }} min.<br>{{ $service->price }} {{ $service->currency }}</p>
                    <a href="{{ route('bookings.create', $service) }}">Nu boeken</a>
                    {{-- <a href="{{ route('books.index') }}">Nu boeken</a> --}}
                </div>
            @endforeach
        </div>
    </section>
</div>
