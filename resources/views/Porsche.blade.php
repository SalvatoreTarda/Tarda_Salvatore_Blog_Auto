
<x-layout>
  
    <x-header title="Porsche"/>
  <div class="container-mt-5">
      <div class="row-justify-content-center">
       @foreach($Porsches as $Porsche)
       <div class="col-12 col-md-6 d-flex justify-content-center">
       
    </div>
  </div>
        <x-cards
            img="{{$Porsche['img']}}"
            tipes="{{$Porsche['tipes']}}"
            click="{{ route('Dettaglio.Porsche', ['tipes'=>$Porsche['tipes']]) }}"
        />
       </div>
       <p></p>
       @endforeach
      </div>
  </div>
</x-layout>