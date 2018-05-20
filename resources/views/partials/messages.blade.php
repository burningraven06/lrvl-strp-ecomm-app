<link rel='stylesheet' href="{{ asset('custom/messages.css')}}" />
@if(count($errors)> 0)
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
