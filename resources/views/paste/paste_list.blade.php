@extends('layouts.app')

@section('content')
        <div class="container">
            @foreach( $PASTES->all() as $item )
                <a href="/paste/{{ $item->id }}">Паста номер {{ $item->id }}</a>
                <br/>
            @endforeach
            <br/>
            @for($i = 1; $i < $PASTES->total(); $i++)
                <a href="/paste?page={{$i}}">{{$i}}</a>
            @endfor
        </div>
@endsection
