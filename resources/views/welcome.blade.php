<x-layout>
  
    <x-header title="Benvenuti sul mio Blog d'auto"/>
    <div class="container-mt-5">
        <div class="row-justify-content-center">
            @if ($products->isNotEmpty())
            @foreach($products as $product)
            <div class="col-12 col-md-6 d-flex justify-content-center">
            
         </div>
       </div>
             <x-productCard
                 :product="$product"
             />
            </div>
            <p></p>
            @endforeach
           </div>
                
            @endif
         @foreach($products as $product)
         <div class="col-12 col-md-6 d-flex justify-content-center">
         
      </div>
    </div>
          <x-productCard
              :product="$product"
          />
         </div>
         <p></p>
         @endforeach
        </div>
    </div>
</x-layout>
