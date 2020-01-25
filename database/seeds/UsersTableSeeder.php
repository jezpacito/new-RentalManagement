<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Type;
use App\Room;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('role_user')->truncate();
        // $adminRole= Role::where('name','admin')->first();
        // $staffRole= Role::where('name','staff')->first();
       

        $admin = User::create([
            'fname'=> 'Admin',
            'mname'=> 'Admin',
            'lname'=> 'Admin',
            'email'=> 'admin@admin.com',
            'type_id' => 3,
            'password'=> Hash::make('password')
        ]);

        $staff = User::create([
            'fname'=> 'Staff',
            'mname'=> 'Staff',
            'lname'=> 'Staff',
            'email'=> 'staff@staff.com',
            'type_id' => 2,
            'password'=> Hash::make('password')
        ]);
      
   

          User::create([
            'fname'=> 'Jaspher',
            'mname'=> 'Bamo',
            'lname'=> 'Tuscano',
            'email'=> 'tenant1@staff.com',
            'type_id' => 1,
            'phone_no' => 834747474,
            'password'=> Hash::make('password')
        ]);

        
        User::create([
            'fname'=> 'Jezreel',
            'mname'=> 'Villaruel',
            'lname'=> 'Gatmaitan',
            'email'=> 'tenant2@staff.com',
            'phone_no' => 7474929,
            'type_id' => 1,
            'password'=> Hash::make('password')
        ]);
     

        Room::create([
            'room_name'=> 'Durian',
            'room_type'=> 'Single',
            'price'=> "3000",
            'status'=> "vacant",
           
          
        ]);
      
      
   
        // $admin->roles()->attach($adminRole);
        // $staff->roles()->attach($staffRole);
       
        Type::insert([
            [
             'type'=> 'tenant',
            ],
            [
             'type'=> 'staff',
            ],
           [
            'type'=> 'admin',
           ]
         ]);
 
    }
}
