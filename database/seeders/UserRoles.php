<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prasun=User::create([
            'name' => "Prasun Neupane",
            'username' => 'prasunjr',
            'email' => 'prasunneupane14@gmail.com',
            'password' => bcrypt('prasun@123'),
            'phone'=>'9860625433',
            'contactPerson'=>'',
            'isSuperAdmin' => true,
            'isAdmin' => true,
        ]);

        $superAdmin = Role::create([
            'name' => 'SuperAdmin',
            'details' => 'All Access'
        ]);
        $addFieldVisit = Role::create([
            'name' => 'AddFieldVisit',
            'details' => 'Add Field Visit'
        ]);
        
        $prasun->roles()->attach($superAdmin);
        $prasun->roles()->attach($addFieldVisit);
    }
}
