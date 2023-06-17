<?php
class IndexController extends Controller {

    public function indexAction(){
//        $user = new User();
//        $project = new Project();
//
//        $users = $user->select()->where(["id"=>1])->all();
//        $projects = $project->select()->all();
//
//        $this->session()->set('user_id', 8888);

        $this->layout = 'main';
        $this->render('index');
    }


}