@extends('pastellayout')

@section('tartalom')
<div>
    <ol>
        @foreach ($bevasarlolista as $listaelem)
            <li>{{ $listaelem }}</li>
        @endforeach
    </ol>
</div>
@endsection

@section('cim')
Bevásárlólista
@endsection
