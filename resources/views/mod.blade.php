@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Pizzák módosítása</h1>
    <table class="table table-striped">
        <tr>
            <th>Név</th>
            <th>Feltét</th>
            <th>24 cm</th>
            <th>32 cm</th>
            <th>45 cm</th>
            <th>Módosítás</th>
            <th>Törlés</th>
        </tr>
        @foreach ($result as $all)
        <tr>
            <td>{{ $all->nev }}</td>
            <td>{{ $all->feltet }}</td>
            <td>
                @if ($all->akcios == 1)
                <span class="text-danger"><b>{{ $all->ar*0.9 }} Ft</b></span>
                @else
                {{ $all->ar }} Ft
                @endif
            </td>
            <td>
                @if ($all->akcios == 1)
                <span class="text-danger"><b>{{ $all->ar*0.9*1.25 }} Ft</b></span>
                @else
                {{ $all->ar*1.25 }} Ft
                @endif
            </td>
            <td>
                @if ($all->akcios == 1)
                    <span class="text-danger"><b>{{ $all->ar*0.9*1.50 }} Ft</b></span>
                @else
                    {{ $all->ar*1.50 }} Ft
                @endif
            </td>
            <td><a href="/modositas/{{ $all->id }}">Módosítás</a></td>
            <td><a href="/torles/{{ $all->id }}">Törlés</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
