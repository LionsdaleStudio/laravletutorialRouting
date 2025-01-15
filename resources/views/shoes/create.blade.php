@extends('layouts.default')

@section('mainContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add new shoes</h4>
            <p class="card-text">Fields marked with * must be filled.</p>
            <form action="{{ route('shoes.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="" />
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="price" id="price" step=".01"
                        placeholder="" />
                    <label for="price">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="quantity" id="quantity" step="1"
                        placeholder="" />
                    <label for="quantity">Quantity</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="limited">Limited</label>
                    <input class="form-check-input" type="checkbox" value="true" id="limited" name="limited" />
                </div>
                <button type="submit" class="btn btn-primary" name="submit" type="submit" id="submit">
                    Add new shoes
                </button>
            </form>
        </div>
    </div>
@endsection
