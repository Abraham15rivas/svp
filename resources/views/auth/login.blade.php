@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s8 z-depth-5" style="margin-bottom:-20px;" id="imagen"></div>
    <div class="col s4">
        <div class="row">
            <div class="col s12">
              <form method="POST" action="{{ route('login') }}">
                @csrf
               <div class="valign center mt-4">
                <img src="{{ asset('image/user.png') }}" alt="">
                    <!--<i class="large material-icons prefix">account_circle</i>-->
               </div>
                <h3 class="valign center mt-4">{{ __("Sistema Vacaciones y Permisos") }}</h3>
                <br>
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="username" type="text" class="validate" @error('username') is-invalid @enderror name="username" required autocomplete="username" autofocus>
                      <label for="username">Usuario</label>
                      @error('username')
                          <span class="red-text" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                </div>
                   <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">vpn_key</i>
                      <input id="password" type="password" class="validate" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                      <label for="password">Contraseña</label>
                      @error('password')
                        <span class="red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col s12 valign center mt-4">
                      <button type="submit" class="btn waves-effect waves-light btn-large light-blue darken-3 hoverable">{{ __("Ingresar") }}
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
