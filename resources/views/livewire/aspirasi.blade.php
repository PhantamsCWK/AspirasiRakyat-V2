
<x-navbar :active="$active"/>

<main>
  <section class="py-5 text-center container">
      <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      </div>
      </div>
  </section>
  <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
          @foreach ($aspirasis as $aspirasi)
              <h4>{{ $aspirasi->name() }}</h4>
          @endforeach
          <x-card-aspirasi/>
        </div>
      </div>
  </div>
</main>

<x-footer/>

<x-modal-aspirasi/>