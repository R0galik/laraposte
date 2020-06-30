@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" id="create-paste-form" >
            @csrf
            <div>Name Paste </div>
            <input type="text" name="name">
            <br>
            <br>
            <div>Paste</div>
            <textarea id="paste" type="text" class="form-control
            @error('paste') is-invalid @enderror" name="paste"
                      value="{{ old('paste') }}"></textarea>
            @error('paste')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </form>
        <br>
        <p><button type="submit" class="btn btn-success" form="create-paste-form">
                Create
            </button></p>
    </div>
@endsection
