@extends('admin.layouts.layout')
@section('admin_title')
    Edit Category
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
        <form action="{{ route('update.cat', $category_info->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h6 class="mb-25">Edit Category</h6>
            <div class="input-style-1">
                <label>Name of the Category</label>
                <input type="text" placeholder="Full Name" name="category_name" value="{{$category_info->category_name}}">
            </div>
            <button type="submit" class="main-btn primary-btn-light btn-hover">Edit Category</button>
        </form>
    </div>
@endsection
