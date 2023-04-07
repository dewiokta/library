<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create permission
        Permission::create(['name' => 'home', 'guard_name' => 'web']);
        
        //petugas
        Permission::create(['name' => 'petugas.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'petugas.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'petugas.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'petugas.destroy', 'guard_name' => 'web']);

        //anggota
        Permission::create(['name' => 'anggota.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'anggota.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'anggota.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'anggota.destroy', 'guard_name' => 'web']);

        //rak
        Permission::create(['name' => 'rak.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'rak.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'rak.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'rak.destroy', 'guard_name' => 'web']);

        //buku
        Permission::create(['name' => 'book.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'book.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'book.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'book.destroy', 'guard_name' => 'web']);

        //peminjaman
        Permission::create(['name' => 'peminjaman.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'peminjaman.destroy', 'guard_name' => 'web']);

        //create role
        $roleUser = Role::create(['name' => 'admin']);
        $roleUser->givePermissionTo([
            'home',
            'anggota.index',
            'anggota.create',
            'anggota.edit',
            'anggota.destroy',
            'rak.index',
            'rak.create',
            'rak.edit',
            'rak.destroy',
            'book.index',
            'book.create',
            'book.edit',
            'book.destroy',
            'peminjaman.index',
            'peminjaman.create',
            'peminjaman.edit',
            'peminjaman.destroy',
        ]);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::find(1);
        $user->assignRole('super-admin');
        $user = User::find(2);
        $user->assignRole('super-admin');
        $user = User::find(3);
        $user->assignRole('admin');

    }
}
