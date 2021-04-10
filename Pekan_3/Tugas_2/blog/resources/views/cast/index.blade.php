@extends('layouts.app')
@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header ">
        <h3 class="card-title">Bordered Table</h3>
        
        <!-- Button trigger modal -->
        <div class="card-tools">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
            </button>
        </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
      @elseif ($message = Session::get('edit'))
      <div class="alert alert-primary alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
      @elseif ($message = Session::get('hapus'))
      <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
      @endif
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>name</th>
              <th style="width: 40px">umur</th>
              <th >Bio</th>
              <th style="width: 200px">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($cast as $item)
                <tr>
                    <td></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->umur}}</td>
                    <td>{{$item->bio}}</td>
                    <td style="display: flex"><a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">show</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                    <form action="/cast/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>

</div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cast</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/cast">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                        placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-md-4 col-form-label text-md-right">{{ __('Umur') }}</label>

                    <div class="col-md-7">
                        <input id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" 
                        placeholder="umur" name="umur" value="{{ old('umur') }}" required autocomplete="umur" autofocus>

                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>

                    <div class="col-md-7">
                        <textarea id="bio" type="number" class="form-control @error('bio') is-invalid @enderror" 
                        placeholder="bio" name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus></textarea>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">{{ __('Save') }} </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection