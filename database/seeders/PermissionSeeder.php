<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create(['name' => 'buku.index']);
        $permission = Permission::create(['name' => 'buku.tambah']);
        $permission = Permission::create(['name' => 'buku.store']);
        $permission = Permission::create(['name' => 'buku.detail']);
        $permission = Permission::create(['name' => 'buku.edit']);
        $permission = Permission::create(['name' => 'buku.update']);
        $permission = Permission::create(['name' => 'buku.delete']);
    }
}
