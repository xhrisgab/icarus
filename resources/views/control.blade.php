@extends('layout.base')

@section('content')
    {{-- Body Control --}}
    <div class="container mt-4 p-2" style="background-color:rgb(5, 25, 38);" >
        <div class="row">
            <div class="col-3 content-justify-center">
                <h5 class='text-center' style="color: #F2B441">Puerto Serial:</h5>
                <select class="form-select mb-2" aria-label="Default select example" style="background-color:#F2B441; border-color: #F27244">
                    <option value="COM0" selected>COM 0</option>
                    <option value="COM1">COM 1</option>
                    <option value="COM2">COM 2</option>
                    <option value="COM3">COM 3</option>
                </select>
            </div>
            <div class="col-3 my-auto">
                {{-- <button style="border-color: #1F6A73; rounded:2%;">Conectar</button> --}}
                <button class="button1">Conectar</button>
            </div>
            <div class="col-3">
                <br>
            </div>
            <div class="col-3 mt-2 justify-content-end">
                <img src="{{asset('assets/img/logo2.png')}}" alt="Logo-Icarus" width="280" height="80">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="my-3" for="Logs" style="color: #F27244; font-weight: bold;">Estado - Logs</label>
                <div class="container" style="border: 2px solid #F27244; border-radius:5%; background:#F2B441;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quisquam asperiores est, tempore error explicabo, nihil nobis eos provident aliquam ut dicta illo temporibus eius doloremque sit laboriosam exercitationem rerum?</p>
                </div>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>

    </div>
@endsection
