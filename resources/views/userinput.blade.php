@extends('pastellayout')

@section('tartalom')
<div>
    Ezt adta meg a felhasználó: {!! $input !!}
</div>
<p>Vezetéknév: {{ $vnev }}</p>
<p>Keresztnév: {{ $knev }}</p>
@endsection

@section('cim')
Felhasználói adatok
@endsection
