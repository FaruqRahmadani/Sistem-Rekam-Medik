<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $User = new User;
    $User->nama = 'John Thor';
    $User->username = 'admin';
    $User->password = bcrypt('admin');
    $User->save();
  }
}
