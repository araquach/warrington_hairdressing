<?php

/**
 * This is the model class for table "recruit_applicant".
 *
 * The followings are the available columns in table 'recruit_applicant':
 * @property integer $id
 * @property integer $person_id
 * @property integer $salon_id
 * @property string $date
 *
 * The followings are the available model relations:
 * @property Person $person
 * @property Salon $salon
 * @property RecruitStylist[] $recruitStylists
 */
class RecruitApplicant extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecruitApplicant the static model class
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
		return 'recruit_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('person_id, salon_id, date', 'required'),
			array('person_id, salon_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, person_id, salon_id, date', 'safe', 'on'=>'search'),
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
			'salon' => array(self::BELONGS_TO, 'Salon', 'salon_id'),
			'recruitStylists' => array(self::HAS_MANY, 'RecruitStylist', 'applicant_id'),
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
			'salon_id' => 'Salon',
			'date' => 'Date',
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
		$criteria->compare('salon_id',$this->salon_id);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}