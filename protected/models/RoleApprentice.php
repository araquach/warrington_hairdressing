<?php

class RoleApprentice extends RoleApplicant
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RoleApprentice the static model class
	 */
	 
	 const CHOOSE = NULL;
	 
	 const POSITION_Y1 = 1;
	 const POSITION_Y2 = 2;
	 const POSITION_OTHER = 3;
	 const POSITION_COL_1 = 4;
	 const POSITION_COL_2 = 5;
	 const POSITION_SCHOOL = 6;
	 
	 const IN_SALON_YES = 1;
	 const IN_SALON_OTHER = 2;
	 const IN_SALON_NO = 0;
	 
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
		
		'adex1'  => '',
		'adex2' => '',
		'adex3'  => '',
		'adex4'  => '',
		'adex5'  => '',
		'adex6'  => '',
		
		
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	
		
	public function getPositionOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::POSITION_Y1=>'1st Year Apprentice',
			self::POSITION_Y2=>'Second Year Apprentice',
			self::POSITION_COL_1=>'Level 1 College',
			self::POSITION_COL_2=>'Level 2 College',
			self::POSITION_SCHOOL=>'School Link',
			self::POSITION_OTHER=>'Other',
		);
	}
	
	public function getInSalonOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::IN_SALON_YES=>'In a salon',
			self::IN_SALON_OTHER=>'Other industry',
			self::IN_SALON_NO=>'Not employed',
		);
	}
	
	public function getPositionText() {
		$positionOptions=$this->positionOptions;
		return isset($positionOptions[$this->current_position]) ? $positionOptions[$this->current_position] : "unknown position ({$this->current_position})";
	}
	
	public function getInSalonText() {
		$inSalonOptions=$this->inSalonOptions;
		return isset($inSalonOptions[$this->in_salon]) ? $inSalonOptions[$this->in_salon] : "unknown salon ({$this->in_salon})";
	}
}






