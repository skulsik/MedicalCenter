<?php

namespace App\Services\Traits;

use App\Models\Role;

trait HasRolesTrait
{
    // Отношение многие ко многим -> модель User
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    // Проверяет роль текущего пользователя с запрошенной ролью.
    // Будет ли защищеный контент доступен текущему пользователю.
    public function hasRole($role) {
        if ($this->roles->contains('slug', $role)) {
            return true;
        }
        return false;
    }
}
