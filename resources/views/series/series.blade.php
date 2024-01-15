@extends('layouts.app')

@section('comics')
<section class="series">

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                
            <div class="col">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span class="title">{{ $comic['series'] }}</span>
            </div>

            @endforeach
        </div>

        <button class="loader">
            Load More
        </button>
    </div>

</section>
@endsection