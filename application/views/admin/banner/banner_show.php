<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <!-- table -->
                    <table class="table table-bordered  table-dark  table-striped" id="banner_table">
                        <thead class="thead-light">
                            <tr>
                                <th>Serial</th>
                                <th>Banner Title</th>
                                <th>Sub Title</th>
                                <th>Paragraph</th>
                                <th>Button</th>
                                <th>Button Link</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($banner_info as $key => $value) { ?>

                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value->banner_heading; ?></td>
                                    <td><?= $value->banner_sub_title; ?></td>
                                    <td><?= $value->banner_para; ?></td>
                                    <td><?= $value->banner_btn; ?></td>
                                    <td><?= $value->btn_link; ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/images/bg/<?= $value->banner_img; ?>" alt=""></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->