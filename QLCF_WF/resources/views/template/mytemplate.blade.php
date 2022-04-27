@include('includes.header')
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
    
    @yield('script')

@include('includes.footer')