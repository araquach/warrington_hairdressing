<?php

/**
 * This is the model class for table "wage".
 *
 * The followings are the available columns in table 'wage':
 * @property integer $id
 * @property integer $staff_id
 * @property integer $hourly_wage
 * @property integer $additional_wage
 *
 * The followings are the available model relations:
 * @property Staff $staff
 */
class Wage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wage the static model class
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
		return 'wage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hourly_wage, additional_wage', 'required'),
			array('hourly_wage, additional_wage', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, hourly_wage, additional_wage', 'safe', 'on'=>'search'),
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
			'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'staff_id' => 'Staff Member',
			'hourly_wage' => 'Hourly Wage',
			'additional_wage' => 'Additional Wage',
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
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('hourly_wage',$this->hourly_wage);
		$criteria->compare('additional_wage',$this->additional_wage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}