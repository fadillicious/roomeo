<?php

class m160529_090311_create_roles_table extends CDbMigration
{
	public function up()
	{
		  $data = [
				[
					'id'=>1,
					'code'=>'SUPER_ADMIN',
					'name'=>'Super Administrator',
					'description'=>'Super Admin can do anything',
				],
				[
					'id'=>2,
					'code'=>'ADMIN',
					'name'=>'Administrator',
					'description'=>'Admin just can create booking room and see schedule room',
				],
				[
					'id'=>3,
					'code'=>'STAFF',
					'name'=>'Staff',
					'description'=>'staff just can see schedule room',
				],
			];


			$this->createTable('t_role', array(
					'id' => 'pk',
					'code' => 'varchar(50) NOT NULL',
					'name' => 'varchar(100) NOT NULL',
					'description' => 'text',
			));

			foreach ($data as $value) {
					$this->insert('t_role', $value);
			}
	}

	public function down()
	{
			$this->dropTable('t_role');
	}
}
