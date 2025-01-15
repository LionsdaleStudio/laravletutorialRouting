@extends('layouts.default')

@section('mainContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit shoes</h4>
            <p class="card-text">Fields marked with * must be filled.</p>

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


            {{-- Error kezelés az összes inputra --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Hiba!</strong> Correct your mistakes
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                <script>
                    var alertList = document.querySelectorAll(".alert");
                    alertList.forEach(function(alert) {
                        new bootstrap.Alert(alert);
                    });
                </script>
            @endif
            {{-- Error kezelés az összes inputra vége --}}

            <form action="{{ route('shoes.update', $shoe->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input value="{{ old('name', $shoe->name) }}" type="text" class="form-control" name="name"
                        id="name" placeholder="" @if ($errors->has('name')) style="border-color: red;" @endif />
                    <label for="name">Name</label>
                    {{-- Error kezelés egy inputra --}}
                    @error('name')
                        <li>There is an error: {{ $message }}</li>
                    @enderror
                </div>

                {{-- Error kezelés vége --}}
                <div class="form-floating mb-3">
                    <input value="{{ old('price', $shoe->price) }}" type="number" class="form-control" name="price"
                        id="price" step=".01" placeholder="" />
                    <label for="price">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input value="{{ old('quantity', $shoe->quantity) }}" type="number" class="form-control"
                        name="quantity" id="quantity" step="1" placeholder="" />
                    <label for="quantity">Quantity</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="limited">Limited</label>
                    <input class="form-check-input" type="checkbox" value="1" id="limited" name="limited"
                        @if ($shoe->limited == true) checked @endif />
                </div>
                <button type="submit" class="btn btn-warning" name="submit" type="submit" id="submit">
                    Apply Changes
                </button>
            </form>
        </div>
    </div>
@endsection
