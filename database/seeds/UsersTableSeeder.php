<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = factory(App\User::class)->create([
            'name' => 'Branislav',
            'email' => 'b@gmail.com',
            'password' => bcrypt(123456),
            'verified' => true,
            'email_token' => '',
            ]);

        $user2 = factory(App\User::class)->create([
            'email' => 'p@gmail.com',
            ]);

       factory(App\Profile::class)->create([
            'user_id' => $user2->id
        ]);
    }
}
