@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Pizza módosítása</h1>
    <div class="card w-50 mx-auto">
        <div class="card-body">
            <form action="/modositas/{{ $result->id }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $result->id }}">
                <div class="py-2">
                    <label for="nev" class="form-label">Név:</label>
                    <input type="text" name="nev" id="nev" class="form-control" value="{{ old('nev', $result->nev) }}">
                    @error('nev')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="feltet" class="form-label">Feltétek:</label>
                    <input type="text" name="feltet" id="feltet" class="form-control" value="{{ old('feltet', $result->feltet) }}">
                    @error('feltet')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="ar" class="form-label">Ár:</label>
                    <input type="number" name="ar" id="ar" class="form-control" min="0" value="{{ old('ar', $result->ar) }}">
                    @error('ar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <input type="checkbox" name="akcios" id="akcios" class="form-check-input" @if($result->akcios == 1) checked @endif>
                    <label for="akcios" class="form-check-label">Akciós</label>
                </div>
                <button class="btn btn-primary mt-2" type="submit">Elküld</button>
            </form>
        </div>
    </div>

</div>
@endsection