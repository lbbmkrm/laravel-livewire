<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;

class HotelList extends Component
{
    #[Title('Hotels')]
    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => Hotel::all()
        ]);
    }
}
