<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$serviceclient->client->name}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>

    <style>
        @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
        body{
            width: 4in;
            height: 6.5in;
        }
    </style>
</head>

<body class="border border-black">
<div class="border border-black">

<div class="text-center">
    MUNICIPALITY OF MANOLO FORTICH <br/>
    <span class="font-bold">REAL QUALITY PUBLIC SERVICE</span> <br/>
    <span class="font-bold">CONSULTATION SLIP</span>
</div>

    <div>
        <table class="w-full">
            <tr>
                <td class="text-center">Service: {{$serviceclient->service->name}}</td>
                <td class="text-center font-bold">Window: <br/> <span class="text-2xl">{{$serviceclient->service->window}}</span></td>
                <td class="text-center font-bold">Priority Number: <br/> <span class="text-2xl">{{$serviceclient->prioritynum}}</span></td>
            </tr>
        </table>
    </div>


    <div>
        <table class="w-full">
            <tr>
                <td>Barangay: {{$serviceclient->client->barangay->name}}</td>
                <td>Sitio: {{$serviceclient->client->barangay->name}}</td>
            </tr>
        </table>
        <table class="w-full">
            <tr>
                <td>Name: {{$serviceclient->client->name}}</td>
                <td>Age: {{$serviceclient->client->age}}</td>
            </tr>
        </table>

{{--        MEDICAL --}}
        @if($serviceclient->service->servicetype_id == 1)
        <table class="w-full">
            <tr class="text-sm">
                <td>Philhealth: <label><input type="checkbox"/> 4Ps</label>
                                <label><input type="checkbox"/> POC</label> <br/>
                                <span style="padding-left: 68px">
                                <label><input type="checkbox"/> NHTS</label>
                                <label><input type="checkbox"/> Private</label>
                                </span>
                    </td>
                <td>Birth Date: {{$serviceclient->client->bday}}</td>
            </tr>
        </table>

        <table>
            <tr><td>Vitals: </td></tr>
            <tr><td>Complaints: </td></tr>
            <tr><td>Impression: </td></tr>
            <tr><td>Prescription: </td></tr>
        </table>
        @endif
{{-- END OF MEDICAL --}}
    </div>

    <a href="{{route('dashboard')}}"><x-jet-button class="no-print">BACK</x-jet-button></a>

</div>

<script>
    window.print();
</script>
</body>

</html>
