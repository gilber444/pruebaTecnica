<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Auth\Support\Facades\Hash;


class UsersController extends Component
{

    public $name, $phone, $email, $lastname, $password, $selected_id;

    public function render()
    {
        $data = User::all();

        return view('livewire.users.users',[
            'data' => $data
        ])
        ->extends('layouts.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->email = '';
        $this->password= '';
        $this->phone = '';
        $this->selected_id = 0;
        $this->resetValidation();
    }

    public function Edit(User $user)
    {
        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->phone = $user->phone;
        $this->email = $user->email;
        //$this->password = $user->password;
        $this->emit('show-modal', 'open');
    }
    protected $listeners = [
        'deleteRow' => 'destroy',
        'resetUI' => 'resetUI'
    ];

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'lastname' => 'required|min:3',
            'password' => 'required|min:3',
        ];

        $messages = [
            'name.required' => 'Ingrese el Nombre del usuario',
            'name.min' => 'el nombre de usuario debe tener al menos 3 caracteres',
            'lastname.required' => 'Ingrese el Apellido del usuario',
            'lastname.min' => 'el apellido de usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingrese el Email',
            'email.email' => 'Ingresa un email Valido',
            'email.unique' => 'El email ya esta registrado',
            'password.required' => 'Ingrese el Password',
            'password.min' => 'El password debe tener al menos 3 caracteres',
        ];

        $this->validate($rules, $messages);

        $user = User::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'phone'=>$this->phone
        ]);
        $this->resetUI();
        $this->emit('item-added', 'Usuario Registrado');
    }

    public function Update(User $user)
    {
        $rules = [
            'email' => "required|email",
            'name' => 'required|min:3',
            'password' => 'required|min:3',
            'lastname' => 'required|min:3'

        ];

        $messages = [
            'name.required' => 'Ingrese el Nombre',
            'name.min' => 'el nombre de usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingrese el Email',
            'email.email' => 'Ingresa un email Valido',
            'password.required' => 'Ingrese el Password',
            'password.min' => 'El password debe tener al menos 3 caracteres',
            'lastname.required' => 'Ingrese el Apellido del usuario',
            'lastname.min' => 'el apellido de usuario debe tener al menos 3 caracteres',

        ];

        $this->validate($rules, $messages);

        $user = User::find($this->selected_id);
        $user->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'phone' => $this->phone,
        ]);

        $this->resetUI();
        $this->emit('item-updated', 'Usuario Actualizado');
    }

    public function destroy(User $user)
    {
        $user->delete();
        $this->resetUI();
        $this->emit('item-deleted', 'Usuario Eliminado');
    }
}
