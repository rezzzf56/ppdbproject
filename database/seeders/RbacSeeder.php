<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Role, Permission, User, Profile};
use Illuminate\Support\Facades\Hash;

class RbacSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $super = Role::firstOrCreate(['slug'=>'superadmin'], ['name'=>'SuperAdmin']);
        $admin = Role::firstOrCreate(['slug'=>'admin'], ['name'=>'Admin']);
        $cpd   = Role::firstOrCreate(['slug'=>'cpd'], ['name'=>'CPD']);

        // Permissions (opsional, contoh)
        $perms = collect([
            ['slug'=>'manage_users','name'=>'Kelola User'],
            ['slug'=>'verify_cpd','name'=>'Verifikasi CPD'],
            ['slug'=>'fill_form','name'=>'Isi Formulir'],
            ['slug'=>'upload_berkas','name'=>'Upload Berkas'],
            ['slug'=>'view_result','name'=>'Lihat Hasil Seleksi'],
        ])->map(fn($p) => Permission::firstOrCreate(['slug'=>$p['slug']], ['name'=>$p['name']]));

        // Mapping role -> permission
        $super->permissions()->sync($perms->pluck('id'));
        $admin->permissions()->sync(
            $perms->whereIn('slug', ['verify_cpd','view_result'])->pluck('id')
        );
        $cpd->permissions()->sync(
            $perms->whereIn('slug', ['fill_form','upload_berkas','view_result'])->pluck('id')
        );

        // Buat user contoh
        $u1 = User::firstOrCreate(['email'=>'super@ppdb.test'], [
            'name'=>'Super Admin', 'password'=>Hash::make('password')
        ]);
        $u1->roles()->syncWithoutDetaching([$super->id]);

        $u2 = User::firstOrCreate(['email'=>'admin@ppdb.test'], [
            'name'=>'Admin PPDB', 'password'=>Hash::make('password')
        ]);
        $u2->roles()->syncWithoutDetaching([$admin->id]);

        $u3 = User::firstOrCreate(['email'=>'cpd@ppdb.test'], [
            'name'=>'Calon Peserta', 'password'=>Hash::make('password')
        ]);
        $u3->roles()->syncWithoutDetaching([$cpd->id]);
        Profile::firstOrCreate(['user_id'=>$u3->id], [
            'nama_lengkap'=>'Calon Peserta Didik',
            'status_verifikasi'=>'pending'
        ]);
    }
}
