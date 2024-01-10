<div class="col-12 col-md-6 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="{{$img}}" class="card-img-top-3" alt="...">
          <div class="card-body">
                <h5 class="card-title">{{$tipes}}</h5>
                <p class="card-text">{{$specifiche}}</p>
                
                @if (Route::currentRouteName()=='Dettaglio.Porsche')
                    <a href="{{ route('Porsche')}}" class="btn btn-primary">Torna Indietro</a>
                @else
                    <a href="{{ route('Ferrari')}}" class="btn btn-primary">Torna Indietro</a>    
                @endif
          </div>  
     </div>
</div>