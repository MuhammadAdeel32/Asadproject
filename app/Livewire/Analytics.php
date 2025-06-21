<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sale;
use Carbon\Carbon; 


class Analytics extends Component
{


    public $startDate;
    public $endDate;
    public $sales = [];

    public function search()
    {
        $this->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
        ]);

        $this->sales = Sale::whereBetween('created_at', [
            Carbon::parse($this->startDate)->startOfDay(),
            Carbon::parse($this->endDate)->endOfDay()
        ])->get();
    }


    public function render()
    {
        return view('livewire.analytics');
    }
}
