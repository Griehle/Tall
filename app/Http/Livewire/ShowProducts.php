<?php

namespace App\Http\Livewire;

use App\Models\Product;
use DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;

    public $search = '';

    public $products ='';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //
    }
}
