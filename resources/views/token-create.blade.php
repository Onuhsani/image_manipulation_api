<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="row">
                    <div class="logo col-lg-10">
                        <ul> 
                            <li><a href="/dashboard"><h3>ImageApi</h3></a></li>
                        </ul>
                    </div>
                    <div class="links col-lg-2 mr-3">
                        <ul>
                            {{-- <a href="/login"><li class="btn btn-primary">Logout</li></a> --}}

                            <a href="route('logout')" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
    
            </nav>
        </header>
    
        <main>
            <div class="row">
                <center><h1>IMAGE MANIPULATION API</h1></center>
            </div>

            <div class="row ">
                <form class="form-control border-0 center" method="post" action="{{ route('token.create') }}">
                    @csrf
                    <label>Token name:</label>
                    <input type="text" name="name" placeholder="Enter token name" class="form-control" required/>
                    <button class="btn btn-primary mt-3">
                        Generate
                    </button>
                    
                </form>
            </div>
        </main>
    </div>
    
</body>
</html>