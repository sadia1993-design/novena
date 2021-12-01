<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">


                <div class="card" style="padding: 20px">
                    <div class="card-header d-flex justify-content-between" style="border-bottom: 2px solid #181936">
                        <h2>Counter</h2>
                        <a href="" class="btn btn-primary">Add Counter</a>
                    </div>

                    <div class="table-responsive">
                        <!-- table -->
                        <table class="table table-bordered  table-dark " id="banner_table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Serial</th>
                                    <th>Counter Title</th>
                                    <th>Counter No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($counter_info as $key => $value) { ?>

                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value->counter_title; ?></td>
                                        <td><?= $value->counter_no; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Admin/edit_banner/' . $value->id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="<?php echo base_url('Admin/edit_banner/' . $value->id); ?>" class="btn btn-sm btn-warning"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>




                        <!--form-->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->