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
        <tr @if(isset($client_id)) class="bg-green-400" @endif>
            <td class="border p-1">{{$client->id}}</td>
            <td class="border p-1">{{$client->refnum}}</td>
            <td class="border p-1">{{$client->name}}</td>
            <td class="border p-1">{{$client->age}}</td>
            <td class="border p-1">{{$client->bday}}</td>
            <td class="border p-1">{{$client->zone->name}}</td>
            <td class="border p-1">{{$client->barangay->name}}</td>
            <td class="border p-1 text-blue-700">
                <button wire:click="selectClient({{$client->id}})"><i class="fas fa-mouse-pointer"></i> SELECT </button>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
