<?php

class EmployerController extends Controller {

    public function actionViewEmployer() {
        $this->render('ViewEmployer');
    }

    public function actionViewEmployerData() {
        $employers = EmpEmployers::model()->findAll();
        $this->renderPartial('ajaxLoad/ViewEmployerData', array('employers' => $employers));
    }

    public function actionLoadPaymentPopup() {
        $this->renderPartial('ajaxLoad/paymentPopup');
    }

    public function actionEmployerAdd() {
        $this->renderPartial('ajaxLoad/addEmployer');
    }

    public function actionSaveEmployer() {
        try {
            $model = new EmpEmployers();
            $model->ref_ind_id = $_POST['ref_ind_id'];
            $model->employer_name = $_POST['comName'];
            $model->employer_address = $_POST['comAddress'];
            $model->employer_tel = $_POST['comTel'];
            $model->employer_mobi = $_POST['comMobi'];
            $model->employer_email = strtolower(str_replace(' ', '', $_POST['comEmail']));
            $model->employer_contact_person = $_POST['comConPerson'];
            if ($model->save(false)) {
                $this->msgHandler(200, "Successfully Saved...");
            }
        } catch (Exception $exc) {
            $this->msgHandler(400, $exc->getTraceAsString());
        }
    }

}
?>

