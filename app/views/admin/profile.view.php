<?php
$this->view('admin/admin-header') ?>
<!--begin::Content-->
<?php if(!empty($row)):?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Profile</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="<?=ROOT?>/admin" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Profile</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_61484bfe0699c">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <label>
                                        <select class="form-select form-select-solid" data-kt-select2="true"
                                            data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484bfe0699c"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </label>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <main id="main" class="main">
                <?php if(message()):?>

                    <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-success me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
															<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
														</svg>
													</span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <h4 class="mb-1 text-success">Success</h4>
                            <span><?=message('',true)?></span>
                        </div>
                    </div>
                <?php endif;?>
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">

                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    <img src="<?=ROOT?>/<?=$row->thumbnail?>" alt="Profile" class="rounded-circle"
                                        style="width: 150px;max-width: 150px;height: 150px;object-fit: cover;">
                                    <h2><?=ucfirst(esc($row->firstname))?> <?=ucfirst(esc($row->lastname))?></h2>
                                    <h3 class="text-muted"><?=ucfirst(esc($row->role))?></h3>
                                    <div class="social-links mt-2">
                                        <a href="<?=esc($row->twitter_link)?>" class="twitter"><i class="bi bi-twitter px-3"></i></a>
                                        <a href="<?=esc($row->facebook_link)?>" class="facebook"><i class="bi bi-facebook px-3"></i></a>
                                        <a href="<?=esc($row->instagram_link)?>" class="instagram"><i class="bi bi-instagram px-3"></i></a>
                                        <a href="<?=esc($row->linkedin_link)?>" class="linkedin"><i class="bi bi-linkedin px-3"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                <!--             tab_list       -->
                                        <li class="nav-item">
                                            <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" id="profile-overview-tab">Overview</button>
                                        </li>

                                        <li class="nav-item">
                                            <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" id="profile-edit-tab">Edit Profile</button>
                                        </li>

                                        <li class="nav-item">
                                            <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" id="profile-settings-tab">Settings</button>
                                        </li>

                                        <li class="nav-item">
                                            <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" id="profile-change-password-tab">Change Password</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <h5 class="card-title">About</h5>
                                            <p class="small fst-italic"><?=esc($row->about)?></p>

                                            <h5 class="card-title">Profile Details</h5>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->firstname)?>
                                                    <?=esc($row->lastname)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label ">Company</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->company)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label">Job</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->job)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label">Country</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->country)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label">Address</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->address)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->phone)?></div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8 text-muted"><?=esc($row->email)?></div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                            <!-- Profile Edit Form -->
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="row mb-3">
                                                    <label for="profileImage"
                                                        class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="d-flex">
                                                            <img class="rounded-2 js-image-preview"
                                                                src="<?=ROOT?>/<?=$row->thumbnail?>" alt="Profile"
                                                                style="width: 150px;max-width: 150px;height: 150px;object-fit: cover;">
                                                            <div class="js-filename m-2">Selected File: None</div>

                                                        </div>
                                                        <div class="pt-2">
                                                            <label class="btn btn-primary btn-sm" title="Upload new profile image" >
                                                                <i class="text-white bi bi-upload"></i>
                                                                <input class="js-profile-image-input" onchange="load_image(this.files[0])" type="file" name="thumbnail" style="display: none;">
                                                            </label>
                                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="firstname"
                                                        class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="firstname" type="text"
                                                            class="form-control <?=!empty($errors['firstname']) ? 'border-danger':'';?>"
                                                            id="firstname"
                                                            value="<?=set_value('firstname', esc($row->firstname))?>" required>
                                                        <?php if(!empty($errors['firstname'])):?>
                                                        <small class="text-danger"><?=$errors['firstname']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="lastname" class="col-md-4 col-lg-3 col-form-label">Last
                                                        Name</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="lastname" type="text"
                                                            class="form-control <?=!empty($errors['lastname']) ? 'border-danger':'';?>"
                                                            id="lastname"
                                                            value="<?=set_value('lastname', esc($row->lastname))?>" required>
                                                        <?php if(!empty($errors['lastname'])):?>
                                                        <small class="text-danger"><?=$errors['lastname']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="about"
                                                        class="col-md-4 col-lg-3 col-form-label">About</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea name="about"
                                                            class="form-control <?=!empty($errors['about']) ? 'border-danger':'';?>"
                                                            id="about"
                                                            style="height: 100px"><?=set_value('about', esc($row->about))?></textarea>
                                                        <?php if(!empty($errors['about'])):?>
                                                        <small class="text-danger"><?=$errors['about']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="company"
                                                        class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="company" type="text"
                                                            class="form-control <?=!empty($errors['company']) ? 'border-danger':'';?>"
                                                            id="company"
                                                            value="<?=set_value('company', esc($row->company))?>">
                                                        <?php if(!empty($errors['company'])):?>
                                                        <small class="text-danger"><?=$errors['company']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="job"
                                                        class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="job" type="text"
                                                            class="form-control <?=!empty($errors['job']) ? 'border-danger':'';?>"
                                                            id="job" value="<?=set_value('job', esc($row->job))?>">
                                                        <?php if(!empty($errors['job'])):?>
                                                        <small class="text-danger"><?=$errors['job']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="country"
                                                        class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="country" type="text"
                                                            class="form-control <?=!empty($errors['country']) ? 'border-danger':'';?>"
                                                            id="country"
                                                            value="<?=set_value('country', esc($row->country))?>">
                                                        <?php if(!empty($errors['country'])):?>
                                                        <small class="text-danger"><?=$errors['country']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="address"
                                                        class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="address" type="text"
                                                            class="form-control <?=!empty($errors['address']) ? 'border-danger':'';?>"
                                                            id="address"
                                                            value="<?=set_value('address', esc($row->address))?>">
                                                        <?php if(!empty($errors['address'])):?>
                                                        <small class="text-danger"><?=$errors['address']?></small>
                                                        <?php endif;?>
                                                    </div>

                                                </div>

                                                <div class="row mb-3">
                                                    <label for="phone"
                                                        class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="phone" type="text"
                                                            class="form-control <?=!empty($errors['phone']) ? 'border-danger':'';?>"
                                                            id="phone"
                                                            value="<?=set_value('phone', esc($row->phone))?>">
                                                        <?php if(!empty($errors['phone'])):?>
                                                        <small class="text-danger"><?=$errors['phone']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="email"
                                                        class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email"
                                                            class="form-control <?=!empty($errors['email']) ? 'border-danger':'';?>"
                                                            id="email" value="<?=set_value('email', esc($row->email))?>" required>
                                                        <?php if(!empty($errors['email'])):?>
                                                            <small class="text-danger"><?=$errors['email']?></small>
                                                        <?php endif;?>
                                                    </div>

                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="twitter_link" type="text" class="form-control" id="Twitter" value="<?=set_value('twitter_link',$row->twitter_link)?>">
                                                    </div>

                                                    <?php if(!empty($errors['twitter_link'])):?>
                                                        <small class="text-danger"><?=$errors['twitter_link']?></small>
                                                    <?php endif;?>

                                                </div>


                                                <div class="row mb-3">
                                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="facebook_link" type="text" class="form-control" id="Facebook" value="<?=set_value('facebook_link',$row->facebook_link)?>">
                                                    </div>

                                                    <?php if(!empty($errors['facebook_link'])):?>
                                                        <small class="text-danger"><?=$errors['facebook_link']?></small>
                                                    <?php endif;?>

                                                </div>
                                                <div class="row mb-3">
                                                    <label for="instagram_link"
                                                        class="col-md-4 col-lg-3 col-form-label">Instagram
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="instagram_link" type="text"
                                                            class="form-control <?=!empty($errors['instagram_link']) ? 'border-danger':'';?>"
                                                            id="instagram_link" value="<?=set_value('instagram_link', esc($row->instagram_link))?>">
                                                        <?php if(!empty($errors['instagram_link'])):?>
                                                        <small
                                                            class="text-danger"><?=$errors['instagram_link']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="linkedin_link"
                                                        class="col-md-4 col-lg-3 col-form-label">Linkedin
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="linkedin_link" type="text" class="form-control <?=!empty($errors['linkedin_link']) ? 'border-danger':'';?>"
                                                            id="linkedin_link" value="<?=set_value('linkedin_link', esc($row->linkedin_link))?>"    >
                                                        <?php if(!empty($errors['linkedin_link'])):?>
                                                        <small class="text-danger"><?=$errors['linkedin_link']?></small>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="col-12 text-center ">
                                                    <div class="js-progress progress my-4 hide">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Saving.. 0%</div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <button  onclick="save_profile()" type="submit" class="btn btn-info">Save Changes</button>
                                                        <a href="<?=ROOT?>/admin/profile"><button type="button" class="btn btn-danger mr-5  mr-3">Back</button></a>
                                                    </div>

                                                </div>
                                            </form><!-- End Profile Edit Form -->

                                        </div>

                                        <div class="tab-pane fade pt-3" id="profile-settings">

                                            <!-- Settings Form -->
                                            <form method="post">

                                                <div class="row mb-3">
                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                        Notifications</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="changesMade" checked>
                                                            <label class="form-check-label" for="changesMade">
                                                                Changes made to your account
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="newProducts" checked>
                                                            <label class="form-check-label" for="newProducts">
                                                                Information on new products and services
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="proOffers">
                                                            <label class="form-check-label" for="proOffers">
                                                                Marketing and promo offers
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="securityNotify" checked disabled>
                                                            <label class="form-check-label" for="securityNotify">
                                                                Security alerts
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info">Save Changes</button>
                                                </div>
                                            </form><!-- End settings Form -->

                                        </div>

                                        <div class="tab-pane fade pt-3" id="profile-change-password">
                                            <!-- Change Password Form -->
                                            <form method="post">

                                                <div class="row mb-3">
                                                    <label for="currentPassword"
                                                        class="col-md-4 col-lg-3 col-form-label">Current
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="password" type="password" class="form-control"
                                                            id="currentPassword">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="newPassword"
                                                        class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="newpassword" type="password" class="form-control"
                                                            id="newPassword">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="renewPassword"
                                                        class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="renewpassword" type="password" class="form-control"
                                                            id="renewPassword">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info">Change Password</button>
                                                </div>
                                            </form><!-- End Change Password Form -->

                                        </div>

                                    </div><!-- End Bordered Tabs -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </main><!-- End #main -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
<?php else:?>
<div class="rounded border p-10 pb-0 d-flex flex-column flex-center">
    <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
        <!--begin::Close-->
        <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger"
            data-bs-dismiss="alert">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
                        fill="black"></rect>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black">
                    </rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </button>
        <!--end::Close-->
        <!--begin::Icon-->
        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
        <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
            </svg>
        </span>
        <!--end::Svg Icon-->
        <!--end::Icon-->
        <!--begin::Content-->
        <div class="text-center text-dark">
            <h1 class="fw-bolder mb-5">Something went wrong!</h1>
            <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
            <div class="mb-9">The alert component can be used to highlight certain parts of your page for
                <strong>higher content visibility</strong>.
                <br>Please read our
                <a href="#" class="fw-bolder me-1">Terms and Conditions</a>for more info.
            </div>
            <!--begin::Buttons-->
            <div class="d-flex flex-center flex-wrap">
                <a href="#" class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancel</a>
                <a href="#" class="btn btn-danger m-2">Ok, I got it</a>
            </div>
            <!--end::Buttons-->
        </div>
        <!--end::Content-->
    </div>
</div>
<?php endif;?>

<script>


    var tab = sessionStorage.getItem("tab") ? sessionStorage.getItem("tab"): "#profile-overview";

    function show_tab(tab_name)
    {
        const someTabTriggerEl = document.querySelector(tab_name +"-tab");
        const tab = new bootstrap.Tab(someTabTriggerEl);

        tab.show();

    }

    function set_tab(tab_name)
    {
        tab = tab_name;
        sessionStorage.setItem("tab", tab_name);
    }

    function load_image(file)
    {

        document.querySelector(".js-filename").innerHTML = "Selected File: " + file.name;

        var mylink = window.URL.createObjectURL(file);
        document.querySelector(".js-image-preview").src = mylink;
    }

    window.onload = function(){

        show_tab(tab);
    }

    //upload functions
    function save_profile()
    {
        var image = document.querySelector(".js-profile-image-input");
        send_data({
            pic: image.files[0]
        });
    }

    function send_data(obj)
    {

        var prog = document.querySelector(".js-prog");
        prog.children[0].style.width = "0%";
        prog.classList.remove("hide");

        var myform = new FormData();
        for(key in obj){
            myform.append(key,obj[key]);
        }

        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange',function(){

            if(ajax.readyState == 4){

                if(ajax.status == 200){
                    //everything went well
                    alert("upload complete");
                }else{
                    //error
                    alert("an error occurred");
                }
            }
        });

        ajax.upload.addEventListener('progress',function(e){

            var percent = Math.round((e.loaded / e.total) * 100);
            prog.children[0].style.width = percent + "%";
            prog.children[0].innerHTML = "Saving.. " + percent + "%";

        });

        ajax.open('post','',true);
        ajax.send(myform);

    }
</script>
<?php $this->view('admin/admin-footer') ?>