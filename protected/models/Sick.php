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
			array('staff_id, sick_hours, description, date_sick_from', 'required'),
			array('staff_id, sick_hours', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>50),
			array('date_sick_from', 'validateBeforeToday'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, sick_hours, description, date_sick_from, date_deducted', 'safe', 'on'=>'search'),
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
			'sick_hours' => 'Sick Days',
			'description' => 'Description',
			'date_sick_from' => 'Date Sick',
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
		$criteria->compare('date_deducted',$this->date_deducted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		
	public function hourConverter()
	{
		$conversion = $this->sick_hours;
		
		$conversion = $conversion / 8;
		
		return $conversion;
	}
	
	public function validateBeforeToday($attr, $params)
	{
		$date = date('Y-m-d');
	
		if($this->isNewRecord)
		{
			if ($this->date_sick_from > $date)
			{
				$this->addError('date_sick_from', 'Has to be today or earlier.');
			}
			
		}
	}
		
}