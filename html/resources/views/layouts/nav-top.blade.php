<!-- Top nav-->
<div
  class="navbar navbar-theme fixed-top bg-navbar d-none d-md-flex flex-md-nowrap p-0 border-bottom"
>
  <a class="navbar-brand col-auto me-0 px-3" href="index.html"
    ><img
      class="navbar-brand-logo d-none d-md-block"
      src="img/branding/light_long.svg"
  /></a>
  <div class="col-auto d-md-none"></div>
  <input
    class="form-control form-control-navbar w-100 d-none d-md-block"
    type="text"
    placeholder="Search anything on Sandbox..."
    aria-label="Search"
  />

  <!-- Top Nav Menus-->
  <div class="col-auto">
    <!-- Notification Nav Section-->
    <div class="navbar-nav d-none d-md-inline-block">
      <div class="nav-item text-nowrap nav-pill">
        <!-- Bell icon -->
        <span class="dropdown">
          <a
            class="nav-pill-section nav-pill-icon-left position-relative icon-dropdown"
            href="#"
            role="button"
            id="bellDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi-bell"></i>
            <span
              class="position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"
              ><span class="visually-hidden">unread messages</span></span
            >
          </a>
          <!-- Bell Dropdown -->
          <ul
            class="dropdown-menu notification-dropdown"
            aria-labelledby="bellDropdown"
            data-bs-popper="static"
          >
            <li class="text-center">
              <span class="dropdown-item-text notification-dropdown-title"
                >Notifications
                <span class="badge rounded-pill bg-primary notif-badge"
                  >2</span
                ></span
              >
            </li>
            <li><hr class="dropdown-divider mb-0" /></li>
            <li class="notif notif-new">
              <a href="#" class="text-decoration-none notif-link">
                <div class="d-flex pt-3 border-bottom w-100">
                  <img class="notif-pfp" src="img/avatar/headshot.png" />
                  <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                    <div class="text-light">
                      <strong>tor</strong> replied to your forum post
                    </div>
                    <span class="d-block text-muted">5 mins ago</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notif notif-new">
              <a href="#" class="text-decoration-none notif-link">
                <div class="d-flex pt-3 border-bottom w-100">
                  <img
                    class="notif-icon notif-icon-primary"
                    src="img/icons/award.png"
                  />
                  <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                    <div class="text-light notif-truncate">
                      You recieved the <strong>Friends badge</strong>
                    </div>
                    <span class="d-block text-muted">An hour ago</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="notif">
              <a href="#" class="text-decoration-none notif-link">
                <div class="d-flex pt-3 border-bottom w-100">
                  <img class="notif-pfp" src="img/avatar/headshot.png" />
                  <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                    <div class="text-light notif-truncate">
                      <strong>Sid</strong>&nbsp;sent you a message
                    </div>
                    <span class="d-block text-muted">Yesterday</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="text-center">
              <div class="dropdown-item-text notif-info">
                You're all caught up!<br />
                <a href="#">Past Notifications</a>&nbsp;&nbsp;<a href="#"
                  >Settings</a
                >
              </div>
            </li>
          </ul>
        </span>

        <span class="dropdown">
          <!-- Trade icon -->
          <a
            class="nav-pill-section position-relative icon-dropdown"
            href="#"
            style="position: relative; right: 1px"
            role="button"
            id="tradeDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi-arrow-left-right"></i>
            <span
              class="d-none position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"
              ><span class="visually-hidden">unread messages</span></span
            >
          </a>
          <!-- Trade Dropdown -->
          <ul
            class="dropdown-menu notification-dropdown"
            aria-labelledby="tradeDropdown"
            data-bs-popper="static"
          >
            <li class="text-center">
              <span class="dropdown-item-text notification-dropdown-title"
                >Incoming Trades<span
                  class="d-none badge rounded-pill bg-primary notif-badge"
                  >2</span
                ></span
              >
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
                      Trade from&nbsp;<strong>Star</strong>
                    </div>
                    <span class="text-muted"
                      >Yesterday •
                      <a
                        href="#"
                        type="button"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="Player offers his <u><i>Vantablack Shades, Royal Crown</i></u> for your <u><i>Red Cap</i></u>"
                        >Peek</a
                      ></span
                    >
                  </div>
                </div>
              </a>
            </li>

            <li class="notif">
              <a href="#" class="text-decoration-none">
                <div class="d-flex pt-3 border-bottom w-100">
                  <img class="notif-pfp" src="img/avatar/headshot.png" />
                  <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                    <div class="text-light notif-truncate">
                      Trade from&nbsp;<strong>WWWWWWWWWWWWWWWWWWW</strong>
                    </div>
                    <span class="text-muted"
                      >Yesterday •
                      <a
                        href="#"
                        type="button"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="Player offers his <u><i>Vantablack Shades, Royal Crown</i></u> for your <u><i>Red Cap</i></u>"
                        >Peek</a
                      ></span
                    >
                  </div>
                </div>
              </a>
            </li>

            <li class="notif">
              <a href="#" class="text-decoration-none notif-link">
                <div class="d-flex pt-3 border-bottom w-100">
                  <img
                    class="notif-icon notif-icon-success"
                    src="img/icons/trade.png"
                  />
                  <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                    <div class="text-light notif-truncate">
                      <strong>Jordan</strong> accepted your trade
                    </div>
                    <span class="d-block text-muted">Last week</span>
                  </div>
                </div>
              </a>
            </li>

            <li class="text-center">
              <div class="dropdown-item-text notif-info">
                You're all caught up!<br />
                <a href="#">All Trades</a>&nbsp;&nbsp;<a
                  href="#"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#declineTradesModal"
                  >Decline All</a
                >
              </div>
            </li>
          </ul>
        </span>

        <span class="dropdown">
          <!-- Friend icon -->
          <a
            class="nav-pill-section position-relative icon-dropdown"
            href="#"
            role="button"
            id="friendDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi-people"></i>
            <span
              class="d-none position-absolute top-30 start-55 translate-middle badge border border-dark rounded-circle bg-primary p-1"
              ><span class="visually-hidden">unread messages</span></span
            >
          </a>

          <!-- Friend Dropdown -->
          <ul
            class="dropdown-menu notification-dropdown"
            aria-labelledby="friendDropdown"
            data-bs-popper="static"
          >
            <li class="text-center">
              <span class="dropdown-item-text notification-dropdown-title"
                >Friend Requests<span
                  class="d-none badge rounded-pill bg-primary notif-badge"
                  >2</span
                ></span
              >
            </li>
            <li>
              <hr class="dropdown-divider mb-0" />
            </li>
            <li class="notif">
              <div class="d-flex pt-3 border-bottom w-100">
                <a href="#"
                  ><img class="notif-pfp" src="img/avatar/headshot.png"
                /></a>
                <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                  <div class="text-light">
                    From <a href="#" class="text-light"><strong>tor</strong></a
                    ><span class="text-muted"> • 52 mins ago</span>
                  </div>
                  <a href="#" class="text-success">Accept</a> or
                  <a href="#" class="text-danger">Decline</a>
                </div>
              </div>
            </li>
            <li class="notif">
              <div class="d-flex pt-3 border-bottom w-100">
                <a href="#"
                  ><img class="notif-pfp" src="img/avatar/headshot.png"
                /></a>
                <div class="pb-3 mb-0 small lh-sm w-100 notif-text">
                  <div class="text-light">
                    From
                    <a href="#" class="text-light"><strong>Splash</strong></a
                    ><span class="text-muted"> • Last month</span>
                  </div>
                  <a href="#" class="text-success">Accept</a> or
                  <a href="#" class="text-danger">Decline</a>
                </div>
              </div>
            </li>

            <li class="text-center">
              <div class="dropdown-item-text notif-info">
                You're all caught up!<br />
                <a href="#">View All</a>&nbsp;&nbsp;<a
                  href="#"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#acceptFriendsModal"
                  >Accept All</a
                >&nbsp;&nbsp;<a
                  href="#"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#declineFriendsModal"
                  >Decline All</a
                >
              </div>
            </li>
          </ul>
        </span>

        <span class="dropdown">
          <!-- Messages icon -->
          <a
            class="nav-pill-section nav-pill-icon-right position-relative icon-dropdown"
            href="#"
            style="position: relative; right: 1px"
            role="button"
            id="messagesDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi-envelope"></i>
            <span
              class="d-none position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"
              ><span class="visually-hidden">unread messages</span></span
            >
          </a>
          <!-- Messages Dropdown -->
          <ul
            class="dropdown-menu notification-dropdown"
            aria-labelledby="messagesDropdown"
            data-bs-popper="static"
          >
            <li class="text-center">
              <span class="dropdown-item-text notification-dropdown-title"
                >Messages<span
                  class="d-none badge rounded-pill bg-primary notif-badge"
                  >2</span
                ></span
              >
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
                    <span class="text-muted"
                      >Yesterday •<a href="#">View</a></span
                    >
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
        <a
          href="money.html"
          class="nav-pill-section nav-pill-icon-left font-weight-normal"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi-cash-stack nav-pill-section-icon text-success"
            viewBox="0 0 16 16"
          >
            <path
              d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
            />
            <path
              d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"
            />
          </svg>
          <span>&nbsp;970</span>
        </a>

        <a
          href="money.html"
          class="nav-pill-section nav-pill-icon-right font-weight-normal"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi-coin nav-pill-section-icon text-warning"
            viewBox="0 0 16 16"
          >
            <path
              d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"
            />
            <path
              d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
            />
            <path
              d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
            />
          </svg>
          <span>&nbsp;1.3k</span>
        </a>
      </div>
    </div>

    <!-- Mobile Only Condensed Nav Section -->
    <div class="navbar-nav d-none">
      <div class="nav-item text-nowrap nav-pill">
        <a
          class="nav-pill-section nav-pill-icon-left position-relative"
          href="#"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="18"
            height="18"
            fill="currentColor"
            class="bi-search nav-pill-section-icon"
            viewBox="0 0 16 16"
          >
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
            />
          </svg>
        </a>
        <a
          class="nav-pill-section nav-pill-icon position-relative icon-dropdown"
          href="#"
          role="button"
          id="bellDropdown"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi-bell nav-pill-section-icon"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
            />
          </svg>
          <span
            class="position-absolute top-30 start-75 translate-middle badge border border-dark rounded-circle bg-primary p-1"
            ><span class="visually-hidden">unread messages</span></span
          >
        </a>
        <a
          class="nav-pill-section nav-pill-icon-right position-relative"
          href="#"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi-cash-coin"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"
            />
            <path
              d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"
            />
            <path
              d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"
            />
            <path
              d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"
            />
          </svg>
        </a>
      </div>
    </div>

    <!-- User Nav Section-->
    <div class="navbar-nav dropdown d-inline-block">
      <div
        class="nav-item text-nowrap nav-pill"
        role="button"
        id="userDropdown"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        style="position: relative; bottom: 1px"
      >
        <a href="" class="nav-link nav-user">
          <div class="nav-user-username d-none d-md-inline-block text-light">
            Kyle <span class="text-danger d-none">{A}</span>
          </div>
          <img class="nav-pfp" src="img/avatar/headshot.png" />
          <!-- add class "nav-pfp-admin" for red background-->
        </a>
      </div>
      <ul
        class="dropdown-menu dropdown-menu-end user-dropdown"
        aria-labelledby="userDropdown"
        data-bs-popper="static"
      >
        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
        <li>
          <a class="dropdown-item" href="character.html">Edit Character</a>
        </li>
        <li>
          <a class="dropdown-item" href="settings.html">Account Settings</a>
        </li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <div class="d-none">
          <li>
            <a class="dropdown-item" href="#"
              ><span class="text-danger">{A}</span> Admin Panel</a
            >
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>
        </div>
        <li>
          <a class="dropdown-item text-danger" href="landing.html"
            >Log out -></a
          >
        </li>
      </ul>
    </div>
  </div>

  <!-- Decline All Trades Modal -->
  <div
    class="modal fade"
    id="declineTradesModal"
    tabindex="-1"
    aria-labelledby="declineTradesLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <h5 class="mb-4">
            Are you sure that you want <br class="d-none d-md-inline-block" />to
            decline all incoming trades?
          </h5>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            No, nevermind
          </button>
          <button type="button" class="btn btn-danger">Decline all</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Accept All Friends Modal -->
  <div
    class="modal fade"
    id="acceptFriendsModal"
    tabindex="-1"
    aria-labelledby="acceptFriendsLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <h5 class="mb-4">
            Are you sure that you want to
            <br class="d-none d-md-inline-block" />accept all incoming friend
            requests?
          </h5>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            No, nevermind
          </button>
          <button type="button" class="btn btn-primary">Accept all</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Decline All Trades Modal -->
  <div
    class="modal fade"
    id="declineFriendsModal"
    tabindex="-1"
    aria-labelledby="declineFriendsLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <h5 class="mb-4">
            Are you sure that you want to
            <br class="d-none d-md-inline-block" />decline all incoming friend
            requests?
          </h5>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            No, nevermind
          </button>
          <button type="button" class="btn btn-danger">Decline all</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Search Modal -->
  <div
    class="modal fade"
    id="searchModal"
    tabindex="-1"
    aria-labelledby="searchLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mobile Search</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <input
            class="form-control form-control-lg"
            type="text"
            placeholder=".form-control-lg"
            aria-label=".form-control-lg example"
          />
        </div>
      </div>
    </div>
  </div>
</div>
