
<?php

class AccountsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Account::truncate();
		$accounts  = Account::create(array(
				'id' => 'admin'.str_random(8),
				'email' => 'mail.sunrock@gmail.com',
				'username' => 'mail.sunrock@gmail.com',
				'password' => Hash::make('Admin123!'),
				'usergroupid' => 1,
				'title' => 'MR',
				'firstname' => 'Admin',
				'middleName' => 'Of',
				'lastName' => 'Sunrock',
				'contactnumber' => '09056057553',
				'confirmationcode' => 'Looll',
				'active' => 1
			));
		$accounts->save();
	}
}
