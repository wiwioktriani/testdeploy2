@extends('admin.layouts.layout')
@section('admin_title')
    Create Sub Category
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
        <form action="{{ route('store.subcat') }}" method="POST">
            @csrf
            <h6 class="mb-25">Create Sub Category</h6>
            <div class="input-style-1">
                <label for="subcategory_name">Name of the Sub Category</label>
                <input type="text" placeholder="Sub category Name" name="subcategory_name">

            </div>
            <div class="select-style-1">
                <label for="category_id">Name of the Category</label>
                <div class="select-position">
                    <select name="category_id" id="category_id">
                        @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
            <button type="submit" class="main-btn primary-btn-light btn-hover">Add Sub Category</button>
        </form>
    </div>
@endsection
