<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::all()->each(function ($user) {

            foreach(range(1, random_int(5, 8)) as $index) {
                Link::factory()->create([
                    'position' => $index,
                    'user_id' => $user->id
                ]);
            }

        });
    }
}
