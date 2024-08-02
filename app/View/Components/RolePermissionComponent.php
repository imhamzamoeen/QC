<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Spatie\Permission\Models\Role;

class RolePermissionComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $roles =Role::with(['permissions'])->get();
        return view('components.role-permission-component',compact('roles'));
    }
}
