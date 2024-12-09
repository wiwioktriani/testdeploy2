@extends('admin.layouts.layout')
@section('admin_title')
    Create Category
@endsection
@section('admin_layout')
    <div class="card-style mb-30">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form action="{{ route('store.cat') }}" method="POST">
            @csrf
            <h6 class="mb-25">Create Category</h6>
            <div class="input-style-1">
                <label for="category_name">Name of the Category</label>
                <input type="text" placeholder="Category Name" name="category_name">
            </div>
            <button type="submit" class="main-btn primary-btn-light btn-hover">Add Category</button>
        </form>
    </div>
@endsection
