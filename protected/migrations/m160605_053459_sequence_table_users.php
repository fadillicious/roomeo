<?php

class m160605_053459_sequence_table_users extends CDbMigration
{
	public function up()
	{
		$this->execute("select setval('t_user_id_seq'::regclass,
		(select max(id) from t_user))");
	}

	public function down()
	{
		echo "m160605_053459_sequence_table_users does not support migration down.\n";
		return false;
	}

}
