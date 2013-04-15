<?php

/**
 * This is the model class for table "role_applicant".
 *
 * The followings are the available columns in table 'role_applicant':
 * @property integer $id
 * @property string $date
 * @property string $first_name
 * @property string $second_name
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $postcode
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $current_emp
 * @property string $current_emp_des
 * @property string $qual_school
 * @property string $qual_non_hair
 * @property string $adex1 (stock)
 * @property string $adex2 (management)
 * @property string $adex3 (training)
 * @property string $adex4 (reception)
 * @property string $adex5 (marketing)
 * @property string $adex6 (cservice)
 * @property integer $experience
 * @property integer $current_position
 * @property integer $client_base
 * @property integer $qual_hair
 * @property integer $cutting_skills
 * @property integer $colour_knowledge
 * @property integer $colour_skills
 * @property integer $men
 * @property integer $extensions_weave
 * @property integer $extensions_other
 * @property integer $chem_straighten
 * @property integer $braz_blow
 * @property integer $hair_up
 * @property string $awards
 * @property string $about_you
 * @property string $why_hairdressing
 * @property string $why_us
 */
 
class RoleApplicant extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Apprentice the static model class
	 */
	 
	 const CHOOSE = NULL;
	 
	 const QUAL_SHOOL_UPTO4 = 1;
	 const QUAL_SHOOL_4PLUS = 2;
	 const QUAL_SHOOL_ALEVEL = 3;
	 const QUAL_SHOOL_OTHER = 4;
	 
	 const QUAL_HAIR_NVQ1 = 1;
	 const QUAL_HAIR_NVQ2 = 2;
	 const QUAL_HAIR_NVQ3 = 3;
	 const QUAL_HAIR_OTHER = 4;	
	 
	 const LIST_ZERO = 0;
	 const LIST_ONE = 1;
	 const LIST_TWO = 2;
	 const LIST_THREE = 3;
	 const LIST_FOUR = 4;
	 const LIST_FIVE = 5;
	 
	 
	 
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

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, second_name, address1, address3, postcode, email, mobile, current_position, in_salon, qualification_school, qualification_hair, cutting, styling, colouring, men, extensions, chem_straightening, brazil_blow, hair_up, about, why_hairdressing, why_us', 'required'),
			array('age, current_position, in_salon, qualification_school, qualification_hair, cutting, styling, colouring, men, extensions, chem_straightening, brazil_blow, hair_up', 'numerical', 'integerOnly'=>true),
			array('first_name, second_name, address1, address2, address3, email, salon_name', 'length', 'max'=>256),
			array('postcode', 'length', 'max'=>56),
			array('phone, mobile', 'length', 'max'=>11),
			array('phone, mobile', 'numerical'),
			array('email', 'email'),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('apprentice_id, date, first_name, second_name, age, address1, address2, address3, postcode, email, phone, mobile, current_position, in_salon, salon_name, qualification_school, qualification_hair, cutting, styling, colouring, men, extensions, chem_straightening, brazil_blow, hair_up, about, why_hairdressing, why_us', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Applicant',
			'date' => 'Date',
			'first_name' => 'First Name',
			'second_name' => 'Second Name',
			'age' => 'Age',
			'address1' => 'Address 1',
			'address2' => 'Address 2',
			'address3' => 'Town',
			'postcode' => 'Postcode',
			'email' => 'Email Address',
			'phone' => 'Phone Number',
			'mobile' => 'Mobile Number',
			
			'cutting_skills' => 'Cutting Skills',
			'colour_knowledge' => 'Colour Knowledge',
			'colour_skills' => 'Colour Skills',
			'men' => 'Men\'s Hairdressing',
			'extensions_weave' => 'Extensions: Weave',
			'extensions_other' => 'Extensions: Other',
			'chem_straighten' => 'Chemical Straightening',
			'braz_blow' => 'Brazilian Blowdry',
			'hair_up' => 'Hair Up Styling',
			'awards' => 'Please state any hairdressing awards',
			'about_you' => 'Tell us a bit about yourself',
			'why_hairdressing' => 'Why did you choose to be a hairdresser?',
			'why_us' => 'Why do you want to join the team?',
			
			'qual_school'  => 'What qualification did you achieve at school?',
			'qual_hair' => 'Are you currently doing any hairdressing qualifications?',
			'qual_non_hair'  => 'Please state any non-hairdressing qualifications?',
			
			'current_emp' => 'What is your current employment status?',
			'current_emp_des'  => 'If employed, please tell us where',
			'salon_name' => 'Please state your current workplace (if applicable)',
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

		$criteria->compare('apprentice_id',$this->apprentice_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('address3',$this->address3,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('current_position',$this->current_position);
		$criteria->compare('in_salon',$this->in_salon);
		$criteria->compare('salon_name',$this->salon_name,true);
		$criteria->compare('qualification_school',$this->qualification_school);
		$criteria->compare('qualification_hair',$this->qualification_hair);
		$criteria->compare('cutting',$this->cutting);
		$criteria->compare('styling',$this->styling);
		$criteria->compare('colouring',$this->colouring);
		$criteria->compare('men',$this->men);
		$criteria->compare('extensions',$this->extensions);
		$criteria->compare('chem_straightening',$this->chem_straightening);
		$criteria->compare('brazil_blow',$this->brazil_blow);
		$criteria->compare('hair_up',$this->hair_up);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('why_hairdressing',$this->why_hairdressing,true);
		$criteria->compare('why_us',$this->why_us,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getListOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::LIST_ONE=>'1',
			self::LIST_TWO=>'2',
			self::LIST_THREE=>'3',
			self::LIST_FOUR=>'4',
			self::LIST_FIVE=>'5',
			self::LIST_ZERO=>'I don\'t do this service',
		);
	}
	
	
	public function getQualSchoolOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUAL_SHOOL_UPTO4=>'Up to 4 GCSE\'s',
			self::QUAL_SHOOL_4PLUS=>'4 or more GCSE\'s',
			self::QUAL_SHOOL_ALEVEL=>'1 or more A Level\'s',
			self::QUAL_SHOOL_OTHER=>'Other',
		);
	}
	
	public function getQualSchoolText() {
		$qualSchoolOptions=$this->qualSchoolOptions;
		return isset($qualSchoolOptions[$this->qualification_school]) ? $qualSchoolOptions[$this->qualification_school] : "unknown qualification ({$this->qualification_school})";
	}
	
	
	public function getQualHairOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUAL_HAIR_NVQ1=>'Working towards NVQ Level 1',
			self::QUAL_HAIR_NVQ2=>'Working towards NVQ Level 2',
			self::QUAL_HAIR_NVQ3=>'Working towards NVQ Level 3',
			self::QUAL_HAIR_OTHER=>'Other',
		);
	}
	
	public function getQualHairText() {
		$qualHairOptions=$this->qualHairOptions;
		return isset($qualHairOptions[$this->qualification_hair]) ? $qualHairOptions[$this->qualification_hair] : "unknown qualification ({$this->qualification_hair})";
	}
	
}






