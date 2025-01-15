@extends('layouts.default')

@section('mainContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$shoe->name}}</h4>
            <p class="card-text">Ez a cipő ${{$shoe->price}} USD dollárba kerül és {{$shoe->quantity}} darab van belőle.</p>
        </div>
    </div>
@endsection
