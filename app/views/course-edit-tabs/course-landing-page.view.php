<form>
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Vertical Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Course Title</label>
                        <input type="text" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Course Subtitle</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" style="height: 100px"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Language</label>
                            <select class="form-select" name="" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Level</label>
                            <select class="form-select" name="" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="select" class="form-label">Select Subcategory</label>
                            <select class="form-select" name="" id="select">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="primary-subject" class="form-label">Primary Subject</label>
                        <input type="text" class="form-control" id="primary-subject" placeholder="">
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