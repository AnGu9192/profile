<?php
class IndexController extends Controller {

    public function indexAction(){

        $this->render('index');
    }

    public function workAction(){

        $projectModel = new Project();
        $projectId = $this->request()->get('id');

        $project = $projectModel->select()->all();

        $this->render('work');
    }

}