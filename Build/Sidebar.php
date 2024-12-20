<div class="col-lg-2">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width:200px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x'])) ?
                                         'active link-light' : 'link-dark' ; ?> " aria-current="page" href="home"><i class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='order') ?
                                         'active link-light' : 'link-dark' ; ?>" href="order"><i 
                                         class="bi bi-cart4"></i> Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='customer') ?
                                         'active link-light' : 'link-dark' ; ?>" href="customer"><i 
                                         class="bi bi-person-fill"></i> Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='product') ?
                                         'active link-light' : 'link-dark' ; ?>" href="product"><i 
                                         class="bi bi-menu-app"></i> Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='report') ?
                                         'active link-light' : 'link-dark' ; ?>" href="report"><i 
                                         class="bi bi-file-earmark-bar-graph"></i> Report</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>