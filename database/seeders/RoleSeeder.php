<?php

namespace Database\Seeders;

use App\Constants\PermissionEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role = Role::query()->create(['name' => 'Administrator']);
        $permission = Permission::query()->create(['name' => PermissionEnum::CREATE_APPLICATIONS]);
        $role->givePermissionTo($permission);

        $user = User::query()->find(1);
        $user->assignRole('Administrator');
    }
}
