<div class="checkout-area">
    <div class="container container-default-2 custom-container">
        <div class="row">
            <div class="col-lg-8" style="margin-left: auto; margin-right:auto;">
                <form action="<?= base_url('home/checkout/tambah_order') ?>" method="post" enctype="multipart/form-data">
                    <div class="checkbox-form">
                        <h3>Booking Detail</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email</label>
                                    <input value="<?= $this->session->userdata('email') ?>" type="text" readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Lengkap</label>
                                    <input value="<?= $this->session->userdata('nama') ?>" type="text" name="nama" readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>No. HP <span class="required">*</span></label>
                                    <input value="<?= $this->session->userdata('no_hp') ?>" type="text" name="no_hp" readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Alamat Lengkap <span class="required">*</span></label>
                                    <input value="<?= $this->session->userdata('alamat_users') ?>" type="text" name="alamat_users">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Lengkap Jenazah <span class="required">*</span></label>
                                    <input value="<?= set_value('nm_jenazah'); ?>" type="text" name="nm_jenazah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="tanggal_wafat">Tanggal Wafat</label>
                                    <input type="date" class="form-control" id="tanggal_wafat" name="tanggal_wafat" value="<?php echo set_value('tanggal_wafat'); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="tanggal_pemakaman">Tanggal Pemakaman</label>
                                    <input type="date" class="form-control" id="tanggal_pemakaman" name="tanggal_pemakaman" value="<?php echo set_value('tanggal_pemakaman'); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label class="custom-file-label" for="image">Kirim Bukti Transfer</label>
                                    <div class="custom-file pt-1">
                                        <input type="file" class="custom-file-input" id="image" name="image" value="<?php echo set_value('image'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-8 pt-5" style="margin-left: auto; margin-right:auto;">
                <div class="your-order">
                    <div class="your-order-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Paket Pemakaman</th>
                                    <th class="cart-product-name">QTY</th>
                                    <th class="cart-product-total">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) { ?>
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-center"> <?= $order['name'] ?></td>
                                        <td class="cart-product-name text-center"> <?= $order['qty'] ?></td>
                                        <td class="cart-product-total text-center"><span class="amount">Rp. <?= number_format($order['subtotal'], 0, ',', '.') ?></span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <h3 class="text-center">TOTAL</h3>
                        <h5 class="text-center">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></h5>
                    </div>
                    <br>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <hr class="mt-5">
                            <h4>Pembayaran</h4>
                            <hr>
                            <p>Anda dapat melakukan pembayaran melalui nomor rekening kami dibawah ini:</p>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Bank</th>
                                        <th style="text-align: center">Atas Nama</th>
                                        <th style="text-align: center">No. Rekening</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">BRI</td>
                                        <td align="center">Euis</td>
                                        <td align="center">1222132143</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-lg-12 pt-3">
                                <button type="submit" name="placeorder" class="btn obrien-button primary-btn d-block mt-3">Booking Sekarang</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Checkout Area End Here -->