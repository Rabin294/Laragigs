<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();       
        
        // Listing::create([
        //         'title'=>'Laravel Senior Developer',
        //         'tags'=>'Laravel Javascript',
        //         'company'=>'Acme Corp',
        //         'location'=>'Boston, MA',
        //         'email'=>'email11@email.com',
        //         'website'=>'https:/www.acme.com',
        //         'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae quidem repellat excepturi, quis distinctio saepe? Deserunt consequuntur, delectus est vero facere facilis voluptatem velit, commodi corporis, rerum aliquam laborum.',

        // ]);

        //     Listing::create([
        //         'title'=>'Full-Stack Engineer',
        //         'tags'=>'Laravel,backend,api',
        //         'company'=>'Acme Corp',
        //         'location'=>'Boston, MA',
        //         'email'=>'email11@email.com',
        //         'website'=>'https:/www.acme.com',
        //         'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae quidem repellat excepturi, quis distinctio saepe? Deserunt consequuntur, delectus est vero facere facilis voluptatem velit, commodi corporis, rerum aliquam laborum.',
        //     ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
