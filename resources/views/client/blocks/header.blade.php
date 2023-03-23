<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('client/img/logo/f-logo.png') }}"
            alt="f-logo"></a>
      </div>
      <div class="collapse navbar-collapse">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Input some key words..." aria-label="Search">
          <button class="btn" type="submit" style="background-color:#1435c3; width: 10px; height:40px;">
            <span class="rounded-4 mx-auto">
              <img src="{{ asset('client/interface/search-icon-black.gif') }}" alt="search-icon"
                style="width: 20px; height: 20px;">
            </span>
          </button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  {{-- <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="logo">
          <a href="{{ route('homepage') }}"><img src="{{ asset('client/img/logo/f-logo.png') }}" alt="full-logo"></a>
        </div>
      </div>
      <div class="col-8">
        <nav>
          <div class="d-flex gap-4">
            <div>search bar</div>
            <div>login</div>
            <div>notification</div>
            <div>cart</div>
          </div>
        </nav>
      </div>
    </div>
  </div> --}}
</header>
