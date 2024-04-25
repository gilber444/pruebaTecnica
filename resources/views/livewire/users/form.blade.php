<div wire:ignore.self class="modal fade" id="myModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Usuarios | {{ $selected_id > 0 ? 'Editar' : 'Nuevo' }}</h5>
                <h6 class="text-center text-warning" wire:loading> POR FAVOR ESPERE</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 mb-3">
                        <label for="">Nombre</label>
                        <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Nombre del Usuario" autofocus>
                    </div>
                    @error('name')
                            <span class="text-danger er">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 mb-3">
                        <label for="">Apellido</label>
                        <input type="text" wire:model.lazy="lastname" class="form-control" placeholder="ej: Apellido del Usuario" autofocus>
                    </div>
                    @error('lastname')
                        <span class="text-danger er">{{ $message }}</span>
                    @enderror
                </div>
                <div style="row">
                    <div class="col-sm-12 col-md-12 mb-3">
                       <label for="">Telefono</label>
                       <input type="text" wire:model.lazy="phone" class="form-control" placeholder="ej: 00000000">
                    </div>
                    @error('phone')
                        <span class="text-danger er">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12" mb-3>
                        <label for="">Email</label>
                        <input type="text" wire:model.lazy="email" class="form-control" placeholder="ej: laravel@dmin.com">
                    </div>
                    @error('email')
                        <span class="text-danger er">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" wire:model="password" id="password" class="form-control">
                    </div>
                    @error('password')
                        <span class="text-danger er">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent='resetUI()' class="btn btn-dark"
                    data-bs-dismiss="modal">Cerrar</button>
                @if ($selected_id < 1)
                    <button type="button" wire:click.prevent="Store()" class="btn btn-primary">Guardar Datos</button>
                @else
                    <button type="button" wire:click.prevent="Update()" class="btn btn-primary">Actualizar Datos</button>
                @endif
            </div>
        </div>
    </div>
</div>
