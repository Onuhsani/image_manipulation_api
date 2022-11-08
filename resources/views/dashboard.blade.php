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
                            {{-- <li id="user">{{ Auth::user()->name }}</li> --}}
                            <a href="/login"><li class="btn btn-primary">Logout</li></a>
                        </ul>
                    </div>
                </div>
    
            </nav>
        </header>
    
        <main>
            <div class="row">
                <center><h1>IMAGE MANIPULATION API</h1></center>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <a href="{{ route('token.showForm') }}" class="btn btn-primary">Generate new token</a>
                </div>
            </div>

            <div class="row">
                @if(count($tokens)>0)
                <table class="table table-responsive mt-5">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Last used</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokens as $token)
                        <tr>
                            <td>{{ $token->name }}</td>
                            <td>{{ $token->last_used_at ? $token->last_used_at->diffForHumans() : ''}}</td>
                            <td width="200px">
                                <form method="post" action="{{ route('token.delete', ['token'=> $token->id]) }}">
                                    @csrf
                                    <button class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <center><h5>You have not generated any token yet</h5></center>
                @endif
            </div>
        </main>
    </div>
    
</body>
</html>