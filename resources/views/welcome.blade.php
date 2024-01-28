<!--  estendo il layouts di main nel file principale-->
@extends ('layouts.main')

<!-- istanzio la sezione main della pagina welcome -->
@section('main')
    <section>
        <h2>{{ $elenco_film }}</h2>
        <ul>
        @foreach ($films as $film)
        <li>{{ $film['title'] }} - {{ $film['type'] }}</li>
        @endforeach
        </ul>
    </section>
@endsection