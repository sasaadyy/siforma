<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="<?= base_url('admin') ?>" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/paket') ?>" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Paket</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/makam') ?>" aria-expanded="false">
                    <i class="la la-file"></i>
                    <span class="nav-text">Makam</span>
                </a>
            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/kategori') ?>" aria-expanded="false">
                    <i class="la la-folder"></i>
                    <span class="nav-text">Jenazah</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/transaksi') ?>" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-text">Booking</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/users') ?>" aria-expanded="false">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">Klien</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/contact') ?>" aria-expanded="false">
                    <i class="fa fa-comments"></i>
                    <span class="nav-text">Kontak</span>
                </a>

            </li>

            <li><a class="ai-icon" href="<?= base_url('admin/laporan') ?>" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Laporan</span>
                </a>

            </li>
            <li><a class="ai-icon" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fa fa-sign-out text-danger"></i>
                    <span class="nav-text text-danger">Logout</span>
                </a>

            </li>
        
        </ul>
    </div>
</div>
 

<!-- Modal -->
<div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Ingin Logout?</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger light" data-dismiss="modal">Close</button>
                <a href="<?= base_url('auth/login/logout') ?>" class="btn btn-sm btn-youtube">Logout</a>
            </div>
        </div>
    </div>
</div>