@extends('layout.base')

@section('content')
    {{-- Body Control --}}
    <div class="container mt-4">
        <div class="row">
            <h5>Puerto Serial:</h5>
            <div class="col-md-4">
                <select class="form-select mb-2" aria-label="Default select example">
                    <option value="COM0" selected>COM 0</option>
                    <option value="COM1">COM 1</option>
                    <option value="COM2">COM 2</option>
                    <option value="COM3">COM 3</option>
                </select>
                <button class="btn btn-warning col">Test</button>
                <button class="btn btn-success col">Conectar</button>
            </div>

            <h5></h5>
        </div>

    </div>
@endsection
