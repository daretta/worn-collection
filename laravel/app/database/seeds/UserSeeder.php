<?php

class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "bati",
        "password" => Hash::make("batigol"),
        "email"    => "gabriel.batistuta@worncollection.dev"
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }
}
