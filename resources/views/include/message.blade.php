 @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @php
       Session::forget('success')
  @endphp
  @endif
  
  @if (session()->has('danger'))
  <div class="alert alert-danger" role="alert">
    A simple danger alert—check it out!
  </div>
  @php
       Session::forget('danger')
  @endphp
  @endif
