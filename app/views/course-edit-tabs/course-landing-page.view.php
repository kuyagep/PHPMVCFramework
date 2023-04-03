<form>
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Vertical Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Course Title</label>
                        <input type="text" class="form-control" id="inputNanme4" name="title">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Course Subtitle</label>
                        <input type="email" class="form-control" id="inputEmail4" name="subtitle">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" name="description" style="height: 100px"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Language</label>
                            <select class="form-select" name="language_id" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Level</label>
                            <select class="form-select" name="level_id" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Category</label>
                            <select class="form-select" name="category_id" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Subcategory</label>
                            <select class="form-select" name="sub_category_id" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <label for="select" class="form-label">Pricing:</label>
                        <div class="col-md-6 my-3">
                            <select class="form-select" name="currency_id" id="select">
                                <option value="">--Select Currency--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <select class="form-select" name="price_id" id="select">
                                <option value="">--Select Price--</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="primary_subject" class="form-label">Primary Subject</label>
                        <input type="text" class="form-control" id="primary_subject-subject" name="primary_subject" placeholder="">
                    </div>
                    
                    <div class="row mb-5">
                        <div class="col-sm-4">
                            <img src="<?=ROOT?>/assets/images/image-placeholder.jpg" alt="image placeholder" style="width: 100%;">
                        </div>
                        <div class="col-sm-8">
                            <h5>Course Image:</h5>
                            Upload your image here.
                            <input class="form-control" type="file">
                            <div class="progress my-4">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-sm-4">
                            <img src="<?=ROOT?>/assets/images/image-placeholder.jpg" alt="image placeholder" style="width: 100%;">
                        </div>
                        <div class="col-sm-8">
                            <h5>Course Video:</h5>
                            Upload your video here.
                            <input class="form-control" type="file">
                            <div class="progress my-4">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</form>