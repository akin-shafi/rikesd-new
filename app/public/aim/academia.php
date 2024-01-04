<div class="row">
    <h2>Academia Applications</h2>
	<div class="col-12">
		<a href="<?php echo url_for('public/team/exportData.php') ?>" class="btn btn-success my-2"> <i
				class="fa fa-file-excel-o"></i> Export CSV</a>
		<div class="card">
			<div class="card-body">

                <table border="1" id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Application No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Institution</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Expertise</th>
                            <th>Interests</th>
                            <th>Motivation</th>
                            <th>Availability</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $sn = 1;
						foreach (AimAcademicApplicants::find_all() as $data) : ?>
                        <tr>
                            <td><?= $sn++; ?></td>
                            <td><?= $data->application_no; ?></td>
                            <td><?= $data->firstname; ?></td>
                            <td><?= $data->lastname; ?></td>
                            <td><?= $data->email; ?></td>
                            <td><?= $data->phone; ?></td>
                            <td><?= $data->institution; ?></td>
                            <td><?= $data->country; ?></td>
                            <td><?= $data->city; ?></td>
                            <td><?= $data->expertise; ?></td>
                            <td><?= $data->interests; ?></td>
                            <td><?= $data->motivation; ?></td>
                            <td><?= $data->availability; ?></td>
                            <td><?= $data->created_at; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>