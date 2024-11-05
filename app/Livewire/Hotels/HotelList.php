<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

class HotelList extends Component
{
    #[Title('Hotels')]

    public function delete(int $id)
    {
        $hotel = Hotel::findOrFail($id);
        DB::table('hotels')->where('id', $hotel->id)->delete();
        return redirect()->back()->with('success', 'Hotel list deleted successfull!');
    }
    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => Hotel::all()
        ]);
    }
}
