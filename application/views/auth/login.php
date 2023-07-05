<!-- Login Area Start Here -->
<div class="login-register-area mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Login</h2>
                        <p class="desc-content">Login dengan akun yang sudah ada</p>
                    </div>
                    <form action="<?= base_url('auth/login/proses_login') ?>" method="post">
                        <div class="single-input-item mb-3">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">

                                <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                            </div>
                        </div>
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn obrien-button-2 primary-color">Login</button>
                        </div>
                        <div class="single-input-item">
                            <a href="<?= base_url('auth/register') ?>">Belum punya akun? Register!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End Here -->
