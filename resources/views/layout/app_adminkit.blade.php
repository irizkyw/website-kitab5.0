<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Blank Page | AdminKit Demo</title>

	<link href="{{asset('admin/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard')}}">
          <span class="align-middle">KitabSuci</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown" > <span class="text-dark">Admin</span>
              
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="{{route('logout')}}">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
		
						<h1 class="h3 mb-3">List Kitab</h1>
						<div class="mb-3">
							<button class="btn btn-primary" onclick="tambahBook()">Tambah Book</button>
					</div>
						<div class="row">
								<div class="col-12 col-lg-12 col-xxl-12 d-flex">
										<div class="card flex-fill">
												<table class="table table-hover my-0">
														<thead>
																<tr>
																		<th>Books</th>
																		<th class="d-none d-xl-table-cell">Agama</th>
																		<th class="d-none d-xl-table-cell">API Gateway</th>
																		<th>Actions</th> <!-- New column for buttons -->
																</tr>
														</thead>
														<tbody>
																@foreach ($books as $scripture)
																<tr>
																		<td>{{ $scripture->books }}</td>
																		<td class="d-none d-xl-table-cell">{{ $scripture->agama }}</td>
																		<td class="d-none d-xl-table-cell">{{ $scripture->API_Gateaway }}</td>
																		<td>
																			<button class="btn btn-success btn-sm" onclick="updateBook({{ $scripture->id }})">Update</button>
																				<button class="btn btn-danger btn-sm" onclick="deleteBook({{ $scripture->id }})">Delete</button>
																		</td>
																</tr>
																@endforeach
														</tbody>
												</table>
										</div>
								</div>
						</div>
		
				</div>
		</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="{{asset('admin/js/app.js')}}"></script>

</body>

</html>
