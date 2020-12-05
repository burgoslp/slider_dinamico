@extends('layouts.admin')
@include('panel.partials.formcreateslider')
@include('panel.partials.modalshowimg')
@include('panel.partials.formeditslider')
@section('contenido')
    <div class="row">
        <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slider_all as $slider)
                        <tr>
                            <th scope="row">{{$slider->id}}</th>
                            <td>@if($slider->titulo) {{$slider->titulo}} @else N/A @endif</td>
                            <td>@if($slider->descripcion) {{$slider->descripcion}} @else N/A @endif</td>
                            <td><button class="btn btn-success" data-toggle="modal" onclick="showSliderImg({{$slider->id}})" data-target=".modalshowimg">Vizualizar</button></td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" onclick="showSliderAll({{$slider->id}})" data-target=".modalformeditslider">Editar</button>
                                <form action="{{url('/Admin/slider/'.$slider->id)}}" class="d-inline"  method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
@section('script')
<script src="{{asset('js/jquery.js')}}"></script>
<script>
function showSliderImg(id){

    let uri="{{url('/Admin/slider/show/')}}/"+id;
    
    $.ajax({

        type:"GET",
        url:uri,
        success:function(msj){

            let img=msj[0].img;
            let asset='{{asset("images/slider")}}/'+img;
            let html=`<img src="${asset}" width="100%">`;

            $("#modalshowimg-body").empty().append(html);
        }
    });

}
function showSliderAll(id){

    let uri="{{url('/Admin/slider/showall/')}}/"+id;
    
    $.ajax({

        type:"GET",
        url:uri,
        success:function(msj){

            let titulo = msj.titulo;
            let descripcion =msj.descripcion;
            let idslider =msj.id;


            $("#formeditslider input[name='titulo']").attr("value",titulo);
            $("#formeditslider input[name='id']").attr("value",idslider);
            $("#formeditslider input[name='descripcion']").attr("value",titulo);
        }
    });



}

function slider_update(){


    $('form[id="formeditslider"]').on('submit',function(e){

        let datos=$(this).serialize();
        let uri="{{url('/Admin/slider/')}}";
        let route=uri;

        
        $.ajax({
            type:"PUT",
            url:route,
            dataType:'json',
            data:datos,
            beforeSend:function(){
                
               alert('enviando')
            },  
            success:function(msj){
    
                location.href ="{{url('/Admin/')}}";
            }
        });
        event.preventDefault();
    })

}

$().ready(function(){


   slider_update()
})
</script>
@endsection