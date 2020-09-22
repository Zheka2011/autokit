<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Новый поставщик</h3>
    </div>

    <div class="panel-body container">
        <div class="form ">
            <div class="form-group row">
                Наименование
                <input wire:model="name" type="text" class="form-control form-control-sm input-sm" required>
            </div>
            <div class="form-group row">
                Договор
                <input wire:model="contrakt" type="text" class="form-control form-control-sm input-sm" required>
            </div>
            <div class="form-group row">
                Проводные
                <input wire:model="white" type="number" class="form-control form-control-sm input-sm" min="0" max="1" required>
            </div>
            <div class="form-group row">
                Доставка
                <textarea wire:model="shipping"  class="form-control form-control-sm input-sm"></textarea required>
            </div>
            <div class="form-group row">
                api
                <textarea wire:model="api" class="form-control form-control-sm input-sm"></textarea>
            </div>
            <div class="form-group row">
                Комментарий
                <textarea wire:model="comment"  class="form-control form-control-sm input-sm"></textarea>
            </div>

            <div class="form-group row">
                <br>
                <button wire:click="store()" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

