@extends('layouts.default')

@section('mainContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $shoe->name }}</h4>
            <p class="card-text">Ez a cipő ${{ $shoe->price }} USD dollárba kerül és {{ $shoe->quantity }} darab van belőle.
            </p>
        </div>
    </div>

    <div class="row">
        @if (isset($shoe->reviews) == false || empty($shoe->reviews))
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Ehhez a cipőhöz nem található értékelés</p>
                </div>
            </div>
        @else
            @foreach ($shoe->reviews as $review)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$review->user->name}}</h4>
                        <p class="card-text">{{ $review->content }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
