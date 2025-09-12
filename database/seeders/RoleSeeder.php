<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Role, Permission, User, Profiles};
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $super = Role::firstOrCreate(['slug'=>'superadmin'], ['username'=>'Super Admin']);
        $admin = Role::firstOrCreate(['slug'=>'admin'], ['username'=>'Admin']);
        $cpd   = Role::firstOrCreate(['slug'=>'cpd'], ['username'=>'CPD']);

        // Permissions (opsional)
        $perms = collect([
            ['slug'=>'manage_admin','username'=>'Kelola Admin'],
            ['slug'=>'manage_cpd','username'=>'Kelola CPD'],
            ['slug'=>'view_result','username'=>'Lihat Hasil Seleksi'],
            ['slug'=>'fill_form','username'=>'Isi Formulir'],
            ['slug'=>'upload_berkas','username'=>'Upload Berkas'],
        ])->map(fn($p) => Permission::firstOrCreate(['slug'=>$p['slug']], ['username'=>$p['username']]));

        // Mapping role -> permission
        $super->permissions()->sync($perms->pluck('id')); // superadmin full akses
        $admin->permissions()->sync(
            $perms->whereIn('slug', ['manage_cpd','view_result'])->pluck('id')
        );
        $cpd->permissions()->sync(
            $perms->whereIn('slug', ['fill_form','upload_berkas','view_result'])->pluck('id')
        );

        // Buat user contoh dengan role
        $u1 = User::firstOrCreate(['email'=>'super@ppdb.test'], [
            'username'=>'Super Admin',
            'password'=>Hash::make('password')
        ]);
        $u1->roles()->syncWithoutDetaching([$super->id]);

        $u2 = User::firstOrCreate(['email'=>'admin@ppdb.test'], [
            'username'=>'Admin PPDB',
            'password'=>Hash::make('password')
        ]);
        $u2->roles()->syncWithoutDetaching([$admin->id]);

        $u3 = User::firstOrCreate(['email'=>'cpd@ppdb.test'], [
            'username'=>'Calon Peserta',
            'password'=>Hash::make('password')
        ]);
        $u3->roles()->syncWithoutDetaching([$cpd->id]);
        Profiles::firstOrCreate(['user_id'=>$u3->id], [
            'nama_lengkap'=>'Calon Peserta Didik',
        ]);
    }
}
