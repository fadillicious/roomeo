<?php

class m160529_093017_create_user_table extends CDbMigration
{
	public function up()
	{
		  $data = [
				[
					'id'=>1,
					'name'=>'Nur Fadillah Fajar',
					'username'=>'roomeo',
					'email'=>'n.fadillahfajar@gmail.com',
					'password'=>password_hash('roomeo', PASSWORD_DEFAULT),
					'role_id'=>1,
					'address'=>'-',
					'phone'=>'082122232425',
					'profile_picture'=>'-',
					'is_active'=>true,
				],

			];


			$this->createTable('t_user', array(
					'id' => 'pk',
					'name' => 'varchar(100) NOT NULL',
					'username' => 'varchar(50) NOT NULL',
					'email' => 'varchar(100) NOT NULL',
					'password' => 'varchar(512) NOT NULL',
					'role_id' => 'integer NOT NULL',
					'address' => 'text',
					'phone' => 'varchar(20)',
					'profile_picture' => 'varchar(255)',
					'is_active' => 'boolean',
			));

			$this->addForeignKey('FK_user_role', 't_user', 'role_id', 't_role', 'id', 'RESTRICT');

			foreach ($data as $value) {
					$this->insert('t_user', $value);
			}
	}

	public function down()
	{
			$this->dropTable('t_user');
	}
}
