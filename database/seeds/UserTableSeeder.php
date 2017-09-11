<?php

use Illuminate\Database\Seeder;
use \SON\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'admin@user.com',
            'enrolment' => 100001
        ])->each(function (User $user){
            $profile = factory(\SON\Models\UserProfiles::class)->make();
            $user->profile()->create($profile->toArray());
            User::assignRole($user, User::ROLE_ADMIN);
            $user->save();
        });

        factory(User::class, 100)->create()->each(function (User $user){
            if(!$user->userable){
                $profile = factory(\SON\Models\UserProfiles::class)->make();
                $user->profile()->create($profile->toArray());
                User::assignRole($user, User::ROLE_STUDENT);
                User::assignEnrolment(new User(), User::ROLE_STUDENT);
                $user->save();
            }
        });

        factory(User::class, 100)->create()->each(function (User $user){
            if(!$user->userable) {
                $profile = factory(\SON\Models\UserProfiles::class)->make();
                $user->profile()->create($profile->toArray());
                User::assignRole($user, User::ROLE_TEACHER);
                User::assignEnrolment(new User(), User::ROLE_TEACHER);
                $user->save();
            }
        });


    }
}
