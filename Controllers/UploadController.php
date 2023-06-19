<?php
class UploadController extends Controller {

    public function uploadAction(){
        if($this->request()->post('submit')){
            File::upload('file');
        }

        $this->render('upload',[
            'textTest' => "Hello from Test controller test action"
        ]);

    }
}