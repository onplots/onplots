<!-- Top nav-->
<div class="navbar navbar-theme fixed-top bg-navbar d-none d-md-flex flex-md-nowrap p-0 border-bottom">
	<a class="navbar-brand col-auto me-0 px-3" href="index.html"><img class="navbar-brand-logo d-none d-md-block"
			src="img/branding/light_long.svg"></a>
	<div class="col-auto d-md-none"></div>
	<div style="font-size: 12px; position: fixed; right: 10px; bottom: 10px;">This source code belongs to <a href="https://github.com/nabriouso">Nabrious</a> & <a href="https://github.com/daniiltrpv">tor</a> and is hosted under <a href="https://github.com/sandboxdevs/sb-frontend">this repostitory</a></div>
	<div class="dropdown w-75 d-none d-md-block">
		<input class="form-control form-control-navbar w-75 d-none d-md-block" type="text"
		placeholder="Search anything on Sandbox..." aria-label="Search" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		<ul class="dropdown-menu w-75" aria-labelledby="dropdownMenuButton1">
			<div class="text-xs fw-bold text-muted px-3 my-1">USERS</div>
			<li>
				<a href="#" class="dropdown-item">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center gap-2">
							<img src="img/avatar/headshot.png" class="rounded-circle headshot" width="45">
							<div>c0ncrete</div>
						</div>
						<div>
							<i class="bi bi-chevron-right"></i>
						</div>
					</div>
				</a>
			</li>
			<div class="text-xs fw-bold text-muted px-3 my-1">ITEMS</div>
			<li>
				<a href="#" class="dropdown-item">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center gap-2">
							<img src="img/market/place-2.png" class="rounded-circle headshot" width="45">
							<div>Crystaline Faberge Egg</div>
						</div>
						<div>
							<i class="bi bi-chevron-right"></i>
						</div>
					</div>
				</a>
			</li>
			<hr class="dropdown-divider">
			<li>
				<a href="#" class="dropdown-item">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center gap-2">
							<div class="rounded-circle bg-secondary d-flex justify-content-center text-lg lh-1 align-items-center" style="height: 45px; width: 45px;"><i class="bi bi-search"></i></div>
							<div>
								Show all results for "<span class="align-top d-inline-block truncate" style="max-width: 80px;">swag swagger</span>" on Sandbox...
							</div>
						</div>
						<div>
							<i class="bi bi-chevron-right"></i>
						</div>
					</div>
				</a>
			</li>
			<!--
				<div class="px-4 py-2">
				<div class="text-xl fw-semibold">Search for anything on Sandbox!</div>
				<div class="text-sm text-muted">Start typing to get started...</div>
			</div>
			-->
		</ul>
	</div>
	<!-- Top Nav Menus-->
	<div class="col-auto">
		<!-- Notification Nav Section-->
		<div class="navbar-nav d-none d-md-inline-block">
			<div class="nav-item text-nowrap nav-pill">
				<!-- Bell icon -->
				<span class="dropdown">
					<a class="nav-pill-section nav-pill-icon-left position-relative icon-dropdown" href="#" role="button"
						id="bellDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi-bell nav-pill-section-icon" viewBox="0 0 16 16">
							<path
								d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
						</svg>
						<span
							class="position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"><span
								class="visually-hidden">unread messages</span></span>
					</a>
					<!-- Bell Dropdown -->
					<ul class="dropdown-menu notification-dropdown" aria-labelledby="bellDropdown" data-bs-popper="static">
						<li class="text-center"><span class="dropdown-item-text notification-dropdown-title">Notifications<span
									class="badge rounded-pill bg-primary notif-badge">2</span></span></li>
						<li>
							<hr class="dropdown-divider mb-0">
						</li>
						<li class="notif notif-new">
							<a href="#" class="text-decoration-none notif-link">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-pfp" src="img/avatar/headshot.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light"><strong>tor</strong> replied to your forum post</div>
										<span class="d-block text-muted">5 mins ago</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notif notif-new">
							<a href="#" class="text-decoration-none notif-link">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-icon notif-icon-primary" src="img/icons/award.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate">You recieved the <strong>Friends badge</strong></div>
										<span class="d-block text-muted">An hour ago</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notif">
							<a href="#" class="text-decoration-none notif-link">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-pfp" src="img/avatar/headshot.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate"><strong>Sid</strong>&nbsp;sent you a message</div>
										<span class="d-block text-muted">Yesterday</span>
									</div>
								</div>
							</a>
						</li>
						<li class="text-center">
							<div class="dropdown-item-text notif-info">
								You're all caught up!<br>
								<a href="#">Past Notifications</a>&nbsp;&nbsp;<a href="#">Settings</a>
							</div>
						</li>
					</ul>
				</span>
				<span class="dropdown">
					<!-- Trade icon -->
					<a class="nav-pill-section position-relative icon-dropdown" href="#" style="position: relative; right: 1px;"
						role="button" id="tradeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi-arrow-left-right nav-pill-section-icon" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
						</svg>
						<span
							class="d-none position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"><span
								class="visually-hidden">unread messages</span></span>
					</a>
					<!-- Trade Dropdown -->
					<ul class="dropdown-menu notification-dropdown" aria-labelledby="tradeDropdown" data-bs-popper="static">
						<li class="text-center"><span class="dropdown-item-text notification-dropdown-title">Incoming Trades<span
									class="d-none badge rounded-pill bg-primary notif-badge">2</span></span></li>
						<li>
							<hr class="dropdown-divider mb-0">
						</li>

						<li class="notif">
							<a href="#" class="text-decoration-none">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-pfp" src="img/avatar/headshot.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate">Trade from&nbsp;<strong>Star</strong></div>
										<span class="text-muted">Yesterday • <a href="#" type="button" data-bs-toggle="tooltip"
												data-bs-placement="top" data-bs-html="true"
												title="Player offers his <u><i>Vantablack Shades, Royal Crown</i></u> for your <u><i>Red Cap</i></u>">Peek</a></span>
									</div>
								</div>
							</a>
						</li>

						<li class="notif">
							<a href="#" class="text-decoration-none">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-pfp" src="img/avatar/headshot.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate">Trade from&nbsp;<strong>WWWWWWWWWWWWWWWWWWW</strong></div>
										<span class="text-muted">Yesterday • <a href="#" type="button" data-bs-toggle="tooltip"
												data-bs-placement="top" data-bs-html="true"
												title="Player offers his <u><i>Vantablack Shades, Royal Crown</i></u> for your <u><i>Red Cap</i></u>">Peek</a></span>
									</div>
								</div>
							</a>
						</li>

						<li class="notif">
							<a href="#" class="text-decoration-none notif-link">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-icon notif-icon-success" src="img/icons/trade.png">
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate"><strong>Jordan</strong> accepted your trade</div>
										<span class="d-block text-muted">Last week</span>
									</div>
								</div>
							</a>
						</li>

						<li class="text-center">
							<div class="dropdown-item-text notif-info">
								You're all caught up!<br>
								<a href="#">All Trades</a>&nbsp;&nbsp;<a href="#" type="button" data-bs-toggle="modal"
									data-bs-target="#declineTradesModal">Decline All</a>
							</div>
						</li>
					</ul>
				</span>

				<span class="dropdown">
					<!-- Friend icon -->
					<a class="nav-pill-section position-relative icon-dropdown" href="#" role="button"
						id="friendDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi-people nav-pill-section-icon" viewBox="0 0 16 16">
							<path
								d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
						</svg>
						<span
							class="d-none position-absolute top-30 start-55 translate-middle badge border border-dark rounded-circle bg-primary p-1"><span
								class="visually-hidden">unread messages</span></span>
					</a>

					<!-- Friend Dropdown -->
					<ul class="dropdown-menu notification-dropdown" aria-labelledby="friendDropdown" data-bs-popper="static">
						<li class="text-center"><span class="dropdown-item-text notification-dropdown-title">Friend Requests<span
									class="d-none badge rounded-pill bg-primary notif-badge">2</span></span></li>
						<li>
							<hr class="dropdown-divider mb-0">
						</li>
						<li class="notif">
							<div class="d-flex pt-3 border-bottom w-100">
								<a href="#"><img class="notif-pfp" src="img/avatar/headshot.png"></a>
								<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
									<div class="text-light">From <a href="#" class="text-light"><strong>tor</strong></a><span
											class="text-muted"> • 52 mins ago</span></div>
									<a href="#" class="text-success">Accept</a> or <a href="#" class="text-danger">Decline</a>
								</div>
							</div>
						</li>
						<li class="notif">
							<div class="d-flex pt-3 border-bottom w-100">
								<a href="#"><img class="notif-pfp" src="img/avatar/headshot.png"></a>
								<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
									<div class="text-light">From <a href="#" class="text-light"><strong>Splash</strong></a><span
											class="text-muted"> • Last month</span></div>
									<a href="#" class="text-success">Accept</a> or <a href="#" class="text-danger">Decline</a>
								</div>
							</div>
						</li>

						<li class="text-center">
							<div class="dropdown-item-text notif-info">
								You're all caught up!<br>
								<a href="#">View All</a>&nbsp;&nbsp;<a href="#" type="button" data-bs-toggle="modal"
									data-bs-target="#acceptFriendsModal">Accept All</a>&nbsp;&nbsp;<a href="#" type="button"
									data-bs-toggle="modal" data-bs-target="#declineFriendsModal">Decline All</a>
							</div>
						</li>
					</ul>
				</span>

				<span class="dropdown">
					<!-- Messages icon -->
					<a class="nav-pill-section nav-pill-icon-right position-relative icon-dropdown" href="#"
						style="position: relative; right: 1px" role="button" id="messagesDropdown" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi-envelope"></i>
						<span
							class="d-none position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"><span
								class="visually-hidden">unread messages</span></span>
					</a>
					<!-- Messages Dropdown -->
					<ul class="dropdown-menu notification-dropdown" aria-labelledby="messagesDropdown" data-bs-popper="static">
						<li class="text-center">
							<span class="dropdown-item-text notification-dropdown-title">Messages<span
									class="d-none badge rounded-pill bg-primary notif-badge">2</span></span>
						</li>
						<li>
							<hr class="dropdown-divider mb-0" />
						</li>
				
						<li class="notif">
							<a href="#" class="text-decoration-none">
								<div class="d-flex pt-3 border-bottom w-100">
									<img class="notif-pfp" src="img/avatar/headshot.png" />
									<div class="pb-3 mb-0 small lh-sm w-100 notif-text">
										<div class="text-light notif-truncate">
											Message from&nbsp;<strong>Star</strong>
										</div>
										<span class="text-muted">Yesterday •<a href="#">View</a></span>
									</div>
								</div>
							</a>
						</li>
				
						<li class="text-center">
							<div class="dropdown-item-text notif-info">
								You're all caught up!<br />
								<a href="#">All Messages</a>
							</div>
						</li>
					</ul>
				</span>
				
			</div>

		</div>

		<!-- Money Nav Section-->
		<div class="navbar-nav d-none d-md-inline-block">
			<div class="nav-item text-nowrap nav-pill">
				<a href="money.html" class="nav-pill-section nav-pill-icon-left font-weight-normal">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi-cash-stack nav-pill-section-icon text-success" viewBox="0 0 16 16">
						<path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
						<path
							d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
					</svg>
					<span>&nbsp;970</span>
				</a>

				<a href="money.html" class="nav-pill-section nav-pill-icon-right font-weight-normal">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi-coin nav-pill-section-icon text-warning" viewBox="0 0 16 16">
						<path
							d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
						<path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					</svg>
					<span>&nbsp;1.3k</span>
				</a>
			</div>
		</div>

		<!-- User Nav Section-->
		<div class="navbar-nav dropdown d-inline-block">
			<div class="nav-item text-nowrap nav-pill" role="button" id="userDropdown" data-bs-toggle="dropdown"
				aria-expanded="false" style="position: relative; bottom: 1px;">
				<a href="" class="nav-link nav-user">
					<div class="nav-user-username d-none d-md-inline-block text-light">Kyle <span
							class="text-danger d-none">{A}</span></div>
					<img class="nav-pfp" src="img/avatar/headshot.png"> <!-- add class "nav-pfp-admin" for red background-->
				</a>
			</div>
			<ul class="dropdown-menu dropdown-menu-end user-dropdown" aria-labelledby="userDropdown" data-bs-popper="static">
				<li><a class="dropdown-item" href="profile.html">Profile</a></li>
				<li><a class="dropdown-item" href="character.html">Edit Character</a></li>
				<li><a class="dropdown-item" href="settings.html">Account Settings</a></li>
				<li>
					<hr class="dropdown-divider">
				</li>
				<div class="d-none">
					<li><a class="dropdown-item" href="#"><span class="text-danger">{A}</span> Admin Panel</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
				</div>
				<li><a class="dropdown-item text-danger" href="landing.html">Log out -></a></li>
			</ul>
		</div>
	</div>

	<!-- Decline All Trades Modal -->
	<div class="modal fade" id="declineTradesModal" tabindex="-1" aria-labelledby="declineTradesLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-body text-center py-5">
					<h5 class="mb-4">Are you sure that you want <br class="d-none d-md-inline-block">to decline all incoming
						trades?
					</h5>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, nevermind</button>
					<button type="button" class="btn btn-danger">Decline all</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Accept All Friends Modal -->
	<div class="modal fade" id="acceptFriendsModal" tabindex="-1" aria-labelledby="acceptFriendsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-body text-center py-5">
					<h5 class="mb-4">Are you sure that you want to <br class="d-none d-md-inline-block">accept all incoming
						friend
						requests?
					</h5>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, nevermind</button>
					<button type="button" class="btn btn-primary">Accept all</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Decline All Trades Modal -->
	<div class="modal fade" id="declineFriendsModal" tabindex="-1" aria-labelledby="declineFriendsLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-body text-center py-5">
					<h5 class="mb-4">Are you sure that you want to <br class="d-none d-md-inline-block">decline all incoming
						friend
						requests?
					</h5>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, nevermind</button>
					<button type="button" class="btn btn-danger">Decline all</button>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Side nav-->
<div class="sidebar-container d-none d-md-flex">
	<div class="d-flex flex-column flex-shrink-0 sidebar">
		<ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-2">
			<li class="nav-item">
				<a href="index.html" class="nav-link sidebar-icon side-nav-active my-3 py-0" aria-current="page" title=""
					data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
					<h4 class="m-0"><i class="bi bi-house-door"></i></h4>
				</a>
			</li>
			<li class="nav-item">
				<a href="games.html" class="nav-link sidebar-icon my-3 py-0" aria-current="page" title=""
					data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Games">
					<h4 class="m-0"><i class="bi bi-controller"></i></h4>
				</a>
			</li>
			<li>
				<a href="market.html" class="nav-link sidebar-icon my-3 py-0" title="" data-bs-toggle="tooltip"
					data-bs-placement="right" data-bs-original-title="Market">
					<h4 class="m-0"><i class="bi bi-shop-window"></i></h4>
				</a>
			</li>
			<li>
				<a href="communities.html" class="nav-link sidebar-icon my-3 py-0" title="" data-bs-toggle="tooltip"
					data-bs-placement="right" data-bs-original-title="Communities">
					<h4 class="m-0"><i class="bi bi-person-video2"></i></h4>
				</a>
			</li>
			<li>
				<a href="forum.html" class="nav-link sidebar-icon my-3 py-0" title="" data-bs-toggle="tooltip"
					data-bs-placement="right" data-bs-original-title="Forum">
					<h4 class="m-0"><i class="bi bi-menu-up"></i></h4>
				</a>
			</li>
			<li>
				<a href="leaderboard.html" class="nav-link sidebar-icon my-3 py-0" title="" data-bs-toggle="tooltip"
					data-bs-placement="right" data-bs-original-title="Events">
					<h4 class="m-0"><i class="bi bi-trophy"></i></h4>
				</a>
			</li>
			<li>
			<li>
				<a href="create.html" class="nav-link sidebar-icon my-3 py-0" title="" data-bs-toggle="tooltip"
					data-bs-placement="right" data-bs-original-title="Create">
					<h4 class="m-0"><i class="bi bi-pencil"></i></h4>
				</a>
			</li>
		</ul>
		<div>
			<ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-2">
				<li class="nav-item">
					<a href="upgrade.html" class="nav-link sidebar-icon my-3 py-0" aria-current="page" title=""
						data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Upgrade">
						<h4 class="m-0 text-warning"><i class="bi bi-stars"></i></h4>
					</a>
				</li>
				<li class="nav-item">
					<a href="https://blog.Sandbox.com/" target="_blank" rel="noopener noreferrer"
						class="nav-link sidebar-icon my-3 py-0" aria-current="page" title="" data-bs-toggle="tooltip"
						data-bs-placement="right" data-bs-original-title="Blog">
						<h4 class="m-0"><i class="bi bi-rss"></i></h4>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<!--Mobile Nav-->
<div class="d-md-none">
	<header class="mobile-nav navbar navbar-theme bg-dark flex-nowrap px-3  border-top">
		<div class="container mobile-nav-container">
			<!-- Home -->
			<div class="col-auto">
				<a href="index.html" class="nav-link mobile-nav-link-active p-0">
					<h3 class="m-0"><i class="bi bi-house-door"></i></h3>
				</a>
			</div>
			<!-- Search -->
			<div class="col-auto">
				<a href="explore.html" class="nav-link mobile-nav-link p-0">
					<h3 class="m-0"><i class="bi bi-compass"></i></h3>
				</a>
			</div>
			<!-- Search -->
			<div class="col-auto">
				<a href="market.html" class="nav-link mobile-nav-link p-0">
					<h3 class="m-0"><i class="bi bi-shop-window"></i></h3>
				</a>
			</div>
			<!-- Notifications -->
			<div class="col-auto d-none">
				<a href="notifications.html" class="nav-link mobile-nav-link p-0">
					<h3 class="m-0"><i class="bi bi-bell"></i></h3>
					<span class="position-absolute top-100 start-50 translate-middle badge rounded-pill bg-danger"><span
							class="visually-hidden">unread messages</span></span>
				</a>
			</div>
			<!-- Forum -->
			<div class="col-auto">
				<a href="forum.html" class="nav-link mobile-nav-link p-0">
					<h3 class="m-0"><i class="bi bi-menu-up"></i></h3>
				</a>
			</div>
			<div class="col-auto dropup">
				<a href="#" class="nav-link mobile-nav-link p-0 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<h3 class="m-0"><i class="bi bi-person-circle"></i></h3>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><span class="dropdown-item-text"><b>Kyle</b><span class="text-danger"> {Admin}</span></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><span class="dropdown-item-text text-small text-muted text-bold" href="#">MONEY</span></li>
					<li><a class="dropdown-item" href="money.html"><i class="bi bi-cash-stack text-success"
								style="vertical-align: 0;"></i>&nbsp;970&nbsp;&nbsp;&nbsp;<i class="bi bi-coin text-warning"
								style="vertical-align: 0;"></i>&nbsp;1.3k</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><span class="dropdown-item-text text-small text-muted text-bold" href="#">UPDATES</span></li>
					<li><a class="dropdown-item" href="#">Notifications<span
								class="badge rounded-pill bg-primary notif-badge">2</span></a></li>
					<li><a class="dropdown-item" href="#">Incoming Trades</a></li>
					<li><a class="dropdown-item" href="#">Friend Requests</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><span class="dropdown-item-text text-small text-muted text-bold" href="#">LINKS</span></li>
					<li><a class="dropdown-item" href="profile.html">Profile</a></li>
					<li><a class="dropdown-item" href="character.html">Edit Charactrer</a></li>
					<li><a class="dropdown-item" href="settings.html">Account Settings</a></li>
					<li><a class="dropdown-item" href="upgrade.html">Upgrade</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item text-danger" href="landing.html">Log out -></a></li>
				</ul>
			</div>
		</div>
	</header>
</div>