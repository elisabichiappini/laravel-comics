<!--  estendo il layouts di main nel file principale-->
@extends ('layouts.main')

<!-- istanzio la sezione main della pagina welcome -->
@section('main')
    <!-- main: title + grid + button -->
    <section class="bg-dark py-3">
        <!-- title -->
        <div class="container">
            <h3 class="text-white text-uppercase py-1 px-3">{{ $elenco_film }}</h3>
        </div>
        <!-- /title -->
        <!-- grid -->
        <div id="grid-films" class="d-flex justify-content-center py-4 mb-0">
            <div class="container row d-flex">
                @foreach ($films as $film)
                <div class="col-2 pb-0 d-flex flex-column">
                    <img class="ec-img img-fluid" src="{{ $film['thumb'] }}" alt="{{ $film['title']}}">
                    <h6 class="text-uppercase text-white mt-2">{{ $film['series']}}</h6>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /grid -->
        <!-- button -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary rounded-0 px-5 text-uppercase">Load more</button>
        </div>
        <!-- /button -->
    </section>
    <!-- /main: title + grid + button -->
@endsection