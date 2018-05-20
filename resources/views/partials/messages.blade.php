@if(count($errors)> 0)
  <style>
    .card-panel {
      padding:21px;
      margin: 2.5rem 0 1rem 0;
    }
  </style>
  <div class='row'>
    <div class='col s8'>
      <div class='card-panel red lighten-2'>
        @foreach($errors->all() as $error)
          <p class='white-text'>
             {{ $error}}
          </p>
        @endforeach
      </div>
    </div>
  </div>
@endif

@if(session('fail'))
  <style>
    .card-panel {
      padding:21px;
      margin: 2.5rem 0 1rem 0;
    }
  </style>
  <div class='row'>
    <div class='col s8'>
      <div class='card-panel red lighten-2'>
          <p class='white-text'>
             {{ session('fail') }}
          </p>
      </div>
    </div>
  </div>
@endif
