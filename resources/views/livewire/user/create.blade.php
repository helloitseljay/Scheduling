<div class="p-10">
    <span class="text-center text-4xl"> Create User </span>
    <div class= "text-gray-50flex flex-col gap-4 bg-gray-600 p-5 rounded-xl shadow-lg nt-5 max 24rem-w-sm">
        <x-input label="First Name" placeholder="First name" wire:model='firstName' />
        <x-input label="Middle Name" placeholder="Middle name" wire:model='middleName' />
        <x-input label="Last Name" placeholder="Last name" wire:model='lastName'/>
        <x-input label="Email Address" placeholder="Email Address" wire:model="email" />
        <x-inputs.password label="Password" placeholder="Password" wire:model='password' />
        <x-inputs.password label="Confirm Password" placeholder="Confirm Password" wire:model='password_confirmation' />
        <x-button orange label="Save" wire:click='create' />

    </div>
        {{-- Be like water. --}}

</div>
