<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Test</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">首頁</a>
          </li>
          @if( auth()->check() )
          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('newpost')) ? 'active' : '' }}" aria-current="page" href="{{ route('newpost') }}">發文</a>
          </li>
          @endif
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @if( auth()->check() )
                {{ auth()->user()->name }}
              @else
                登入/註冊
              @endif
            </a>
            @if( auth()->check() )
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('logout') }}">登出</a></li>
              </ul>
            @else
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('login') }}">登入</a></li>
              <li><a class="dropdown-item" href="{{ route('signup') }}">註冊</a></li>
            </ul>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>