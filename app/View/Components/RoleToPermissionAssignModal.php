<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleToPermissionAssignModal extends Component
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
        $roles=Role::all();
        $permissions=Permission::all();
        return view('components.role-to-permission-assign-modal',compact('roles','permissions'));
    }
}
