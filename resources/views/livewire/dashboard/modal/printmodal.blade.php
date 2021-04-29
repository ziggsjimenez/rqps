<x-jet-dialog-modal wire:model="showPrintModal">
    <x-slot name="title">Service</x-slot>
    <x-slot name="content">
        <div class="space-y-32">
            <div>

            Client: {{$client->name}} <br/>
            Service: {{$service_name}}

            </div>
        </div>
    </x-slot>

    <x-slot name="footer">

        <x-jet-button class="bg-blue-500 text-white" wire:click="printServiceSlip()" wire:loading.attr="enable">
            Print
        </x-jet-button>


        <x-jet-secondary-button wire:click="closeModal()" wire:loading.attr="enable">Close
        </x-jet-secondary-button>
    </x-slot>
</x-jet-dialog-modal>
