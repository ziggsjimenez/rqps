<table class="w-full">
    <thead>
    <tr>
        <th>ID</th>
        <th>Refnum</th>
        <th>Name</th>
        <th>Age</th>
        <th>Bday</th>
        <th>Zone</th>
        <th>Barangay</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <td class="border p-1">{{$client->id}}</td>
        <td class="border p-1">{{$client->refnum}}</td>
        <td class="border p-1">{{$client->name}}</td>
        <td class="border p-1">{{$client->age}}</td>
        <td class="border p-1">{{$client->bday}}</td>
        <td class="border p-1">{{$client->zone->name}}</td>
        <td class="border p-1">{{$client->barangay->name}}</td>
        <td class="border p-1 text-blue-700">
            <button wire:click="edit({{$client->id}})"><i class="fas fa-pen"></i></button>
            <a target="_blank" href="{{route('print.qr',['client_id'=>$client->id])}}"><button><i class="fas fa-print"></i></button></a>
        </td>
    </tr>
        @endforeach
    <tr>
        <td colspan="8">
                {{ $clients->links() }}
            </td>
    </tr>
    </tbody>
</table>
