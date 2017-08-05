@extends('layouts.app')

@section('content')
        
        <!--<title>Meme Gallery</title>
-->
<style>
    
 html, body {
                background-color: lightblue;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
</style>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    
                        <a href="{{ url('/home') }}">Perfil</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        <a href="{{ url('/listado') }}">Listar Imagenes1</a>

                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                            </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                      
                     @endif
                        </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Meme Gallery 
                </div>
                <img src="https://ugc.kn3.net/i/origin/http://blogs.lainformacion.com/futuretech/files/2012/01/determined-challenge-accepted-l-1024x802.png" alt="Este es una Imagen" class="img-thumbnail" style="width:304px;height:228px;">

                </div>
            </div>
        </div>
    </div>
 