<div>
    <button wire:click="register">Register</button>
    @if ($check == true)

        <h3>Customer List</h3>
        <table border="1px">

            <tr>
                <th>Id</th>
                <th>customer No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>

            </tr>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['customerno'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td><button wire:click="deleteCustomer({{ $customer['id'] }})">Delete</button>
                        <button wire:click="updateCustomer({{ $customer['id'] }})">Edit</button>
                    </td>
                </tr>
            @endforeach
        </table>
</div>
@else
@livewire('customer-update', ['c_id' => $c_id, 'name' => $name, 'customerno' => $customerno, 'email' => $email])
@endif
