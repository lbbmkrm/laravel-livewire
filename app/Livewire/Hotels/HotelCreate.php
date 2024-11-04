<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Title('Hotel Create')]

    #[Validate('required|max:200')]
    public string $name;

    #[Validate('required|email|max:100')]
    public string $email;

    #[Validate('required|numeric')]
    public string $phone;

    #[Validate('required')]
    public string $address;

    #[Validate('required|integer|between:1,5')]
    public int $star;

    #[Validate('required')]
    public string $check_in_time;
    #[Validate('required')]
    public string $checkout_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        $this->validate();
        $hotel = new Hotel([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
            'star' => $this->star,
            'check_in_time' => $this->check_in_time,
            'checkout_time' => $this->checkout_time
        ]);
        $hotel->save();

        return redirect()->route('hotel.list')->with('success', 'Hotel created successfully!');
    }
}
