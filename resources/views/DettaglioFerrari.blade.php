<x-layout>
  
    <x-header title="Modello Ferrari"/>
  <div class="container-mt-5">
      <div class="row-justify-content-center">
          <x-dettCards
            img="{{ $Ferrari['img'] }}"
            tipes="{{ $Ferrari['tipes'] }}"
            specifiche="{{ $Ferrari['specifiche'] }}"          
          />
       </div>
       <p></p>
       
      </div>
  </div>
</x-layout>
