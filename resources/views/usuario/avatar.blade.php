@if(Auth::user()->imagen)
  <img src="{{ url('/avatar/'.Auth::user()->imagen)}}" alt="">
@endif
