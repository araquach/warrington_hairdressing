<?php

/**
 * This is the model class for table "sick".
 *
 * The followings are the available columns in table 'sick':
 * @property integer $id
 * @property integer $staff_id
 * @property integer $sick_hours
 * @property integer $description
 * @property integer $date_sick_from
 * @property integer $date_sick_to
 * @property integer $date_deducted
 *
 * The followings are the available model relations:
 * @property Staff $staff
 */
class Sick extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sick the static model class
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
		return 'sick';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sick_hours, description, date_sick_from, date_sick_to', 'required'),
			array('staff_id, sick_hours, description', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, sick_hours, description, date_sick_from, date_sick_to, date_deducted', 'safe', 'on'=>'search'),
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
			'sick_hours' => 'Sick Days (in hours)',
			'description' => 'Description',
			'date_sick_from' => 'Date Sick From',
			'date_sick_to' => 'Date Sick To',
			'date_deducted' => 'Date Deducted',
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
		$criteria->compare('sick_hours',$this->sick_hours);
		$criteria->compare('description',$this->description);
		$criteria->compare('date_sick_from',$this->date_sick_from);
		$criteria->compare('date_sick_to',$this->date_sick_to);
		$criteria->compare('date_deducted',$this->date_deducted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}