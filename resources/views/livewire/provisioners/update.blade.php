<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Редактирование поставщика</h3>
    </div>

    <div class="panel-body container">
        <div class="form">
            <input type="hidden" wire:model="selected_id">
            <div class="form-group row">
                Наименование
                <input wire:model="name" type="text" class="form-control form-control-sm input-sm">
            </div>
            <div class="form-group row">
                Договор
                <input wire:model="contrakt" type="text" class="form-control form-control-sm input-sm">
            </div>
            <div class="form-group row">
                Проводные
                <input wire:model="white" type="text" class="form-control form-control-sm input-sm">
            </div>
            <div class="form-group row">
                Доставка
                <textarea wire:model="shipping" type="text" class="form-control form-control-sm input-sm"> </textarea>
            </div>
            <div class="form-group row">
                api
                <textarea wire:model="api" type="text" class="form-control form-control-sm input-sm"> </textarea>
            </div>
            <div class="form-group row">
                Комментарий
                <textarea wire:model="comment" type="text" class="form-control form-control-sm input-sm"> </textarea>
            </div>
            <div class="form-group row">
                <br>
                <button wire:click="update()" class="btn btn-sm btn-primary">Update</button>
            </div>
        </div>
    </div>

</div>