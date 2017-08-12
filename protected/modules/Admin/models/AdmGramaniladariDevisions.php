<?php

/**
 * This is the model class for table "adm_gramaniladari_devisions".
 *
 * The followings are the available columns in table 'adm_gramaniladari_devisions':
 * @property integer $grama_id
 * @property integer $ref_sec_dev_id
 * @property string $grama_name
 */
class AdmGramaniladariDevisions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'adm_gramaniladari_devisions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_sec_dev_id, grama_name', 'required'),
			array('ref_sec_dev_id', 'numerical', 'integerOnly'=>true),
			array('grama_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('grama_id, ref_sec_dev_id, grama_name', 'safe', 'on'=>'search'),
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
			'grama_id' => 'Grama',
			'ref_sec_dev_id' => 'Ref Sec Dev',
			'grama_name' => 'Grama Name',
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

		$criteria->compare('grama_id',$this->grama_id);
		$criteria->compare('ref_sec_dev_id',$this->ref_sec_dev_id);
		$criteria->compare('grama_name',$this->grama_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdmGramaniladariDevisions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
