<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // Get all users' id except id == 1
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // Follow all users except user's id == 1
        $user->follow($follower_ids);

        // All users follow user whose id == 1
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
