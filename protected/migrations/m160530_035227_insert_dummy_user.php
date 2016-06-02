<?php

class m160530_035227_insert_dummy_user extends CDbMigration
{
	public function up()
	{
		for ($i=4; $i < 25; $i++) {
				$this->insert('t_user', [
					'id'=>$i,
					'name'=>"Dummy {$i}",
					'username'=>"dummy{$i}",
					'email'=>'admin@gmail.com',
					'password'=>password_hash("dummy{$i}", PASSWORD_DEFAULT),
					'role_id'=>3,
					'address'=>'-',
					'phone'=>'082122232425',
					'profile_picture'=>'-',
					'is_active'=>true,
				]);
		}
	}

	public function down()
	{
		echo "m160530_035227_insert_dummy_user does not support migration down.\n";
		return false;
	}

}
