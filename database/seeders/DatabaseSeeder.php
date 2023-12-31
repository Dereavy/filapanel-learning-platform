<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     StudentSeeder::class,
        //     CourseSeeder::class,
        //     CertificateSeeder::class,
        //     InstructorSeeder::class,
        //     LessonSeeder::class,
        // ]);

        $isadmin = User::where('name',"Alex KING")
            ->where('email','dereavy@gmail.com')->exists();
        if(!$isadmin){
            $superAdmin = User::create([
                'name' => "Alex KING",
                'email' => 'dereavy@gmail.com',
                'password' => Hash::make('dereavyAbiofore2022'),
            ]);
            // $superAdmin->assignRole('super-admin');
        }else{
            $user = User::where('name',"Alex KING")->where('email','dereavy@gmail.com')->first();
            $user->password = Hash::make('dereavyAbiofore2022');
            $user->save();
        }

        $isadmin = User::where('name',"Sophie KING")
            ->where('email','sofieking83@gmail.com')->exists();
        if(!$isadmin){
            $superAdmin2 = User::create([
                'name' => "Sophie KING",
                'email' => 'sofieking83@gmail.com',
                'password' => Hash::make('!Abiofore2022'),
            ]);
            // $superAdmin2->assignRole('super-admin');    
        }

        $isadmin = User::where('name',"Admin")
            ->where('email','admin@abiofore.com')->exists();
        if(!$isadmin){
            $superAdmin2 = User::create([
                'name' => "Admin",
                'email' => 'admin@abiofore.com',
                'password' => Hash::make('!Abiofore2022'),
            ]);
            // $superAdmin2->assignRole('super-admin');    
        }
    }
}
