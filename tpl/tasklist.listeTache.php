		<!--
			DIV caché clonée pour afficher la liste : sert de template de base
		-->
								  

		<div id="task_list_clone" class="list-group-item" style="display:none">
			<div class="container-fluid">
				<a data-toggle="collapse" href="#" class="col-md-9 col-sm-9 col-xs-9"><h4 class="md-col-9" rel="taskRef"></h4></a>
				<span class="col-sm-3 col-md-3 col-xs-3" rel="link-of"></span>
			</div>
			<div class="collapse">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('DateStart'); ?> : <span rel="dateo"></span>
						</div>
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('DateEnd'); ?> : <span rel="datee"></span>
						</div>
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('ExpectedTime'); ?> : <span rel="planned_workload"></span>
						</div>
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('PastTime'); ?> : <span rel="spent_time"></span>
						</div>
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('Progress'); ?> : <span rel="progress"></span> %
						</div>
						<div class="col-xs-6 col-md-6">
							<?php echo $langs->trans('Priority'); ?> : <span rel="priority"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-12" rel="extrafields">
						
						</div>
					</div>
					<div class="row">
							<label rel="compteur"></label>
						
					</div>
					<div class="row">
							 <a href="#" class="btn btn-primary col-md-3 start"><?php echo $langs->trans('Start'); ?></a>
							 <a href="#" class="btn btn-info col-md-3 pause" style="display:none;"><?php echo $langs->trans('Pause'); ?> <span rel="start-time" class="badge"></span></a>
							 <a href="#" class="btn btn-success col-md-3 close" style="display:none;"><?php echo $langs->trans('Close'); ?></a>
						
					</div>
				</div>	
			</div>
		</div>
								
