<?php

class GramasewakaController extends Controller {

    public function actionViewGramasewaka() {
        $this->render('ViewGramasewaka');
    }

    public function actionViewGramasewakaData() {
        $gramasewaka = RegGramasewaka::model()->findAll();
        $this->renderPartial('ajaxLoad/ViewGramasewakaData', array('gramasewaka' => $gramasewaka));
    }

    public function actionLoadPaymentPopup() {
        $this->renderPartial('ajaxLoad/paymentPopup');
    }

    public function actionGramasewakaAdd() {
        $this->renderPartial('ajaxLoad/addGramasewaka');
    }

    public function actionSaveGramasewaka() {
        try {
            $model = new RegGramasewaka();
            $model->ref_gramaniladhari_devision = $_POST['ref_gramaniladhari_devision'];
            $model->gramasewaka_name = $_POST['comName'];
            $model->gramasewaka_address = $_POST['comAddress'];
            $model->gramasewaka_tel = $_POST['comTel'];
            $model->gramasewaka_mobi = $_POST['comMobi'];
            $model->gramasewaka_email = strtolower(str_replace(' ', '', $_POST['comEmail']));
            $model->gramasewaka_identycard_no = $_POST['comConPerson'];
            if ($model->save(false)) {
                $this->msgHandler(200, "Successfully Saved...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

}
?>

