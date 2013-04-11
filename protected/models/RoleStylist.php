<?php

class RoleStylist extends RoleApplicant
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RoleStylist the static model class
	 */
	 
	 const CHOOSE = NULL;
	 
	 const EMP_IN = 1;
	 const EMP_OUT = 2;
	 const EMP_UNEMPLOYED = 3;
	  
	 const EXPERIANCE_0TO2 = 1;
	 const EXPERIANCE_2TO4 = 2;
	 const EXPERIANCE_4TO8 = 3;
	 const EXPERIANCE_8TO10 = 4;
	 const EXPERIANCE_10PLUS = 5;
	 const EXPERIANCE_0 = 6;
	 const EXPERIANCE_1 = 7;
	 const EXPERIANCE_2 = 8;
	 
	 const POSITION_GRADUATE = 1;
	 const POSITION_STYLIST = 2;
	 const POSITION_SENIOR = 3;
	 const POSITION_TOP = 4;
	 const POSITION_DIRECTOR = 5;
	 
	 
	 const CLIENTBASE_YES = 1;
	 const CLIENTBASE_OUT = 2;
	 const CLIENTBASE_NO = 0;
	 
	
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'role_applicant';
	}

	
	
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
			'adex1'  => 'Stock Control',
			'adex2' => 'Management',
			'adex3'  => 'Training/educator',
			'adex4'  => 'Reception',
			'adex5'  => 'Marketing',
			'adex6'  => 'Customer Service',
			
		);
	}

		
	public function getEmploymentOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::EMP_IN=>'In hairdressing role',
			self::EMP_OUT=>'In non-hairdressing role',
			self::EMP_UNEMPLOYED=>'Unemployed',
		);
	}
		
	public function getExperianceOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::EXPERIANCE_0=>'None',
			self::EXPERIANCE_1=>'Up to 12 months',
			self::EXPERIANCE_2=>'1 to 2 years',
			//self::EXPERIANCE_0TO2=>'0 to 2 years',
			self::EXPERIANCE_2TO4=>'2 to 4 years',
			self::EXPERIANCE_4TO8=>'4 to 8 years',
			self::EXPERIANCE_8TO10=>'8 to 10 years',
			self::EXPERIANCE_10PLUS=>'10 plus years',
		);
	}
	
	public function getPositionOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::POSITION_GRADUATE=>'Graduate Stylist',
			self::POSITION_STYLIST=>'Stylist',
			self::POSITION_SENIOR=>'Senior Stylist',
			//self::POSITION_TOP=>'Top Stylist',
			self::POSITION_DIRECTOR=>'Director',
		);
	}
	
	public function getClientbaseOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::CLIENTBASE_YES=>'Yes - local',
			self::CLIENTBASE_OUT=>'Yes - other area',
			self::CLIENTBASE_NO=>'No',
		);
	}	
	
	public function getEmploymentText() {
		$employmentOptions=$this->employmentOptions;
		return isset($employmentOptions[$this->current_emp]) ? $employmentOptions[$this->current_emp] : "unknown employment ({$this->current_emp})";
	}
	
	public function getExperianceText() {
		$experianceOptions=$this->experianceOptions;
		return isset($experianceOptions[$this->experience]) ? $experianceOptions[$this->experience] : "unknown position ({$this->experience})";
	}
	
	public function getPositionText() {
		$positionOptions=$this->positionOptions;
		return isset($positionOptions[$this->current_position]) ? $positionOptions[$this->current_position] : "unknown position ({$this->current_position})";
	}
	
	public function getClientbaseText() {
		$clientbaseOptions=$this->clientbaseOptions;
		return isset($clientbaseOptions[$this->client_base]) ? $clientbaseOptions[$this->client_base] : "unknown option ({$this->client_base})";
	}
	
	
}






