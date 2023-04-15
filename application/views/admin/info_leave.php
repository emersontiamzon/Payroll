

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1> Employee Leave </h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Employee Leave</a></li>
				<li class="active">Updated Employee</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Employee Leave <?=$leave_action; ?></h3>
						</div><!-- /.box-header -->


						<div class="box-body">
							<div class="row">
								<div class="col-md-1"> </div><!-- /.col -->
								<div class="col-md-2"> </div><!-- /.col -->
								<div class="col-md-4">
									<table class="table ">
										<tr>
											<td></td>
											<td>Employee Name:</td>
											<td><?=$leave_info->leave_emp_name;?></td>
										</tr>
										<tr>
											<td></td>
											<td>Type of Leave:</td>
											<td><?=$leave_info->leave_type;?></td>
										</tr>
										<tr>
											<td></td>
											<td>Reason of Leave:</td>
											<td><?=$leave_info->leave_reason;?></td>
										</tr>
										<tr>
											<td></td>
											<td>Date of Leave:</td>
											<td><?=date('Y-m-d',strtotime($leave_info->leave_date));?></td>
										</tr> 
									</table>
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.box-body -->

						<div class="box-footer">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-3">
									<a href="<?=base_url($btn_l);?>"class="btn btn-block btn-primary"><?=$btn_l_name?></a>
								</div>
								<div class="col-md-3">
									<a href="<?=base_url($btn_r);?>"class="btn btn-block btn-primary"><?=$btn_r_name; ?></a>
								</div>
							</div> 
						</div>
					</div><!-- /.box ---->
				</div>
			</div>   <!-- /.row -->
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
