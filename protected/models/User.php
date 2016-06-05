<?php

/**
 * This is the model class for table "t_user".
 *
 * The followings are the available columns in table 't_user':
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $role_id
 * @property string $address
 * @property string $phone
 * @property string $profile_picture
 * @property boolean $is_active
 *
 * The followings are the available model relations:
 * @property TRole $role
 */
class User extends CActiveRecord
{

	public $password_repeat;


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required', 'on'=>'create'),
			array('name, username, email, role_id, phone, is_active', 'required'),
			array('role_id, phone', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>100),
			array('username', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>15),
			array('profile_picture', 'file', 'types'=>'jpg, jpeg, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('email', 'email'),
			array('password, password_repeat', 'length', 'min'=>6, 'max'=>512),
      array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'create'),
			array('address, is_active, password_repeat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, username, email, password, role_id, address, phone, profile_picture, is_active', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'role' => array(self::BELONGS_TO, 'Role', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'role_id' => 'Role',
			'address' => 'Address',
			'phone' => 'Phone',
			'profile_picture' => 'Profile Picture',
			'is_active' => 'Is Active',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('profile_picture',$this->profile_picture,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function beforeSave()
	{
     if (!empty($this->password_repeat)) {
				 $this->password = password_hash($this->password_repeat, PASSWORD_DEFAULT);
		 }

     return true;

	}


}
