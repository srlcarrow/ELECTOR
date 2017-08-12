<?php

class SettingsController extends Controller {

    public function init() {
        $this->redirectToLogin();
    }

//Provinces And Districts - Start
    public function actionViewProvince() {
        $this->render('/Settings/Province/viewProvince');
    }

    public function actionViewProvinceData() {
        $provinces = AdmProvince::model()->findAll();
        $this->renderPartial('/Settings/Province/ajaxLoad/viewProvinceData', array('provinces' => $provinces));
    }

    public function actionSaveProvince() {
        try {
            if ($_POST['hiddenId'] == 0) {
                $model = new AdmProvince();
            } else {
                $model = AdmProvince::model()->findByPk($_POST['hiddenId']);
            }
            $model->province_name = $_POST['name'];

            if ($model->save(false)) {
                $provinceId = $model->province_id;
                $data = $_POST['hiddenDistrict'];
                for ($i = 0; $i < count($data); $i++) {
                    if ($data[$i] == 0) {
                        $district = new AdmDistrict();
                    } else {
                        $district = AdmDistrict::model()->findByPk($data[$i]);
                    }
                    $district->ref_province_id = $provinceId;
                    $district->district_name = $_POST['districtName'][$i];
                    $district->save(false);
                }

                $this->msgHandler(200, "Successfully Saved...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

    public function actionDeleteProvince() {
        try {
            $id = $_POST['id'];
            $model = new AdmCategory();
            if ($model->deleteByPk($id)) {
                $subCategory = new AdmSubcategory();
                $subCategory->deleteAllByAttributes(array('ref_cat_id' => $id));
                $this->msgHandler(200, "Deleted Successfully...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

    public function actionDeleteDistrict() {
        try {
            $id = $_POST['id'];
            $model = new AdmDistrict();
            if ($model->deleteByPk($id)) {
                $this->msgHandler(200, "Deleted Successfully...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

    public function actionGetEditProvinceData() {
        try {
            $id = $_POST['id'];
            $provinceData = AdmProvince::model()->findByPk($id);
            $province["province_id"] = $provinceData->province_id;
            $province["province_name"] = $provinceData->province_name;
            $districtData = array();
            $districts = AdmDistrict::model()->findAllByAttributes(array('ref_province_id' => $id));
            foreach ($districts as $district) {
                $dis["district_id"] = $district->district_id;
                $dis["ref_province_id"] = $district->ref_province_id;
                $dis["district_name"] = $district->district_name;
                array_push($districtData, $dis);
            }

            $this->msgHandler(200, "Deleted Successfully...", array('provinceData' => $province, 'districtData' => $districtData));
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

//Provinces And Districts - End
//Secratarial And Grama Niladhari Devisions - Start
    public function actionViewSecratarialDevisions() {
        $districts = AdmDistrict::model()->findAll();
        $this->render('/Settings/Secratarial/viewSecratarialDevisions', array('districts' => $districts));
    }

    public function actionViewSecratarialDevisionsData() {
        $secratarialDevisions = AdmSecratarialDevisions::model()->findAll();
        $this->renderPartial('/Settings/Secratarial/ajaxLoad/viewSecratarialDevisionsData', array('secratarialDevisions' => $secratarialDevisions));
    }

    public function actionSaveSecratarialDevision() {
        try {
            if ($_POST['hiddenId'] == 0) {
                $model = new AdmSecratarialDevisions();
            } else {
                $model = AdmSecratarialDevisions::model()->findByPk($_POST['hiddenId']);
            }
            $model->ref_district_id = $_POST['district'];
            $model->sec_name = $_POST['name'];

            if ($model->save(false)) {
                $gramaDevId = $model->sec_id;
                $data = $_POST['hiddenGrama'];
                for ($i = 0; $i < count($data); $i++) {
                    if ($data[$i] == 0) {
                        $grmaniladhari = new AdmGramaniladariDevisions();
                    } else {
                        $grmaniladhari = AdmGramaniladariDevisions::model()->findByPk($data[$i]);
                    }
                    $grmaniladhari->ref_sec_dev_id = $gramaDevId;
                    $grmaniladhari->grama_name = $_POST['gramaName'][$i];
                    $grmaniladhari->save(false);
                }

                $this->msgHandler(200, "Successfully Saved...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

//Secratarial And Grama Niladhari Devisions - End

}

?>
