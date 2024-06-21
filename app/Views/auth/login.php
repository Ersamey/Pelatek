<?= $this->extend($config->viewLayout) ?>

<?= $this->section('pageStyles'); ?>
<style>
	.title {
		/* font-family: "Poppins", sans-serif !important; */
		font-family: "Raleway", sans-serif !important;
	}

	label,
	input,
	button {
		font-family: "Poppins", sans-serif !important;
	}

	.card {
		border-radius: 20px !important;
	}

	h2{
		font-weight: bold;
	}
</style>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container ">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">

			<div class="card">
				<div class="card-body">
					<h2 class="title text-center fw-bold"><?= lang('Auth.loginTitle') ?></h2>

					<?= view('App\Views\Auth\_message_block') ?>

					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username">
							<div class="invalid-feedback">
								<?= session('errors.username') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="password"><?= lang('Auth.password') ?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

						<br>

						<button type="submit" class="btn btn-warning btn-block fw-bold text-light"><?= lang('Auth.loginAction') ?></button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>