<table class="w-full">
    <thead>
    <tr>
        <th class="border p-1"> ID</th>
        <th class="border p-1"> Name</th>
        <th class="border p-1"> Services</th>
        <th class="border p-1"> Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($offices as $office)
        <tr>
            <td class="border p-1"> {{$office->id}}</td>
            <td class="border p-1"> {{$office->name}}</td>
            <td class="border p-1 text-blue-600"> <a href="{{route('office',['office_id'=>$office->id])}}">{{$office->services->count()}}</a></td>
            <td class="border p-1">
                <x-jet-button wire:click="edit({{$office->id}})"><i class="fas fa-pen"> </i> Edit</x-jet-button>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
