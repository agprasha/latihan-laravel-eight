<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::create(['name' => 'manager']);
        $manager->givePermissionTo(['buku.index','buku.tambah','buku.detail','buku.edit','buku.update','buku.delete']);


        $staff = Role::create(['name' => 'staff']);
        $staff->givePermissionTo(['buku.index','buku.detail']);
    }
}
