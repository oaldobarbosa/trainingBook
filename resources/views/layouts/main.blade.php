<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
lang="pt-br"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="/"
data-template="vertical-menu-template-free"
>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

	<title>@yield('title')</title>

	<meta name="description" content="" />

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="/img/favicon/favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="/fonts/boxicons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="/css/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="/css/theme-default.css" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="/libs/perfect-scrollbar/perfect-scrollbar.css" />

	<link rel="stylesheet" href="/libs/apex-charts/apex-charts.css" />

	<!-- Page CSS -->

	<!-- Helpers -->
	<script src="/js/helpers.js"></script>

    <script src="https://kit.fontawesome.com/b4a99a93aa.js" crossorigin="anonymous"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="../js/config.js"></script>
</head>

<body>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">

			<!-- ======= Header ======= -->
			<header id="header" class="header fixed-top d-flex align-items-center ">

			<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
				<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
				<i class="bx bx-menu bx-sm"></i>
				</a>
			</div>

			<nav class="header-nav ms-auto">

				<ul class="d-flex align-items-center">

				<li class="nav-item dropdown">

					<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
					<i class='bx bx-message-dots bx-sm'></i>
					<span class="badge bg-success badge-number">3</span>
					</a><!-- End Messages Icon -->

					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            Você tem 3 novas Mensangens
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver todas</span></a>
                        </li>

					</ul><!-- End Messages Dropdown Items -->

				</li><!-- End Messages Nav -->

				<!-- user -->
				<li class="nav-item navbar-dropdown dropdown-user dropdown">
					<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
					<div class="avatar avatar-online">
						<img src="/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
					</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
					<li>
						<a class="dropdown-item" href="#">
						<div class="d-flex">
							<div class="flex-shrink-0 me-3">
							<div class="avatar avatar-online">
								<img src="/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
							</div>
							</div>
							<div class="flex-grow-1">
							<span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
							<small class="text-muted">{{ Auth::user()->access_level }}</small>
							</div>
						</div>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a class="dropdown-item" href="#">
						<i class="bx bx-user me-2"></i>
						<span class="align-middle">Meu Perfil</span>
						</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">
						<i class="bx bx-cog me-2"></i>
						<span class="align-middle">Configurações</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Sair</span>
                            </a>
                        </form>
					</li>
					</ul>
				</li>

				</ul>
			</nav><!-- End Icons Navigation -->

			</header><!-- End Header -->

			<!-- Menu -->
            @include('layouts.menu')
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">

				<!-- Content wrapper -->
				<div class="content-wrapper " style="margin-top: 2.5rem;">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')

					</div>
					<!-- / Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://github.com/oaldobarbosa" target="_blank" class="footer-link fw-bolder">Aldo Barbosa</a>
                            </div>

                            <div>
                                <a href="#" target="_blank" class="footer-link me-4" >Support</a>
                            </div>
                        </div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
			<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>

	</div>
	<!-- / Layout wrapper -->



	<!-- Core JS -->
	<!-- build:js /js/core.js -->
	<script src="/libs/jquery/jquery.js"></script>
	<script src="/libs/popper/popper.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

	<script src="/js/menu.js"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="/libs/apex-charts/apexcharts.js"></script>

	<!-- Main JS -->
	<script src="/js/main.js"></script>

	<!-- Page JS -->
	<script src="/js/dashboards-analytics.js"></script>

	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>
