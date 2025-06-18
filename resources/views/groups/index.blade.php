<h1>Estou na view index de verdade</h1>

    @foreach ($groups as $group)
        <p>{{ $group['name'] }}</p>
    @endforeach