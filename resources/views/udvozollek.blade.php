@extends('pastellayout')

@section('tartalom')
<div>Hi, {{ $nev }}</div>
<div>Ennyi éves vagy: {{ $kor }}</div>
@endsection

@section('cim')
Üdvözlés
@endsection
