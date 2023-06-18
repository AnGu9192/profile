<?php


class UserController extends Controller
{
    public function registerAction()
    {
        $password = $this->request()->post('password');
        $password = password_hash($password,PASSWORD_DEFAULT);
        $email = $this->request()->post('email');
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        if($this->request()->post('register')){

            $data = [
                'firstname' => $this->request()->post('firstname'),
                'lastname' => $this->request()->post('lastname'),
                'email' => $email,
                'birthday' => $this->request()->post('birthday'),
                'gender' => $this->request()->post('gender'),
                'password' => $password,
            ];
            var_dump($data);

            $user = new User();
            $user->insert($data);
            $this->redirect('user/login');

            var_dump($user);

        }
        $this->render('register');
    }

    public function loginAction()
    {
        $email = $this->request()->post('email');
        $password = $this->request()->post('password');
        $userModel = new User();
        $user = $userModel->select()->where([
            'email' => $email,
        ])->first();
//        if($user){
//            $this->session()->set('user_id',$user->id);
//            $this->redirect('user/profile');
//        }
        $this->render('login');
    }



    public function profileAction(){

        $userModel = new User();
        $user = $userModel->select()->where([
            'id' => $this->session()->get('id'),
        ])->first();
        $this->render('profile',[
            'user' => $user
        ]);

    }

}