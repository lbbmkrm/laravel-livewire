<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelUpdate extends Component
{
    #[Title('Hotel Update')]

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

    public $hotel;

    public function mount(int $id)
    {
        $this->hotel = Hotel::findOrFail($id);
        $this->name = $this->hotel->name;
        $this->email = $this->hotel->email;
        $this->phone = $this->hotel->phone;
        $this->address = $this->hotel->address;
        $this->star = $this->hotel->star;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->checkout_time = $this->hotel->checkout_time;
    }

    public function update()
    {
        $this->validate();

        $this->hotel->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'star' => $this->star,
            'check_in_time' => $this->check_in_time,
            'checkout_time' => $this->checkout_time,
        ]);

        return redirect()->route('hotel.list')->with('success', 'Hotel updated successfully');
    }

    public function render()
    {
        return view('livewire.hotels.hotel-update');
    }
}
