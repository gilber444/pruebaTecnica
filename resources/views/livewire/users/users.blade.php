<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2"><b> Usuarios </b></h5>
            <div class="dropdown">
                <a href="javascript:void(0)" class="btn btn-primary btn-rounded mb-2" data-bs-toggle="modal" data-bs-target="#myModal"> <i class="fa-solid fa-plus"></i> Agregar</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Email</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ( $data as $r )
                <tr>
                    <td class="text-center">
                        {{ $r->id }}
                    </td>
                    <td><h6>{{$r->name}} {{$r->lastname}}</h6></td>
                    <td class="text-center">{{$r->phone}}</td>
                    <td class="text-center">{{$r->email}}</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" class="btn btn-warning btn-rounded mtmobile" wire:click="Edit({{ $r->id }})" title="Editar">Editar</a>
                        <a href="javascript:void(0)" onclick="Confirm('{{ $r->id }}')" class="btn btn-danger btn-rounded mtmobile" title="Eliminar"> Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('livewire.users.form')
</div>
@include('common.notis')
