<?php
class IndexController extends Controller {

    public function indexAction(){

        $project = new Project();
        $projects = $project->select()->all();

        $this->render('index',[
            "projects" => $projects
        ]);
    }


}