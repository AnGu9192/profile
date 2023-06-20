<?php
class UploadController extends Controller {

    public function uploadAction(){

        if($this->request()->post('submit')){
            File::upload('file');


        $this->render('upload');

    }
}