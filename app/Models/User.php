<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use CrudTrait;
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function assignRoleCustom($role, $model_id)
    {
        $roleModel = Role::where('name', $role)->first();
        if (!$roleModel) {
            return "role doesnot exists";
        } else {
            DB::table('model_has_roles')->insert([
                'role_id' => $roleModel->id,
                'model_type' => 'App\Models\User',
                'model_id' => $model_id,
            ]);
        }

    }
    public function roles()
    {
        return $this->morphToMany(Role::class, 'model', 'model_has_roles', 'model_id', 'role_id');
    }

    // public function roles()
    // {
    //     return $this->belongsToMany('App\Models\Role')->withPivot('permission', 'some_other_field'); // `notes` and `some_other_field` are aditional fields in the pivot table that you plan to show in the form.
    // }

}
