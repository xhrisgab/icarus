@extends('layout.base')

@section('content')
    {{-- Body Control --}}
    <div class="container-fluid mt-4 p-5" style="background-color:#051926;" >
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

        <div class="row mt-3">
            <div class="col-3">
                <label class="my-3" for="Logs" style="color: #F27244; font-weight: bold;">Estado - Logs</label>
                <div class="container my-auto" style="border: 2px solid #F27244; border-radius:20px; background:#F2B441;">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F27244; font-weight: bold;">Acelerometro</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #F27244; border-radius:20px; background:#F2B441;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label1 text-center px-2 py-1">X</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="20.51" disabled>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="Y" class="label1 text-center px-2 py-1">Y</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="0.15" disabled>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="Z" class="label1 text-center px-2 py-1">Z</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="10.48" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F27244; font-weight: bold;">Giroscopio</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #F27244; border-radius:20px; background:#F2B441;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label1 text-center px-2 py-1">X</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="4.58" disabled>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="Y" class="label1 text-center px-2 py-1">Y</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="20.47" disabled>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="Z" class="label1 text-center px-2 py-1">Z</label>
                        </div>
                        <div class="col-8">
                            <input class="text1 text-center py-1" type="text" value="2.36" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <div class="row justify-content-between">
                    <div class="col tfecha">
                        <h6>Hora sistema</h6>
                        <h6>Fecha sistema</h6>
                    </div>
                    <div class="col tfecha text-end">
                        <h6>{{ date('h:i a') }}</h6>
                        <h6>{{ date('d.M.Y') }}</h6>
                    </div>
                </div>

                <div class="text-center">
                    <h5 class="" style="color: #F27244;">Bateria</h5>
                    <circle-progress class="circle-progress circle-progress-value circle-progress-circle circle-progress-text" value="75" max="100" anticlockwise='true' ></circle-progress>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-3">
                <div class="row content-justify-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F2B441; font-weight: bold;">Temperatura</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #1F6A73; border-radius:20px; background:#1F6A73;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label2 text-center px-2 py-1">K</label>
                        </div>
                        <div class="col-8">
                            <input class="text2 text-center py-1" type="text" value="20.51" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row content-justify-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F2B441; font-weight: bold;">Presion</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #1F6A73; border-radius:20px; background:#1F6A73;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label2 text-center px-2 py-1">atm</label>
                        </div>
                        <div class="col-8">
                            <input class="text2 text-center py-1" type="text" value="0.98" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row content-justify-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F2B441; font-weight: bold;">CO2</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #1F6A73; border-radius:20px; background:#1F6A73;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label2 text-center px-2 py-1">ppm</label>
                        </div>
                        <div class="col-8">
                            <input class="text2 text-center py-1" type="text" value="2.35" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row content-justify-between">
                    <div class="col-6">
                        <label class="my-3" for="Logs" style="color: #F2B441; font-weight: bold;">Altitud</label>
                    </div>
                    <div class="col-6 my-auto">
                        <button class="button2" >Ver detalles</button>
                    </div>
                </div>
                <div class="container" style="border: 2px solid #1F6A73; border-radius:20px; background:#1F6A73;">
                    <div class="row py-2 justify-content-center">
                        <div class="col-2">
                            <label for="X" class="label2 text-center px-2 py-1">m</label>
                        </div>
                        <div class="col-8">
                            <input class="text2 text-center py-1" type="text" value="238.50" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
@endsection
