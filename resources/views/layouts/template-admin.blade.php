<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="{{ asset('img/Icons/Icon.png') }}"
      type="image/x-icon"
    />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('admin-asset/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-asset/css/LineIcons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-asset/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-asset/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-asset/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-asset/css/main.css') }}" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="{{ url('/admin') }}">
          <img src="{{ asset('img/logo.png') }}" alt="logo" style="width: 90%; height: 90%;"/>
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
			  class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon"><i class="lni lni-users"></i></span>
              <span class="text">Users</span>
            </a>
            <ul id="ddmenu_1" class="collapse dropdown-nav">
              <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Show
                </a>
              </li>
			  <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Input Data
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed" 
			  data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon"><i class="lni lni-map-marker"></i></span>
              <span class="text">Destination</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Show
                </a>
              </li>
			  <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Input Data
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed" 
			  data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon"><i class="lni lni-clipboard"></i></span>
              <span class="text">Registration</span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Show
                </a>
              </li>
			  <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Input Data
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed" 
			  data-bs-toggle="collapse"
              data-bs-target="#ddmenu_4"
              aria-controls="ddmenu_4"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
				<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
				<path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
			  </svg></span>
              <span class="text">Print PDF</span>
            </a>
            <ul id="ddmenu_4" class="collapse dropdown-nav">
              <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> User
                </a>
              </li>
			  <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Destination
                </a>
              </li>	
			  <li>
                <a href="index.html">
                  <i class="lni lni-arrow-right"></i> Registration
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay" ></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn dark-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6 style="margin-right: 10px;">{{ Auth::user()->name }}</h6>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="lni lni-exit"></i> Sign Out </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== session ========== -->
      @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" style="position: fixed; z-index: 999; margin-left:40%;" role="alert"  id="danger-alert">
         {{ session('error') }}!
         <button type="button" class="btn-close btn-outline-danger" data-bs-dismiss="alert" aria-label="Close">
      </div>
      @endif
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" style="position: fixed; z-index: 999; margin-left:35%;" role="alert"  id="success-alert">
         {{ session('success') }}
         <button type="button" class="btn-close btn-outline-success" data-bs-dismiss="alert" aria-label="Close">
      </div>
      @endif
      <!-- ========== session end ========== -->  
      
      @yield('content')

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                    Copyright <strong><span>ZuraPro!</span></strong> 2021
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="terms d-flex justify-content-center justify-content-md-end"
              >
                <p class="text-sm">Alfin Adzuhri (12183500)</p>
                
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('admin-asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('admin-asset/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('admin-asset/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/world-merc.js') }}"></script>
    <script src="{{ asset('admin-asset/js/polyfill.js') }}"></script>
    <script src="{{ asset('admin-asset/js/main.js') }}"></script>

    <script>
      // =========== chart one start
      var ctx1 = document.getElementById("Chart1").getContext("2d");
      var chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "transparent",
              borderColor: "#2F80ED",
              data: [
                600,
                100,
                750,
                800,
                760,
                820,
                690,
                740,
                720,
                890,
                776,
                900,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#2F80ED",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        options: {
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "#ffffff",
                };
              },
            },
            intersect: false,
            backgroundColor: "#f9f9f9",
            titleFontColor: "#8F92A1",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart one end
    </script>
  </body>
</html>
