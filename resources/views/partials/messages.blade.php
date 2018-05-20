<link rel='stylesheet' href="{{ asset('custom/css/messages.css')}}" />
@if(count($errors)> 0)
  <div class='row'>
    <div class='col s8 offset-2'>
      <div class='card-panel red lighten-2 '>
        <span class='white-text message_cancel_btn right'>
          <i class='material-icons right'>cancel</i>
        </span>
        @foreach($errors->all() as $error)
          <p class='white-text'>
             {{ $error}}
          </p>
        @endforeach
      </div>
    </div>
  </div>
@endif

@if(session('fail_message'))
  <div class='row'>
    <div class='col s8 offset-s2'>
      <div class='card-panel red lighten-2'>
        <span class='white-text message_cancel_btn right'>
          <i class='material-icons'>cancel</i>
        </span>
        <p class='white-text'>
           {{ session('fail_message') }}
        </p>
      </div>
    </div>
  </div>
@endif

@if(session('success_message'))
  <div class='row'>
    <div class='col s8 offset-s2'>
      <div class='card-panel teal lighten-2'>
        <span class='white-text message_cancel_btn right'>
          <i class='material-icons'>cancel</i>
        </span>
        <p class='white-text'>
           {{ session('success_message') }}
        </p>
      </div>
    </div>
  </div>
@endif

<script src=" {{ asset('custom/js/messages.js')}}"></script>
