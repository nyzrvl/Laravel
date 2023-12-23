@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
      </div>

      @if(session()->has('succes'))
      <div class="alert alert-success" role="alert">
       {{ session('succes') }}
      </div>
      @endif

      <div class="table-responsive small">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info bi bi-eye text-white"><span data-feather="eye-off"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning  bi bi-pencil-square text-white"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0 bi bi-x-circle text-white" onclick="return confirm('Are you sure?')"><span data-feather="bi bi-x-circle"></button>
                </form>
              </td>
              <td>text</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection