<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;

    #[Title('Hotels')]

    public $search;

    public function delete(int $id)
    {
        $hotel = Hotel::findOrFail($id);
        DB::table('hotels')->where('id', $hotel->id)->delete();
        return redirect()->back()->with('success', 'Hotel list deleted successfull!');
    }
    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => Hotel::where('name', 'LIKE', "%$this->search%")
                ->orWhere('address', 'LIKE', "%$this->search%")
                ->orWhere('email', 'LIKE', "%$this->search%")->paginate(5)
        ]);
    }
}
