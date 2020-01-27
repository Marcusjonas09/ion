<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <a class="navi" href="<?= base_url() ?>SuperAdmin/school_parameters"><span class="fa fa-chevron-left"></span>&nbsp&nbsp<strong>Back</strong></a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container-fluid col-md-12" style="padding:0px;">
            <?php if (isset($success_msg)) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i>Success!</h4>
                    <?php echo $success_msg; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($fail_msg)) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i>Success!</h4>
                    <?php echo $fail_msg; ?>
                </div>
            <?php endif; ?>
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <strong>Section</strong>
                    </h3>
                </div>
                <div class="box-body">
                    <table class="datatables table table-striped text-center" data-page-length='10'>
                        <thead class="bg-success text-center" style="background-color:#00a65a; color:white;">
                            <th class="text-center col-md-1">#</th>
                            <th class="text-center col-md-6">Code</th>
                            <th class="text-center col-md-5">Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($sections as $section) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
                                        <?= $section->section_code ?>
                                    </td>
                                    <td class="text-center">
                                        <a id="edit_section" href="<?= base_url() ?>SuperAdmin/edit_section/<?= $section->section_id ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger" onclick="delete_section(<?= $section->section_id ?>)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a class="btn btn-success pull-right" href="<?= base_url() ?>SuperAdmin/add_section">Add New Entry</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->