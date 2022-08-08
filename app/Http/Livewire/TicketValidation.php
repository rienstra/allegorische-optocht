<?php

namespace App\Http\Livewire;

use Filament\Tables;
use Illuminate\View\View;
use Livewire\Component;

class TicketValidation extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    public function render(): View
    {
        return view('livewire.ticket-validation');
    }
}
