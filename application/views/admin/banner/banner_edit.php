<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">

                <div class="card" style="padding: 20px">
                    <div class="card-header" style="border-bottom: 2px solid #181936">
                        <h2>Update Banner</h2>
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('Admin/update_banner/' . $banner_edit->id) ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="banner_heading" id="banner_title" value="<?php echo $banner_edit->banner_heading; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $banner_edit->id; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_subtitle" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" name="banner_sub_title" id="banner_subtitle" value="<?php echo $banner_edit->banner_sub_title; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="banner_btn" class="form-label">Button Title</label>
                                        <input type="text" class="form-control" name="banner_btn" id="banner_btn" value="<?php echo $banner_edit->banner_btn; ?>" />
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-group">
                                        <label for="banner_btnLink" class="form-label">Add Link</label>
                                        <input type="text" class="form-control" name="btn_link" id="banner_btnLink" value="<?php echo $banner_edit->btn_link; ?>" />
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-group">
                                        <label for="banner_image" class="form-label">Upload Image</label>
                                        <input type="file" class="form-control" name="banner_img" id="banner_image" value="<?php echo $banner_edit->banner_img; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="banner_para" class="form-label">Paragraph</label>
                                        <textarea name="banner_para" cols="5" rows="10" class="form-control" id="banner_para"><?php echo $banner_edit->banner_para; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Update Banner" class="btn btn-primary" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->