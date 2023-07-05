<!-- Login Area Start Here -->
<div class="login-register-area mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">

            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-2 col-custom">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Halaman Register</h2>
                        <p class="desc-content">Isi kolom register dengan lengkap</p>
                    </div>
                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
                            <?= form_error('nama', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                            <?= form_error('password', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="No. Hp" name="no_hp" value="<?= set_value('no_hp') ?>">
                            <?= form_error('no_hp', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Alamat Lengkap" name="alamat_users" value="<?= set_value('alamat_users') ?>">
                            <?= form_error('alamat_users', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                       
                        <div class="single-input-item mb-3">
                            <button class="btn obrien-button-2 primary-color">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End Here -->
