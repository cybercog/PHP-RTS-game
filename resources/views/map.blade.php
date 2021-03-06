<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>rts játék térkép</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}"/>
    <link href="{{ asset('css/minimap.css')}}" rel="stylesheet">

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

        .infobox {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .infobox h4 {
            margin: 0 0 5px;
            color: #777;
        }

        /***************************************************************
         * EASY BUTTON
         * https://github.com/CliffCloud/Leaflet.EasyButton
         ***************************************************************/
        .leaflet-bar button,
        .leaflet-bar button:hover {
            background-color: #fff;
            border: none;
            border-bottom: 1px solid #ccc;
            width: 26px;
            height: 26px;
            line-height: 26px;
            display: block;
            text-align: center;
            text-decoration: none;
            color: black;
        }

        .leaflet-bar button {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            overflow: hidden;
            display: block;
        }

        .leaflet-bar button:hover {
            background-color: #f4f4f4;
        }

        .leaflet-bar button:first-of-type {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .leaflet-bar button:last-of-type {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom: none;
        }

        .leaflet-bar.disabled,
        .leaflet-bar button.disabled {
            cursor: default;
            pointer-events: none;
            opacity: .4;
        }

        .easy-button-button .button-state {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .leaflet-touch .leaflet-bar button {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
    </style>
</head>
<body onload="init()">
@include('partials.navbar')

<div class="container">

    <div id="map" class="sidebar-map"></div>
</div>

<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/leaflet-src.js')}}"></script>

<script src="{{asset('js/rastercoords.js')}}"></script>
<script src="{{asset('js/minimap.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: { 'X-CSRF-Token': $('meta[name="_token"]').val() }
    });

    if (typeof window.location.pathname.split('x')[1] == 'undefined') {
        var start_coord = 0;
    } else {
        var start_coord = window.location.pathname.split('x')[1].split('y');
        start_coord[0] = parseInt(start_coord[0]);
        start_coord[1] = parseInt(start_coord[1]);
    }
</script>
<script src="{{asset('js/map.js')}}"></script>
</body>
</html>                            