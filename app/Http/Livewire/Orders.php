<?php

namespace App\Http\Livewire;

use App\Models\Brand as BrandModels;
use Livewire\Component;

class Orders extends Component {

	public $data;

	public function render() {

		$this->data = BrandModels::find(1)->brandToModel;
		return view('livewire.orders.index');
	}
}
