<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ $encrypted_csrf_token }}"/>
    <title>rts játék térkép</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css"/>
    <link href="{{ asset('css/minimap.css')}}" rel="stylesheet">

    <style>
        html, body, .container {
            height: 99%;
            width: 100%;
            overflow: hidden;
        }

        #map {
            width: auto;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    <script src="{{asset('js/rastercoords.js')}}"></script>
    <script src="{{asset('js/minimap.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>

</head>
<body onload="init()">
@include('layouts.navbar')
<div class="container">
    <div id="map"></div>
</div>


</body>
</html>                            