<div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($slider); $i++)
                            @if($i == 0)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                            @else
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                            @endif
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach($slider as $item)
                            @if($loop->first)
                                <div class="carousel-item active">
                            @else
                                <div class="carousel-item">
                            @endif
                                <img class="d-block" width="100%" height="500px" src="{{asset('images/slider/'.$item->img)}}" alt="{{$item->img}}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$item->titulo}}</h5>
                                    <p>{{$item->descripcion}}</p>
                                </div>
                            </div>
                        @endforeach
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
</div>