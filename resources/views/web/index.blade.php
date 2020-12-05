@extends('layouts.web')
@section('slider')
    @include('web.partials.slider')
@endsection
@section('contenido')
    <div class="row m-0 ">
        <section class="col-9 bg-success text-white" style="height:500px">
            <div class="row pt-3 justify-content-center ">
                <div class="col-3 mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>

                <div class="col-3  mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>

                <div class="col-3  mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>
            </div>

            <div class="row pt-3 justify-content-center">
                <div class="col-3 mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>

                <div class="col-3  mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>

                <div class="col-3  mr-2 bg-primary d-flex justify-content-center align-items-center" style="height:200px">
                    CATEGORIA
                </div>
            </div>

            
        </section>
        <aside class="col-3 bg-secondary d-flex justify-content-center align-items-center text-white" style="height:500px">
            ASIDE
        </aside>
    </div>
@endsection