@extends('layouts.app')
@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header ">
        <h3 class="card-title">Edit ({{$cast->id}}) </h3>
        
      </div>
      
      <div class="card-body">
        <form method="POST" action="/cast/{{$cast->id}}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-9">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                    placeholder="name" name="name" value="{{ $cast->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="umur" class="col-md-2 col-form-label text-md-right">{{ __('Umur') }}</label>

                <div class="col-md-9">
                    <input id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" 
                    placeholder="umur" name="umur" value="{{ $cast->umur }}" required autocomplete="umur" autofocus>

                    @error('umur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="bio" class="col-md-2 col-form-label text-md-right">{{ __('Bio') }}</label>

                <div class="col-md-9">
                    <textarea id="bio" type="number" class="form-control @error('bio') is-invalid @enderror" 
                    placeholder="bio" name="bio" required autocomplete="bio" autofocus>{{ $cast->bio }}</textarea>

                    @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <center>
        <button type="submit" class="btn btn-primary">{{ __('Save') }} </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </center>
        </form>
      </div>
    </div>

</div>
</div>
  
@endsection