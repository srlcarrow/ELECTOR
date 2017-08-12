<?php

/**
 * This is the model class for table "reg_gramasewaka".
 *
 * The followings are the available columns in table 'reg_gramasewaka':
 * @property integer $gramasewaka_id
 * @property string $gramasewaka_name
 * @property string $gramasewaka_reference_no
 * @property string $gramasewaka_address
 * @property string $gramasewaka_tel
 * @property string $gramasewaka_mobi
 * @property string $gramasewaka_email
 * @property string $gramasewaka_identycard_no
 * @property integer $ref_gramaniladhari_devision
 */
class RegGramasewaka extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reg_gramasewaka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gramasewaka_name, gramasewaka_address, gramasewaka_tel, gramasewaka_mobi, gramasewaka_email, gramasewaka_identycard_no', 'required'),
			array('ref_gramaniladhari_devision', 'numerical', 'integerOnly'=>true),
			array('gramasewaka_name, gramasewaka_reference_no, gramasewaka_tel, gramasewaka_mobi, gramasewaka_email, gramasewaka_identycard_no', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('gramasewaka_id, gramasewaka_name, gramasewaka_reference_no, gramasewaka_address, gramasewaka_tel, gramasewaka_mobi, gramasewaka_email, gramasewaka_identycard_no, ref_gramaniladhari_devision', 'safe', 'on'=>'search'),
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
			'gramasewaka_id' => 'Gramasewaka',
			'gramasewaka_name' => 'Gramasewaka Name',
			'gramasewaka_reference_no' => 'Gramasewaka Reference No',
			'gramasewaka_address' => 'Gramasewaka Address',
			'gramasewaka_tel' => 'Gramasewaka Tel',
			'gramasewaka_mobi' => 'Gramasewaka Mobi',
			'gramasewaka_email' => 'Gramasewaka Email',
			'gramasewaka_identycard_no' => 'Gramasewaka Identycard No',
			'ref_gramaniladhari_devision' => 'Ref Gramaniladhari Devision',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('gramasewaka_id',$this->gramasewaka_id);
		$criteria->compare('gramasewaka_name',$this->gramasewaka_name,true);
		$criteria->compare('gramasewaka_reference_no',$this->gramasewaka_reference_no,true);
		$criteria->compare('gramasewaka_address',$this->gramasewaka_address,true);
		$criteria->compare('gramasewaka_tel',$this->gramasewaka_tel,true);
		$criteria->compare('gramasewaka_mobi',$this->gramasewaka_mobi,true);
		$criteria->compare('gramasewaka_email',$this->gramasewaka_email,true);
		$criteria->compare('gramasewaka_identycard_no',$this->gramasewaka_identycard_no,true);
		$criteria->compare('ref_gramaniladhari_devision',$this->ref_gramaniladhari_devision);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegGramasewaka the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
