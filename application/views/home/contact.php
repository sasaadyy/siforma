<!-- Breadcrumb Area Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Kontak Kami</h3>
                    <p>Silakan hubungi kami jika ada pertanyaan atau saran</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Contact Us Area Start Here -->
<div class="contact-us-area">
    <div class="container container-default-2 custom-area">
    <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
            <div class="col-md-12 col-custom">
                <form method="post" action="<?= base_url('home/contact/contact_aksi') ?>" accept-charset="UTF-8" >
                    <div class="comment-box mt-5">
                        <div class="row mt-3">
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area name" type="text" name="nama" id="con_name" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area email" type="email" name="email" id="con_email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area email" type="text" name="subject" id="con_content" placeholder="Subjek">
                                    <?= form_error('subject', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <textarea cols="30" rows="5" class="border rounded-0 w-100 custom-textarea input-area" name="deskripsi" id="con_message" placeholder="Pesan"></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom mt-40">
                                <button type="submit" id="submit" name="submit" class="btn obrien-button primary-btn rounded-0 mb-0">KIRIM PESAN</button>
                            </div>
                            <p class="col-12 col-custom form-message mb-0"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area End Here -->
<!-- Support Area Start Here -->
<div class="support-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="support-wrapper d-flex">
                    <div class="support-content">
                        <h1 class="title">Butuh Bantuan ?</h1>
                        <p class="desc-content">Hubungi WhatsApp: 08211383713837100</p>
                    </div>
                    <div class="support-button d-flex align-items-center">
                        <a class="obrien-button primary-btn" href="#">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Support Area End Here -->