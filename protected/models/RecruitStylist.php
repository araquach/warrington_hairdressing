<?php

/**
 * This is the model class for table "recruit_stylist".
 *
 * The followings are the available columns in table 'recruit_stylist':
 * @property integer $id
 * @property integer $applicant_id
 * @property integer $current_emp
 * @property string $current_emp_des
 * @property integer $qual_school
 * @property string $qual_non_hair
 * @property integer $adex1
 * @property integer $adex2
 * @property integer $adex3
 * @property integer $adex4
 * @property integer $adex5
 * @property integer $adex6
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
class RecruitStylist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecruitStylist the static model class
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
		return 'recruit_stylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('applicant_id, current_emp, current_emp_des, qual_school, qual_non_hair, adex1, adex2, adex3, adex4, adex5, adex6, experience, current_position, client_base, qual_hair, cutting_skills, colour_knowledge, colour_skills, men, extensions_weave, extensions_other, chem_straighten, braz_blow, hair_up, awards, about_you, why_hairdressing, why_us', 'required'),
			array('applicant_id, current_emp, qual_school, adex1, adex2, adex3, adex4, adex5, adex6, experience, current_position, client_base, qual_hair, cutting_skills, colour_knowledge, colour_skills, men, extensions_weave, extensions_other, chem_straighten, braz_blow, hair_up', 'numerical', 'integerOnly'=>true),
			array('current_emp_des', 'length', 'max'=>50),
			array('qual_non_hair', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, applicant_id, current_emp, current_emp_des, qual_school, qual_non_hair, adex1, adex2, adex3, adex4, adex5, adex6, experience, current_position, client_base, qual_hair, cutting_skills, colour_knowledge, colour_skills, men, extensions_weave, extensions_other, chem_straighten, braz_blow, hair_up, awards, about_you, why_hairdressing, why_us', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'applicant_id' => 'Applicant',
			'current_emp' => 'Current Emp',
			'current_emp_des' => 'Current Emp Des',
			'qual_school' => 'Qual School',
			'qual_non_hair' => 'Qual Non Hair',
			'adex1' => 'Adex1',
			'adex2' => 'Adex2',
			'adex3' => 'Adex3',
			'adex4' => 'Adex4',
			'adex5' => 'Adex5',
			'adex6' => 'Adex6',
			'experience' => 'Experience',
			'current_position' => 'Current Position',
			'client_base' => 'Client Base',
			'qual_hair' => 'Qual Hair',
			'cutting_skills' => 'Cutting Skills',
			'colour_knowledge' => 'Colour Knowledge',
			'colour_skills' => 'Colour Skills',
			'men' => 'Men',
			'extensions_weave' => 'Extensions Weave',
			'extensions_other' => 'Extensions Other',
			'chem_straighten' => 'Chem Straighten',
			'braz_blow' => 'Braz Blow',
			'hair_up' => 'Hair Up',
			'awards' => 'Awards',
			'about_you' => 'About You',
			'why_hairdressing' => 'Why Hairdressing',
			'why_us' => 'Why Us',
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
		$criteria->compare('applicant_id',$this->applicant_id);
		$criteria->compare('current_emp',$this->current_emp);
		$criteria->compare('current_emp_des',$this->current_emp_des,true);
		$criteria->compare('qual_school',$this->qual_school);
		$criteria->compare('qual_non_hair',$this->qual_non_hair,true);
		$criteria->compare('adex1',$this->adex1);
		$criteria->compare('adex2',$this->adex2);
		$criteria->compare('adex3',$this->adex3);
		$criteria->compare('adex4',$this->adex4);
		$criteria->compare('adex5',$this->adex5);
		$criteria->compare('adex6',$this->adex6);
		$criteria->compare('experience',$this->experience);
		$criteria->compare('current_position',$this->current_position);
		$criteria->compare('client_base',$this->client_base);
		$criteria->compare('qual_hair',$this->qual_hair);
		$criteria->compare('cutting_skills',$this->cutting_skills);
		$criteria->compare('colour_knowledge',$this->colour_knowledge);
		$criteria->compare('colour_skills',$this->colour_skills);
		$criteria->compare('men',$this->men);
		$criteria->compare('extensions_weave',$this->extensions_weave);
		$criteria->compare('extensions_other',$this->extensions_other);
		$criteria->compare('chem_straighten',$this->chem_straighten);
		$criteria->compare('braz_blow',$this->braz_blow);
		$criteria->compare('hair_up',$this->hair_up);
		$criteria->compare('awards',$this->awards,true);
		$criteria->compare('about_you',$this->about_you,true);
		$criteria->compare('why_hairdressing',$this->why_hairdressing,true);
		$criteria->compare('why_us',$this->why_us,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}