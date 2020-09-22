 <div >
	    @if (count($errors) > 0)
	        <div class="alert alert-danger">
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <strong>Sorry!</strong> invalid input.<br><br>
	            <ul style="list-style-type:none;">
	                @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
	    @endif




	    <table class="table table-sm table-dark table-striped table-borderless table-hover responsive">
	        <tr>
	            <td>#</td>
	            <td>Наименование</td>
	            <td>Договор</td>
	            <td>Проводные</td>
	            <td>Доставка</td>
	            <td>api</td>
	            <td>Комментарий</td>
	            <td></td>
	        </tr>

	        @foreach($data as $row)
	            <tr>
	                <td>{{$row->id}}</td>
	                <td>{{$row->name}}</td>
	                <td>{{$row->contrakt}}</td>
	                <td>{{$row->white}}</td>
	                <td>{{$row->shipping}}</td>
	                <td>{{$row->api}}</td>
	                <td>{{$row->comment}}</td>
	                <td width="100">
	                    <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-warning">Edit</button>
	                    <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-danger">Del</button>
	                </td>
	            </tr>
	        @endforeach
	    </table>

	    @if($updateMode)
	        @include('livewire.provisioners.update')
	    @else
	        @include('livewire.provisioners.create')
	    @endif
	</div>
