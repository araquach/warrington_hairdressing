<?php

/**
 * This is the model class for table "staff_role".
 *
 * The followings are the available columns in table 'staff_role':
 * @property integer $id
 * @property string $job_description
 * @property integer $target
 * @property integer $commision
 *
 * The followings are the available model relations:
 * @property Staff[] $staffs
 */
class StaffRole extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StaffRole the static model class
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
		return 'staff_role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_description, target, commision', 'required'),
			array('target, commision', 'numerical', 'integerOnly'=>true),
			array('job_description', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, job_description, target, commision', 'safe', 'on'=>'search'),
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
			'staffs' => array(self::HAS_MANY, 'Staff', 'staff_role_id'),
			'roleApplicants' => array(self::HAS_MANY, 'RoleApplicant', 'role_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'job_description' => 'Job Description',
			'target' => 'Target',
			'commision' => 'Commision',
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
		$criteria->compare('job_description',$this->job_description,true);
		$criteria->compare('target',$this->target);
		$criteria->compare('commision',$this->commision);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}