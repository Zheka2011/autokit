<?php

namespace App\Http\Livewire;

use App\Models\Provisioners as ProvisionersModel;
use Livewire\Component;

class Provisioners extends Component {

	public $data, $selected_id, $name, $contrakt, $white, $comment, $del, $shipping, $api;

	public $updateMode = false;

	public function render() {

		$this->data = ProvisionersModel::where('del', 0)->get();
		return view('livewire.provisioners.index');
	}

	private function resetInput() {
		$this->name = null;
		$this->contrakt = null;
		$this->white = null;
		$this->comment = null;
		$this->shipping = null;
		$this->api = null;
	}

	public function store() {
		$this->validate([
			'name' => 'required',
			'contrakt' => 'required',
			'white' => 'required',
		]);

		ProvisionersModel::create([
			'name' => $this->name,
			'contrakt' => $this->contrakt,
			'white' => $this->white,
			'comment' => $this->comment,
			'del' => 0,
			'shipping' => $this->shipping,
			'api' => $this->api,
		]);

		$this->resetInput();
	}

	public function edit($id) {
		$record = ProvisionersModel::findOrFail($id);

		$this->selected_id = $id;
		$this->name = $record->name;
		$this->contrakt = $record->contrakt;
		$this->white = $record->white;
		$this->comment = $record->comment;
		$this->shipping = $record->shipping;
		$this->api = $record->api;

		$this->updateMode = true;
	}

	public function update() {
		$this->validate([
			'selected_id' => 'required|numeric',
			'name' => 'required',
			'contrakt' => 'required',
			'white' => 'required',
		]);

		if ($this->selected_id) {
			$record = ProvisionersModel::find($this->selected_id);
			$record->update([
				'name' => $this->name,
				'contrakt' => $this->contrakt,
				'white' => $this->white,
				'comment' => $this->comment,
				'del' => 0,
				'shipping' => $this->shipping,
				'api' => $this->api,
			]);

			$this->resetInput();
			$this->updateMode = false;
		}
	}

	public function destroy($id) {
		if ($id) {
			$record = ProvisionersModel::find($id);
			$record->update([

				'del' => 1,

			]);
		}
	}
}
