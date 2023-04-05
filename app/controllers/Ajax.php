<?php 

/**
 * home class
 */
class Ajax
{
	use Controller;

	public function index()
	{

        $data['title'] = "Ajax";
//		$this->view('ajax', $data);
	}

public function course_edit($id = null)
	{
        $id = $id ?? Auth::getId();
        $user_id = Auth::getId();
        $course = new Course_model();
        $category = new Category_model();
        $language = new Language_model();
        $level = new Level_model();
        $price = new Price_model();
        $currency = new Currency_model();
        //get Course information
        $data['categories'] = $category->findAll('asc');
        $data['languages'] = $language->findAll('asc');
        $data['levels'] = $level->findAll('asc');
        $data['prices'] = $price->findAll('asc');
        $data['currencies'] = $currency->findAll('asc');

        $data['title'] = "Ajax";
        $data['row'] = $course->first(['user_id'=>$user_id, 'id'=>$id]);
		$this->view('course-edit-tabs/course-landing-page', $data);
	}

}
