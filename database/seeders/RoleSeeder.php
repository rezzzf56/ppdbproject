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
       $super = Role::firstOrCreate(['slug'=>'superadmin'], ['name'=>'Super Admin']);
$admin = Role::firstOrCreate(['slug'=>'admin'], ['name'=>'Admin']);
$cpd   = Role::firstOrCreate(['slug'=>'cpd'], ['name'=>'CPD']);
        // Mapping role -> permission

        // Buat user contoh dengan role
        $u1 = User::firstOrCreate(['email'=>'super@ppdb.test'], [
            'password'=>Hash::make('passwordsuper')
        ]);
        $u1->roles()->syncWithoutDetaching([$super->id]);

        $u2 = User::firstOrCreate(['email'=>'admin@ppdb.test'], [
            'password'=>Hash::make('passwordadmin')
        ]);
        $u2->roles()->syncWithoutDetaching([$admin->id]);

        $u3 = User::firstOrCreate(['email'=>'cpd@ppdb.test'], [
            'password'=>Hash::make('passwordcpd')
        ]);
        $u3->roles()->syncWithoutDetaching([$cpd->id]);
        Profiles::firstOrCreate(['user_id'=>$u3->id], [
            'nama_lengkap'=>'Calon Peserta Didik',
        ]);
    }
}
