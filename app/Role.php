<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->syncWithoutDetaching($permission);
    }

}
