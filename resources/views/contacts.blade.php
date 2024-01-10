<x-layout>
    <x-header
    title="Contattaci"
    />
    <div class="container md-3">
        <div class="row justify-content-center">
            <div class="col-12 col-6-md mt-5">
              
                <form method="POST" action="{{ route('contact.submit') }}">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Nome e Cognome</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lasciaci un commento</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>