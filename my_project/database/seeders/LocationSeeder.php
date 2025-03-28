<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use Carbon\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Location::insert([
            [
                'name' => 'Glengarriff Woods Nature Reserve',
                'tree_type' => 'Oak',
                'description' => 'A magical woodland with ancient oak trees, mossy rocks, and a lovely river. Great for a peaceful walk!',
                'longitude' => 51.75,
                'latitude' => 9.55, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Killarney National Park',
                'tree_type' => 'Yew',
                'description' => 'Home to the famous oak woodlands and stunning lakes. Its like stepping into a fairy tale!',
                'longitude' => 52.05,
                'latitude' => 9.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ballycroy National Park',
                'tree_type' => 'Birch',
                'description' => 'Although know for its boglands, it also contains beautiful woodlands, it is a wild and open space with amazing views.',
                'longitude' => 54.05, 
                'latitude' => 9.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Avondale Forest Park',
                'tree_type' => 'Scots Pine',
                'description' => 'Famous for its tall trees and river walks. Its a great place to explore nature and learn about trees.',
                'longitude' => 52.92,
                'latitude' => 6.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Glenariff Forest Park',
                'tree_type' => 'Ash',
                'description' => 'Known as the "Queen of the Glens," it has beautiful waterfalls and trails through the woods.',
                'longitude' => 54.98,
                'latitude' => 6.02,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lough Key Forest',
                'tree_type' => 'Hazel',
                'description' => 'This park has woodland trails, a lake, and even a castle ruin. Its perfect for adventures!',
                'longitude' => 53.97,
                'latitude' => 8.24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Derryclare Nature Reserve',
                'tree_type' => 'Oak',
                'description' => 'a beautiful remote area, with stunning lake and mountain views.',
                'longitude' => 53.42,
                'latitude' => 9.92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portumna Forest Park',
                'tree_type' => 'Pine',
                'description' => 'Located on the shore of Lough Derg this forest has many walking and cycling trails.',
                'longitude' => 53.09,
                'latitude' => 8.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tollymore Forest Park',
                'tree_type' => 'Beech',
                'description' => 'A magical forest with old stone bridges, rivers, and lots of history.',
                'longitude' => 54.25,
                'latitude' => 5.95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Burren National Park',
                'tree_type' => 'Thorn',
                'description' => 'Though known for its limestone, it also has Hazel woods, and many unique plants, with beautiful scenery.',
                'longitude' => 53.03,
                'latitude' => 9.17,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
