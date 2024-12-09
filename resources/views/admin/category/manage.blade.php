
@extends('admin.layouts.layout')
@section('admin_title')
    Manage Category
@endsection
@section('admin_layout')
    <div class="card-style mb-30">
            <h6 class="mb-25">Manage Category</h6>
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
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>ID</h6>
                        </th>
                        <th>
                          <h6>Category name</h6>
                        </th>
                        <th>
                          <h6>Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                        <tr>
                            <td>
                              <p>{{$cat->id}}</p>
                            </td>
                            <td >
                                <p>{{$cat->category_name}}</p>
                            </td>
                            <td>
                              <div class="action">
                                <a href="{{ route('show.cat', $cat->id) }}" class="btn btn-info me-2 text-white">
                                    Edit
                                </a>
                                <button class="text-danger">
                                    <form action="{{ route('delete.cat', $cat->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

    </div>
@endsection
