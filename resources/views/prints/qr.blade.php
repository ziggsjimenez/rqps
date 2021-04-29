<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$client->name}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
</head>
<body>


<div class="w-1/2 border border-black">

    <div class="flex justify-center">
       <span class="font-bold text-2xl">{{$client->name}}</span>
    </div>
    <div class="flex justify-center m-auto text-center items-center content-center">
        <span class="font-bold text-xl">{{$client->zone->name}}, {{$client->barangay->name}}</span>
    </div>

    <div class="flex justify-center">
        {{QrCode::generate($client->refnum)}}
    </div>

    <div class="flex justify-center">
        <span class="font-bold text-2xl">{{$client->refnum}}</span>
    </div>
</div>

</body>
</html>
