<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Role, User, Profilescpd};
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
       $super = Role::firstOrCreate(['slug'=>'superadmin'], ['name'=>'Super Admin']);
$admin = Role::firstOrCreate(['slug'=>'admin'], ['name'=>'Admin']);
$cpd   = Role::firstOrCreate(['slug'=>'cpd'], ['name'=>'CPD']);

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
    }
}
