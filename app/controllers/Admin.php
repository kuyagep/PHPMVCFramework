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

    public function courses($id = null)
    {
        if(!Auth::logged_in())
        {
            message('Please login to view the admin section');
            redirect('signin');
        }
        $id = $id ?? Auth::getId();
        $data = [];
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
