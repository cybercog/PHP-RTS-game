<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ Session::token() }}"/>
    <title>rts játék térkép</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css"/>
    <link href="{{ asset('css/leaflet.contextmenu.css')}}" rel="stylesheet">

    <link href="{{ asset('css/minimap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/leaflet.tooltip.css')}}" rel="stylesheet">

    <style>
        html, body, .container {
            height: 95%;
            width: 100%;
        }

        #map {
            width: auto;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }
    </style>
</head>
<body onload="init()">
@include('layouts.navbar')

<div class="container">

    <div id="map" class="sidebar-map"></div>
</div>

<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>

<script src="{{asset('js/rastercoords.js')}}"></script>
<script src="{{asset('js/minimap.js')}}"></script>
<script src="{{asset('js/leaflet.contextmenu.js')}}"></script>
<script src="{{asset('js/leaflet.tooltip.js')}}"></script>

<script>
    if (typeof window.location.pathname.split('x')[1] == 'undefined') {
        var start_coord = 0;
    } else {
        var start_coord = window.location.pathname.split('x')[1].split('y');
        start_coord[0] = parseInt(start_coord[0]);
        start_coord[1] = parseInt(start_coord[1]);
    }

    var auth_user_id = {{Auth::user()->id}}
</script>
<script src="{{asset('js/map.js')}}"></script>
</body>
</html>                            