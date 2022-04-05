<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartItemCounter extends Component
{
    public $counter;
    
    public function mount()
    {
        $this->counter = 1;        
    }
    public function render()
    {
        return view('livewire.cart-item-counter');
    }
}
