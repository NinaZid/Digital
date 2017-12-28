      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <a href="/digital/public/" class="navbar-brand">Digital Artisans</a>
           @if (Auth::check())
            <a class="nav-link ml-auto" href="#" style="font-size: 25px;">{{ Auth::user()->name }}</a>
            @endif
            @if(Auth::User())
             <a href="/digital/public/logout" class="navbar-brand">Logout</a>
            @endif
       </div>
      </div>