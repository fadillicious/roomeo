<?php

class m160529_121221_insert_other_user extends CDbMigration
{
	public function up()
	{
		$data = [
			[
				'id'=>2,
				'name'=>'Jason Bourne',
				'username'=>'admin',
				'email'=>'admin@gmail.com',
				'password'=>password_hash('admin', PASSWORD_DEFAULT),
				'role_id'=>2,
				'address'=>'-',
				'phone'=>'082122232425',
				'profile_picture'=>'-',
				'is_active'=>true,
			],
			[
				'id'=>3,
				'name'=>'Ahoy Mandela',
				'username'=>'staff',
				'email'=>'staff@gmail.com',
				'password'=>password_hash('staff', PASSWORD_DEFAULT),
				'role_id'=>3,
				'address'=>'-',
				'phone'=>'082122232425',
				'profile_picture'=>'-',
				'is_active'=>true,
			],
		];

		foreach ($data as $value) {
			$this->insert('t_user', $value);
		}
	}

	public function down()
	{
		echo "m160529_121221_insert_other_user does not support migration down.\n";
		return false;
	}

}
