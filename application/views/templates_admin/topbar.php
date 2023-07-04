
<div id="preloader">
	<div class="sk-three-bounce">
		<div class="sk-child sk-bounce1"></div>
		<div class="sk-child sk-bounce2"></div>
		<div class="sk-child sk-bounce3"></div>
	</div>
</div>
<div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
            	<a href="admin/dashboard" class="brand-logo">
            		<img class="logo-abbr" src="<?= base_url('assets/') ?>favicon.png" alt="">
            		<img class="logo-compact" src="<?= base_url('assets/admin/') ?>/images/logoo.png" alt="">
            		<img class="brand-title" src="<?= base_url('assets/admin/') ?>/images/logoo.png" alt="">
            	</a>

            	<div class="nav-control">
            		<div class="makam">
            			<span class="line"></span><span class="line"></span><span class="line"></span>
            		</div>
            	</div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->
            <div class="header">
            	<div class="header-content">
            		<nav class="navbar navbar-expand">
            			<div class="collapse navbar-collapse justify-content-between">
            				<div class="header-left">
            					<div class="dashboard_bar">
            						Dashboard
            					</div>
            				</div>
            				<ul class="navbar-nav header-right">
            					
            					
            					<li class="nav-item dropdown header-profile">
            						<a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
										<i class="fa fa-user-circle"></i>
            							<div class="header-info">
            								<span class="text-black"><strong><?= $this->session->userdata('nama') ?></strong></span>
            								<p class="fs-12 mb-0"><?= $this->session->userdata('email') ?></p>
            							</div>
            						</a>
            						<div class="dropdown-menu dropdown-menu-right">            							            							
            							<a href="<?= base_url('auth/login/logout') ?>" class="dropdown-item ai-icon" onclick="return confirm('Ingin Logout?')">
            								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            								<span class="ml-2">Logout </span>
            							</a>
            						</div>
            					</li>
            				</ul>
            			</div>
            		</nav>
            	</div>
            </div>

