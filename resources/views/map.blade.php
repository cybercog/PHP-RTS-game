<!-- resources/views/map.blade.php -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>php rts j�t�k</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top : 70px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <a href="/">f�oldal</a><br>

            <h1>Hello {{Auth::user()->name}}</h1>

            @if(Auth::user()->nation != 0)
                a n�ped: {{Auth::user()->nation}}

            @else
                v�laszd ki melyik n�p vez�re akarsz lenni! <br>

                <form method="POST" action="/home">
                    {!! csrf_field() !!}
                    <input type="radio" name="nation" value="1"> R�mai <br>
                    <input type="radio" name="nation" value="2"> G�r�g <br>
                    <input type="radio" name="nation" value="3"> Germ�n <br>
                    <input type="radio" name="nation" value="4"> Kelta <br>
                    <button type="submit">j�t�k</button>
                </form>
            @endif


            <a href="/auth/logout">kijelentkez�s</a><br>


        </div>
    </div>
</div>
</body>
</html>