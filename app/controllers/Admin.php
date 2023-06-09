<?php

/**
 * admin class
 */
class Admin
{
    use Controller;
    public function index()
    {
        if (!Auth::logged_in()){
            message('Please login to access the dashboard');
            redirect('signin');
        }
        $data['title'] = "Admin";
        $this->view('admin/dashboard', $data);
    }

    public function courses($action = null, $id = null)
    {
        if(!Auth::logged_in())
        {
            message('Please login to view the admin section');
            redirect('signin');
        }
        $id = $id ?? Auth::getId();
        $user_id = Auth::getId();
        $course = new Course_model();
        $category = new Category_model();
        $language = new Language_model();
        $level = new Level_model();
        $price = new Price_model();
        $currency = new Currency_model();
        $data = [];

        $data['action'] = $action;
        $data['id'] = $id;




        if ($action == 'add'){




            $data['categories'] = $category->findAll('asc');

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                if($course->validate($_POST))
                {

                    $_POST['date'] = date("Y-m-d H:i:s");
                    $_POST['user_id'] = $user_id;
                    $_POST['price_id'] = 1;

                    $course->insert($_POST);

                    $row = $course->first(['user_id'=>$user_id,'published'=>0]);
                    message("Your Course was successfully created.");

                    if($row){
                        redirect('admin/courses/edit/'.$row->$id);
                    }else{
                        redirect('admin/courses');
                    }

                }

            }
            $data['title'] = "Add Courses";
            $data['errors'] = $course->errors;
        }elseif ($action == 'edit' ){
            //get Course information
            $categories = $category->findAll('asc');
            $languages = $language->findAll('asc');
            $levels = $level->findAll('asc');
            $prices = $price->findAll('asc');
            $currencies = $currency->findAll('asc');

            $data['row'] = $row = $course->first(['user_id'=>$user_id, 'id'=>$id]);

            if($_SERVER['REQUEST_METHOD'] == "POST" && $row) {
                if(!empty($_POST['tab_type']) && $_POST['tab_type'] == "read"){
                    if($_POST['tab_name'] == "landing-page"){

                        //$info['data'] = file_get_contents(ROOT."/ajax/course_edit/".$user_id."/".$id);
                        include views_path("course-edit-tabs/course-landing-page");
//                        $info['tab_type'] = "read";
//
//                        echo json_encode($info);
                    }
                }elseif(!empty($_POST['tab_type']) && $_POST['tab_type'] == "save"){
                    if($_POST['tab_name'] == "landing-page"){

                        if ($course->edit_validate($_POST)){
                            $course->update($id, $_POST);
                            $info['data'] = "Course successfully saved!";
                            $info['tab_type'] = "save";


                        }else{
                            $info['errors'] = $course->errors;
                            $info['data'] = "Please fix the errors";
                            $info['tab_type'] = "save";

                        }
                        echo json_encode($info);

                    }
                }
                die;
            }


        }
        else{
            //Courses view
            $data['rows'] = $course->where(['user_id'=>$user_id]);
            //#53
           // show($data['rows']);die;
        }

        $this->view('admin/courses', $data);
    }

    public function profile($id = null)
    {
        if(!Auth::logged_in())
        {
            message('Please login to view the admin section');
            redirect('signin');
        }

        $id = $id ?? Auth::getId();
        $user = new User();
        $data['row'] = $row = $user->first(['id'=>$id]);

        if($_SERVER['REQUEST_METHOD'] == "POST" && $row)
        {

            $folder = "uploads/images/";
            if(!file_exists($folder)){
                mkdir($folder, 0777,true);
                file_put_contents($folder."index.php", "Access Denied!");
                file_put_contents("uploads/index.php", "Access Denied!");
            }
            if ($user->edit_validate($_POST, $id)) {
                # code...

                $allowed = ['image/jpeg','image/png'];

                if(!empty($_FILES['thumbnail']['name'])){
                    if ($_FILES['thumbnail']['error']==0 ){
                        if (in_array($_FILES['thumbnail']['type'], $allowed)){
                            //everything good

                            $destination = $folder.time().$_FILES['thumbnail']['name'];
                            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $destination);
//                            Resize Images
                            resize_image($destination);
//                            move file to destination
                            $_POST['thumbnail'] = $destination;
                            if(file_exists($row->thumbnail)){
                                unlink($row->thumbnail);
                            }
                        }else{
                            $user->errors['thumbnail'] = "This file type is not allowed";
                        }
                    }else{
                        $user->errors['thumbnail'] = "Could not upload image";
                    }
                }
                $user->update($id,$_POST);


                //message("Profile save successfully!");
                //redirect('admin/profile/'.$id);
            }
            if (empty($user->errors)){
                $arr['message'] = "Profile saved succesfully";
            }else{
                $arr['message'] = "Please correct this errors";
                $arr['errors'] = $user->errors;
            }
            echo json_encode($arr);
            die;
        }
        $data['title'] = "Profile";
        $data['errors'] = $user->errors;

        $this->view('admin/profile', $data);
    }

}
