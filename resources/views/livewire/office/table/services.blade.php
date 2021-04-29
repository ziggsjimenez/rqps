<table class="w-full">
    <thead>
    <tr>
        <th class="border p-1"> ID</th>
        <th class="border p-1"> Name</th>
        <th class="border p-1"> Service Type</th>
        <th class="border p-1"> Image</th>
        <th class="border p-1"> Window</th>
        <th class="border p-1"> Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($office->services as $service)
        <tr>
            <td class="border p-1"> {{$service->id}}</td>
            <td class="border p-1"> {{$service->name}}</td>
            <td class="border p-1"> {{$service->servicetype->name}}</td>
            <td class="border p-1">
                @if($service->image!=NULL)
                <img src="{{asset('storage/images/'.$service->image)}}" width="100px"/>
                    @endif
            </td>
            <td class="border p-1"> {{$service->window}}</td>
           <td class="border p-1">
                <x-jet-button wire:click="edit({{$service->id}})"><i class="fas fa-pen"> </i> Edit</x-jet-button>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
