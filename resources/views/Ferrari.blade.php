
<x-layout>
  
    <x-header title="Ferrari"/>
  <div class="container-mt-5">
      <div class="row-justify-content-center">
       @foreach($Ferraris as $Ferrari)
       <div class="col-12 col-md-6 d-flex justify-content-center">
       
    </div>
  </div>
        <x-cards
          img="{{$Ferrari['img']}}"
          tipes="{{$Ferrari['tipes']}}"
          click="{{ route('Dettaglio.Ferrari', ['tipes'=>$Ferrari['tipes']]) }}"
        
        />
       </div>
       <p></p>
       @endforeach
      </div>
  </div>
</x-layout>