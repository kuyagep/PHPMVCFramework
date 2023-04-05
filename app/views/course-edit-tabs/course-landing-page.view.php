

<form>
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Course landing page </h5>

                <!-- Vertical Form -->
                <form class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Course Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?=$row->title?>" autofocus>
                    </div>
                    <div class="col-12">
                        <label for="subtitle" class="form-label">Course Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="<?=$row->subtitle?>">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" name="description"  style="height: 100px">
                            <?=$row->description?>
                        </textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <label for="language_id" class="form-label">Select Language</label>
                            <select class="form-select" name="language_id" id="language_id">
                                <option value="">--Select--</option>
                                <?php if(!empty($languages)):?>
                                    <?php foreach($languages as $lang):?>
                                        <option <?=set_select('language_id',$lang->id, $row->language_id)?> value="<?=esc($lang->id)?>"><?=esc($lang->language)?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php if(!empty($errors['language_id'])):?>
                                <small class="text-danger"><?=$errors['language_id']?></small>
                            <?php endif;?>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="level_id" class="form-label">Select Level</label>
                            <select class="form-select" name="level_id" id="level_id">
                                <option value="">--Select--</option>
                                <?php if(!empty($levels)):?>
                                    <?php foreach($levels as $level):?>
                                        <option <?=set_select('level_id',$level->id, $row->level_id)?> value="<?=esc($level->id)?>"><?=esc($level->level)?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php if(!empty($errors['level_id'])):?>
                                <small class="text-danger"><?=$errors['level_id']?></small>
                            <?php endif;?>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="category_id" class="form-label">Select Category</label>
                            <select class="form-select" name="category_id" id="category_id">
                                <option value="">--Select--</option>
                                <?php if(!empty($categories)):?>
                                    <?php foreach($categories as $cat):?>
                                        <option <?=set_select('category_id',$cat->id, $row->category_id)?> value="<?=esc($cat->id)?>"><?=esc($cat->category)?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php if(!empty($errors['category_id'])):?>
                                <small class="text-danger"><?=$errors['category_id']?></small>
                            <?php endif;?>
                        </div>
                        <div class="col-md-6 my-3">
                            <label for="sub_category_id" class="form-label">Select Subcategory</label>
                            <select class="form-select" name="sub_category_id" id="sub_category_id">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <label for="currency_id" class="form-label">Pricing:</label>
                        <div class="col-md-4 my-3">
                            <select class="form-select" name="currency_id" id="currency_id">
                                <option value="">--Select Currency--</option>
                                <?php if(!empty($currencies)):?>
                                    <?php foreach($currencies as $cur):?>
                                        <option <?=set_select('currency_id',$cur->id, $row->currency_id)?> value="<?=esc($cur->id)?>"><?=esc($cur->currency ." ($cur->symbol)")?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php if(!empty($errors['currency_id'])):?>
                                <small class="text-danger"><?=$errors['currency_id']?></small>
                            <?php endif;?>
                        </div>
                        <div class="col-md-8 my-3">
                            <select class="form-select" name="price_id" id="select">
                                <option value="">--Select Price--</option>
                                <?php if(!empty($prices)):?>
                                    <?php foreach($prices as $pric):?>
                                        <option <?=set_select('price_id',$pric->id, $row->price_id)?> value="<?=esc($pric->id)?>"><?=esc($pric->name ." ($pric->price)")?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <?php if(!empty($errors['price_id'])):?>
                                <small class="text-danger"><?=$errors['price_id']?></small>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="primary_subject" class="form-label">Primary Subject</label>
                        <input type="text" class="form-control" id="primary_subject" value="<?=$row->primary_subject?>" name="primary_subject" placeholder="">
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
                            <img src="<?=ROOT?>/assets/images/video-placeholder.jpg" alt="image placeholder" style="width: 100%;">
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