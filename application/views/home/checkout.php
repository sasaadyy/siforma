<!-- Breadcrumb Area Start Here -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="breadcrumb-content position-relative section-content">
                <h3 class="title-3">Check Out</h3>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- cart main wrapper start -->
<div class="cart-main-wrapper mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <form action="<?= base_url('home/checkout/update_cart') ?>" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-title">Paket</th>                                    
                                    <th class="pro-price">QTY</th>
                                    <th class="pro-price">Harga</th>
                                    <th style="width: 200px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($order as $row) { ?>
                                    <?php echo form_hidden($i . '[rowid]', $row['rowid']); ?>
                                    <tr>
                                        <td class="pro-title"><a><?= $row['name'] ?></a></td>
                                        <td class="pro-price"><?= $row['qty'] ?></a></td>
                                        <td class="pro-price"><span>Rp. <?= number_format($row['price'], 0, ',', '.') ?></span></td>
                                        <td>
                                            <a href="<?= base_url('home/checkout/remove/') . $row['rowid'] ?>" class="btn bg-danger pl-2 pr-2">
                                                <span>HAPUS</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>                
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-12 ml-auto">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                    </div>
                    <a href="<?= base_url('home/transaksi') ?>" class="btn obrien-button primary-btn">Transaksi Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>