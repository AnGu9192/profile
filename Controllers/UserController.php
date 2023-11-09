<?php


class UserController extends Controller
{
    public function registerAction()
    {

        if($this->request()->post('register')){
            $firstname = $this->request()->post('firstname');
            $lastname = $this->request()->post('lastname');
            $birthday = $this->request()->post('birthday');
            $gender = $this->request()->post('gender');
            $password = $this->request()->post('password');

           $rpassword = $this->request()->post('repeat_password');

            $email = $this->request()->post('email');
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            $user = new User();
            if($password == $rpassword){
                $password = password_hash($password,PASSWORD_DEFAULT);
                $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'password' => $password,
                    'birthday' => $birthday,
                    'gender' => $gender,
                ];


                if($user->insert($data)){

                    $this->redirect('user/login');

                }
            }else{
                $this->session()->set('error',"Passwords don't much");
                $this->redirect('user/register');
            }


            
         
           
            
        }

        $this->render('register');
    }

    public function loginAction()
    {
        if($this->request()->post('login')) {
            $email = $this->request()->post('email');
            $password = $this->request()->post('password');

            $userModel = new User();
            $user = $userModel->select()->where([
                'email' => $email,
            ])->first();


            if ($user) {
                if (password_verify($password, $user->password)) {
                    $this->session()->set('user_id', $user->id);
                    $this->redirect('user/profile');
                }

            }
        }
        $this->render('login');
    }



    public function profileAction(){
        if(!$this->session()->get('user_id')){
            $this->redirect('user/login');
        }
        $userModel = new User();
        $user = $userModel->select()->where([
            'id' => $this->session()->get('user_id'),
        ])->first();
        $this->render('profile',[
            'user' => $user
        ]);

    }

    public function uploadAction(){
        if ($this->request()->post('avatar')) {
            $userModel = new User();
            $userId = $this->session()->get('user_id');
            $avatar = File::upload('avatar');

            if($userModel->update(['avatar'=>$avatar])->where(['id'=> $userId])){
                $this->redirect('user/profile');
            }

        }

        $this->redirect('user/profile');
    }

    public function editAction(){

        $userModel = new User();
        $userId = $this->request()->get('id');

        if ($this->request()->post('edit')) {
            $firstname = $this->request()->post('firstname');
            $lastname = $this->request()->post('lastname');
            $birthday = $this->request()->post('birthday');
            $gender = $this->request()->post('gender');

            $email = $this->request()->post('email');
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);



            $data = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'birthday' => $birthday,
                'gender' => $gender,
            ];

            $userId = $this->session()->get('user_id');

            if($userModel->update($data)->where([
                'id'=> $userId
            ])){
                $this->redirect('user/profile');
            }
            var_dump($userModel);

        }


        $user = $userModel->select()->where([
            'id' => $userId,
        ])->first();
        $this->render('edit',[
            'user' => $user
        ]);


    }
    public function deleteAction(){

        $userId = $this->session()->get('user_id');

        $userModel = new User();
        $user = $userModel->delete($userModel)->where([
            'id'=> $userId,
        ]);

        $this->redirect('user/login');

    }
    public function logoutAction(){

        $this->session()->destroy();
        $this->redirect('user/login');

    }


}