<?php

/**
 * This is the model class for table "staff".
 *
 * The followings are the available columns in table 'staff':
 * @property integer $id
 * @property integer $person_id
 * @property integer $iris
 * @property integer $salon_id
 * @property integer $staff_role_id
 * @property string $dob
 * @property string $username
 * @property string $password
 * @property integer $working_hours_week
 * @property integer $working_hours_month
 * @property integer $holiday_entitlement
 * @property integer $active
 * @property integer $role
 *
 * The followings are the available model relations:
 * @property Person $person
 * @property Holiday[] $holidays
 * @property Lieu[] $lieus
 * @property Sick[] $sicks
 * @property Salon $salon
 * @property StaffRole $staffRole
 * @property Turnover[] $turnovers
 * @property Wage[] $wages
 */
class Staff extends SalonActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Staff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iris, salon_id, staff_role_id, dob, username, password, working_hours_week, holiday_entitlement, active, role', 'required'),
			array('iris, salon_id, staff_role_id, working_hours_week, holiday_entitlement, active', 'numerical', 'integerOnly'=>true),
			array('dob', 'length', 'max'=>20),
			array('username', 'unique'),
			array('username', 'length', 'max'=>22),
			array('password', 'length', 'max'=>44),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, iris, salon_id, staff_role_id, dob, username, password, working_hours_week, working_hours_month, holiday_entitlement, active, role', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
			'holidays' => array(self::HAS_MANY, 'Holiday', 'staff_id'),
			'lieus' => array(self::HAS_MANY, 'Lieu', 'staff_id'),
			'sicks' => array(self::HAS_MANY, 'Sick', 'staff_id'),
			'salon' => array(self::BELONGS_TO, 'Salon', 'salon_id'),
			'staffRole' => array(self::BELONGS_TO, 'StaffRole', 'staff_role_id'),
			'turnovers' => array(self::HAS_MANY, 'Turnover', 'staff_id'),
			'wages' => array(self::HAS_MANY, 'Wage', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'person_id' => 'Person',
			'iris' => 'Iris ID',
			'salon_id' => 'Salon ID',
			'staff_role_id' => 'Staff Role',
			'dob' => 'Birth Date',
			'username' => 'Username',
			'password' => 'Password',
			'working_hours_week' => 'Working Hours a Week',
			'working_hours_month' => 'Working Hours a Month',
			'holiday_entitlement' => 'Holiday Entitlement',
			'active' => 'Active Employee (Y/N)',
			'role' => 'User Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('iris',$this->iris);
		$criteria->compare('salon_id',$this->salon_id);
		$criteria->compare('staff_role_id',$this->staff_role_id);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('working_hours_week',$this->working_hours_week);
		$criteria->compare('working_hours_month',$this->working_hours_month);
		$criteria->compare('holiday_entitlement',$this->holiday_entitlement);
		$criteria->compare('active',$this->active);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}