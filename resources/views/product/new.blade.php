@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input name="price" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
