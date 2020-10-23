<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CountryDatatables extends LivewireDatatable
{
    public $model = Country::class;

    function columns()
    {
    	return [
    		NumberColumn::name('id')->label('ID')->sortBy('id'),
    		Column::name('sortname')->label('Sortname'),
    		Column::name('name')->label('Name'),
    		Column::name('phonecode')->label('Phonecode'),
    	];
    }
}
