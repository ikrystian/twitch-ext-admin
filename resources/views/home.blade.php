@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <form action="/home" method="post">
              @csrf
              <div class="form-group">
                <label for="code">Kod obrazka</label>
                <input type="text" name="code" id="code" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="url">Url obrazka</label>
                <input type="text" name="url" id="url" class="form-control" required>
              </div>
              <div class="form-footer form-group">
                <button class="btn btn-primary">Dodaj</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
