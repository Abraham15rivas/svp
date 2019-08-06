<header>
    <div class="navbar-fixed">
      <nav class="light-blue darken-3 hoverable row">
        <div class="col s2">
          <img src="{{ asset('image/user.png') }}" height="55px" alt="">
        </div>
        <div class="col s9 center">
            <a href="{{ url('/') }}">
                <h4>{{ config('app.name') }}</h4>
            </a>
        </div>
        <div class="col s1">
        <div class="fixed-action-btn toolbar">
          <a class="btn-floating btn-large light-blue darken-4">
            <i class="large material-icons">more_vert</i>
          </a>
          <ul class="margen">
            @if (\App\User::roleUser() == 'Root')
                @include('partials.navigations.root')
            @else
                @include('partials.navigations.general')
            @endif
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
        </div>
      </nav>
    </div>
   </header>
