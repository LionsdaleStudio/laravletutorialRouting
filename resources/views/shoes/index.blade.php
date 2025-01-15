@extends('layouts.default')

@section('mainContent')
    <h1>List of all our shoes.</h1>

    {{-- SUCCESS KEZELÉS --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Success!</strong> {{ session()->get('success') }}
        </div>
        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert);
            });
        </script>
    @endif
    {{-- SUCCESS KEZELÉS VÉGE --}}

    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr >
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Limited</th>
                    <th scope="col" colspan="3">Actions</th>
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
                        <td>
                            <form action="{{ route('shoes.edit', $item->id) }}" method="GET">
                                <button class="btn btn-warning">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('shoes.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('shoes.show', $item->id) }}" method="GET">
                                @csrf
                                <button class="btn btn-info">Show</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
