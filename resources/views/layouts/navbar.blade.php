
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Navigáció</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Főoldal</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/home">Profil</a>
                    </li>

                    <li>
                        <?php
                        if (isset($city)) {
                            $coord = "x" . $city->hex->x . "y" . $city->hex->y;
                            echo '<a href="/map/' . $coord . '">Térkép</a>';
                        } else {
                            echo '<a href="/map">Térkép</a>';
                        }
                        ?>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Városok <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach (Auth::user()->cities as $city)
                                <li><a href="/city/{{$city->id}}">{{$city->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/auth/logout">Kijelentkezés</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
