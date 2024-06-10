        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="me-2" src="https://i.ibb.co/S70LBhQ/RBred.png" alt="" width="75"><span style="font-size:20px; font-family:calibri; letter-spacing: 2px; color: rgb(219, 219, 219);">REDBLOOD</span></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url() ?>REDBLOOD/Views/panel/img/clay.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0" style="text-transform: uppercase; color: rgb(198, 199, 201); font-size:12px; letter-spacing: 3px;">THIEF</h6>
                    </div>
                </div>
                    <div class="navbar-nav w-100">
                        <a href="<?= base_url() ?>security-check/panel" class="nav-item nav-link active">
                            <i class="fa fa-tachometer-alt me-2 text-primary"></i> Dashboard</a><br>
                        <a href="<?= base_url() ?>?<?php echo _config('PARAMETER'); ?>" target="_blank" class="nav-item nav-link text-white" rel="noopener noreferrer">
                            <i class="fa fa-globe me-2 text-primary"></i>Check Site</a>
                        <a href="<?= base_url() ?>security-check/panel/antibot" class="nav-item nav-link text-white"><i class="fa fa-bug me-2 text-primary"></i>Antibot</a>
                        <a href="<?= base_url() ?>security-check/panel/settings" class="nav-item nav-link text-white"><i class="fab fa-php me-2 text-primary"></i>Configs</a>
                        <a href="<?= base_url() ?>security-check/panel/telegram" class="nav-item nav-link text-white"><i class="fab fa-telegram me-2 text-primary"></i>Telegram</a>
                        <a href="<?= base_url() ?>security-check/panel/product" class="nav-item nav-link text-white"><i class="fa fa-shopping-cart me-2 text-primary"></i>Product</a>
                        <a href="<?= base_url() ?>security-check/panel/about" class="nav-item nav-link text-white"><i class="fa fa-star me-2 text-primary"></i>About</a>
                    </div>
                </div>
            </nav>
        </div>