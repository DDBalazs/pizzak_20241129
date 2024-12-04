@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <div class="alert alert-danger fs-2 w-75 mx-auto text-center">
        <p>
            Biztos szeretnéd törölni a(z) {{$result->nev}} pizzát?
        </p>
        <p>
            <a class="btn btn-danger" href="/exit/{{$result->id}}">Igen</a>
            <a class="btn btn-primary" href="/mod">Nem</a>
        </p>

    </div>
</div>
@endsection
