<div>
    @if ($check == true)
        <h1>Update Customer</h1>
        <form wire:submit.prevent="updateCustomer">
            <input type="text" placeholder="Enter Name" wire:model="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror

            <br>
            <br>
            <input type="number" placeholder="Enter Customerno" wire:model="customerno">
            @error('customerno')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <br>
            <input type="email" placeholder="Enter Email" wire:model="email">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
            <br>
            <br>
            <button type="submit">Update</button>
            <br>
            <br>
            <hr>
        </form>
    @else
        @livewire('customer-list')
    @endif

</div>
