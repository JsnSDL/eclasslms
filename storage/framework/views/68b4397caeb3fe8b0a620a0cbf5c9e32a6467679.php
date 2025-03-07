	<div class="row">
		<!-- first start -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline1">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline1" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-facebook"></i> <?php echo e(__('Facebook Login Settings')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline1" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline1" style="">
							<div class="card-body">
							<!-- form start -->
				<form class="form" action="<?php echo e(route('sl.fb')); ?>" method="POST" novalidate enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="row">
						<!-- ClientID -->
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
									<input type="text" placeholder="<?php echo e(__('Enter Client ID')); ?>" class="form-control" name="FACEBOOK_CLIENT_ID" value="<?php echo e($env_files['FACEBOOK_CLIENT_ID']); ?>" >
									<div class="invalid-feedback">
										<?php echo e(__('Please Enter Google Analytic Key !')); ?>.
									</div>
							</div>
						</div>
						<!-- ClientSecretKey -->
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
								<input id="pass_log_id1" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="FACEBOOK_CLIENT_SECRET" value="<?php echo e($env_files['FACEBOOK_CLIENT_SECRET']); ?>" >
								<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password1"></span>
								
							</div>
						</div>
						<!-- CallbackURL -->
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
								<input type="text" placeholder="https://yoursite.com/public/auth/facebook/callback" name="FACEBOOK_CALLBACK_URL" value="<?php echo e($env_files['FACEBOOK_CALLBACK_URL']); ?>" class="form-control" >
								<small class="text-muted"><i class="fa fa-question-circle"></i> <?php echo e(__('Use callback URL')); ?> <b><?php echo e(url('auth/facebook/callback')); ?></b></small>
							</div>
						</div>						
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-dark" for=""><i class="fa fa-facebook-square"></i> <?php echo e(__('Enable Facebook Login')); ?> :</label><br>								
								<input type="checkbox" class="custom_toggle" name="fb_enable" <?php echo e($gsetting->fb_login_enable==1 ? 'checked' : ''); ?> />
								<input type="hidden"  name="free" value="0" for="status" id="status">
							</div>
						</div>
						<!-- button to save -->
						<div class="col-md-12">
						<div class="form-group">
						<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
						<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Update')); ?>"><i class="fa fa-check-circle"></i>
						<?php echo e(__("Save")); ?></button>
						</div>
						</div>
					</div>					
				</form>
				<!-- form end -->
							</div>
						</div>
						</div>						
					</div> 
				</div>
			</div>
		</div>
		<!-- first end -->
		<!-- =========== second start================== -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline2">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline2" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-google"></i> <?php echo e(__('Google Login Settings')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline2" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline2" style="">
							<div class="card-body">
								<!-- form start -->
					<form class="form" action="<?php echo e(route('sl.gl')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<div class="row">
							<!-- ClientID -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
										<input type="text" placeholder="<?php echo e(__('Enter Client ID')); ?>" class="form-control" name="GOOGLE_CLIENT_ID" value="<?php echo e($env_files['GOOGLE_CLIENT_ID']); ?>" >
								</div>
							</div>
							<!-- ClientSecretKey -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
									<input id="pass_log_id2" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="GOOGLE_CLIENT_SECRET" value="<?php echo e($env_files['GOOGLE_CLIENT_SECRET']); ?>" >
									<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password2"></span>
									
								</div>
							</div>
							<!-- CallbackURL -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
									<input type="text" placeholder="https://yoursite.com/public/auth/google/callback" name="GOOGLE_CALLBACK_URL" value="<?php echo e($env_files['GOOGLE_CALLBACK_URL']); ?>" class="form-control">
									<small class="text-muted"><i class="fa fa-question-circle"></i><?php echo e(__('Use callback URL')); ?>  <b><?php echo e(url('auth/google/callback')); ?></b></small>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark" for=""><i class="fa fa-google"></i> <?php echo e(__('Enable Google Login')); ?> : </label><br>
									<input type="checkbox" class="custom_toggle" name="google_enable" <?php echo e($setting->google_login_enable ==1 ? 'checked' : ""); ?> />
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>
							</div>
							<!-- button to save -->
							<div class="col-md-12">
							<div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Save')); ?>"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Save")); ?></button>
							</div>
							</div>
						</div>									
					</form>
					<!-- form end -->
							</div>
						</div>
						</div>						
					</div> 
				</div>
			</div>
		</div>
		<!-- =========== second end================== -->

		<!-- =========== three start================== -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline3">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline3" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-gitlab"></i> <?php echo e(__('GitLab Login Settings')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline3" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline3" style="">
							<div class="card-body">
							<!-- form start -->
					<form class="form" action="<?php echo e(route('sl.git')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<div class="row">
							<!-- ClientID -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
									<input name="GITLAB_CLIENT_ID" type="text" placeholder="<?php echo e(__('Enter client ID')); ?>" class="form-control" value="<?php echo e($env_files['GITLAB_CLIENT_ID']); ?>">
								</div>
							</div>
							<!-- ClientSecretKey -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
									<input id="pass_log_id3" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="GITLAB_CLIENT_SECRET" value="<?php echo e($env_files['GITLAB_CLIENT_SECRET']); ?>" >
									<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password3"></span>									
								</div>
							</div>
							<!-- CallbackURL -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
									<i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="https://yoursite.com/public/auth/gitlab/callback"></i>
		  							<input type="text" placeholder="https://yoursite.com/public/auth/gitlab/callback" name="GITLAB_CALLBACK_URL" value="<?php echo e($env_files['GITLAB_CALLBACK_URL']); ?>" class="form-control">
		  							<small class="text-muted"><i class="fa fa-question-circle"></i> <?php echo e(__('Use callback URL')); ?> <b><?php echo e(url('auth/gitlab/callback')); ?></b></small>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark" for=""><i class="fa fa-gitlab"></i> <?php echo e(__('Enable GitLab Login')); ?>: </label><br>
									<input type="checkbox" class="custom_toggle" name="gitlab_enable" <?php echo e($setting->gitlab_login_enable ==1 ? 'checked' : ""); ?> />
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>
							</div>
							<!-- button to save -->
							<div class="col-md-12">
							<div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Save')); ?>"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Save")); ?></button>
							</div>
							</div>
						</div>									
					</form>
					<!-- form end -->
							</div>
						</div>
						</div>						
					</div> 
				</div>
			</div>
		</div>
		<!-- =========== three end================== -->

		<!-- =========== section 4 start ================== -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline4">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline4" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-amazon"></i> <?php echo e(__('Amazon Login Settings')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline4" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline4" style="">
							<div class="card-body">
							<!-- form start -->
					<form class="form" action="<?php echo e(route('sl.amazon')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<div class="row">
							<!-- ClientID -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
									<input name="AMAZON_LOGIN_ID" type="text" placeholder="<?php echo e(__('Enter client ID')); ?>" class="form-control" value="<?php echo e($env_files['AMAZON_LOGIN_ID']); ?>">
								</div>
							</div>
							<!-- ClientSecretKey -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
									<input id="pass_log_id4" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="AMAZON_LOGIN_SECRET" value="<?php echo e($env_files['AMAZON_LOGIN_SECRET']); ?>" >
									<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password4"></span>
									
								</div>
							</div>
							<!-- CallbackURL -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
									<input type="text" placeholder="https://yoursite.com/public/auth/amazon/callback" name="AMAZON_LOGIN_REDIRECT" value="<?php echo e($env_files['AMAZON_LOGIN_REDIRECT']); ?>" class="form-control">
		  							<small class="text-muted"><i class="fa fa-question-circle"></i> <?php echo e(__('Use callback URL')); ?> <b><?php echo e(url('auth/amazon/callback')); ?></b></small>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark" for=""><i class="fa fa-amazon"></i> <?php echo e(__('Enable Amazon Login')); ?>: </label><br>
									<input type="checkbox" class="custom_toggle" name="amazon_enable" <?php echo e($setting->amazon_enable ==1 ? 'checked' : ""); ?> />
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>
							</div>
							<!-- button to save -->
							<div class="col-md-12">
							<div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Save')); ?>"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Save")); ?></button>
							</div>
							</div>
						</div>									
					</form>
					<!-- form end -->
							</div>
						</div>
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<!-- =========== section 4 end================== -->

		<!-- =========== section 5 start ================== -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline5">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline5" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-linkedin"></i> <?php echo e(__('Linked Login Setting')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline5" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline5" style="">
							<div class="card-body">
							<!-- form start -->
					<form class="form" action="<?php echo e(route('sl.linkedin')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<div class="row">
							<!-- ClientID -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
									<input name="LINKEDIN_CLIENT_ID" type="text" placeholder="<?php echo e(__('Enter client ID')); ?>" class="form-control" value="<?php echo e($env_files['LINKEDIN_CLIENT_ID']); ?>" input=>
								</div>
							</div>
							<!-- ClientSecretKey -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
									<input id="pass_log_id5" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="LINKEDIN_CLIENT_SECRET" value="<?php echo e($env_files['LINKEDIN_CLIENT_SECRET']); ?>" >
									<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password5"></span>
									
								</div>
							</div>
							<!-- CallbackURL -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
									<input type="text" placeholder="https://yoursite.com/public/auth/linkedin/callback" name="LINKEDIN_CALLBACK_URL" value="<?php echo e($env_files['LINKEDIN_CALLBACK_URL']); ?>" class="form-control">
		  							<small class="text-muted"><i class="fa fa-question-circle"></i> <?php echo e(__('Use callback URL')); ?> <b><?php echo e(url('auth/linkedin/callback')); ?></b></small>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark" for=""><i class="fa fa-linkedin"></i> <?php echo e(__('Enable Linked Login')); ?>: </label><br>
									<input type="checkbox" class="custom_toggle" name="linkedin_enable" <?php echo e($setting->linkedin_enable == 1 ? 'checked' : ""); ?> />
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>
							</div>
							<!-- button to save -->
							<div class="col-md-12">
							<div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Save')); ?>"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Save")); ?></button>
							</div>
							</div>
						</div>									
					</form>
					<!-- form end -->
							</div>
						</div>
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<!-- =========== section 5 end================== -->

		<!-- =========== section 6 start ================== -->
		<div class="col-lg-6">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="accordion accordion-outline" id="accordionoutline6">
						<div class="card">
						<div class="card-header" id="headingOneoutline">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOneoutline6" aria-expanded="false" aria-controls="collapseOneoutline"><i class="fa fa-twitter"></i> <?php echo e(__('Twitter Login Setting')); ?></button>
							</h2>
						</div>
						<div id="collapseOneoutline6" class="collapse" aria-labelledby="headingOneoutline" data-parent="#accordionoutline6" style="">
							<div class="card-body">
							<!-- form start -->
					<form class="form" action="<?php echo e(route('sl.twitter')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<div class="row">
							<!-- ClientID -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client ID')); ?> :</label>
									<input name="TWITTER_CLIENT_ID" type="text" placeholder="<?php echo e(__('Enter client ID')); ?>" class="form-control" value="<?php echo e($env_files['TWITTER_CLIENT_ID']); ?>" input=>
								</div>
							</div>
							<!-- ClientSecretKey -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Client Secret Key')); ?>:</label>
									<input id="pass_log_id6" type="password" placeholder="<?php echo e(__('Enter secret key')); ?>" class="form-control"  name="TWITTER_CLIENT_SECRET" value="<?php echo e($env_files['TWITTER_CLIENT_SECRET']); ?>" >
									<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password6"></span>
								</div>
							</div>
							<!-- CallbackURL -->
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark"><?php echo e(__('Callback URL')); ?> :</label>
									<input type="text" placeholder="https://yoursite.com/auth/public/twitter/callback" name="TWITTER_CALLBACK_URL" value="<?php echo e($env_files['TWITTER_CALLBACK_URL']); ?>" class="form-control">
		  							<small class="text-muted"><i class="fa fa-question-circle"></i> <?php echo e(__('Use callback URL')); ?> <b><?php echo e(url('auth/twitter/callback')); ?></b></small>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="text-dark" for=""><i class="fa fa-twitter"></i> <?php echo e(__('Enable Twitter Login')); ?>: </label><br>
									<input type="checkbox" class="custom_toggle" name="twitter_enable" <?php echo e($setting->twitter_enable == 1 ? 'checked' : ""); ?> />
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>
							</div>
							<!-- button to save -->
							<div class="col-md-12">
							<div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Save')); ?>"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Save")); ?></button>
							</div>
							</div>
						</div>								
					</form>
					<!-- form end -->
							</div>
						</div>
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<!-- =========== section 6 end================== -->	
	</div><?php /**PATH C:\xampp\htdocs\eclass-licenced\resources\views/admin/setting/sociallogin.blade.php ENDPATH**/ ?>