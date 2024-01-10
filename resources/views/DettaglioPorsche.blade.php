<x-layout>
  
  <x-header title="Modello Porsche"/>
  <div class="container-mt-5">
      <div class="row-justify-content-center">
        <x-dettCards
        img="{{ $Porsche['img'] }}"
        tipes="{{ $Porsche['tipes'] }}"
        specifiche="{{ $Porsche['specifiche'] }}"          
      />
               
    </div>
  </div>
       </div>
       <p></p>
       
      </div>
  </div>
  
</x-layout>
