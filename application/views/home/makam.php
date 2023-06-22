<!-- Breadcrumb Area Start Here -->
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Makam</h3>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Main Area Start Here -->
        <div class="shop-main-area shop-fullwidth">
            <div class="container container-default custom-area">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-custom widget-mt">                    
                        <!-- Shop Wrapper Start -->
                        <div class="row shop_wrapper grid_4">
                            <?php foreach($makam as $row){  ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-custom product-area">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block">
                                            <img src="<?= base_url('assets/uploads/makam/'.$row->gambar) ?>" alt="" class="product-image-1 w-100">
                                            <img src="<?= base_url('assets/uploads/makam/'.$row->gambar) ?>" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">                                       
                                        <div class="product-title">
                                            <br>
                                            <h4 class="title-2"> <a><?= $row->nama_makam ?></a></h4>
                                        </div>                                       
                                    </div>                                                                      
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                            <div class="col-sm-12 col-custom">
                                <div class="toolbar-bottom mt-30">
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        