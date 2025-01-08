@extends('layouts.default')

@section('mainContent')
    <h1>List of all our shoes.</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Limited</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($shoes as $item)
                    <tr class="">
                        <td scope="row">{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><input class="form-check-input" type="checkbox" @if ($item->limited == true) checked @endif
                                disabled /></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
