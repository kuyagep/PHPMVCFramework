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
        $data = [];

        $data['action'] = $action;
        $data['id'] = $id;




        if ($action == 'add'){
            $category = new Category_model();



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
            $data['row'] = $course->first(['user_id'=>$user_id, 'id'=>$id]);

            if($_SERVER['REQUEST_METHOD'] == "POST") {
                if(!empty($_POST['tab_type']) && $_POST['tab_type'] == "read"){
                    if($_POST['tab_name'] == "landing-page"){

                    include views_path("course-edit-tabs/course-landing-page");

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
