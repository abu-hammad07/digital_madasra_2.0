<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <title>Student Admission Form - Digital Madarsa</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Digital Madarsa" />
  <meta name="keywords" content="Digital Madarsa" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Favicon Link -->
  <link rel="shortcut icon" type="image/png" href="../assets/images/favicon.png" />
  <!-- CSS Link -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/umar.css">

  <!-- <link rel="stylesheet" href="../assets/css/template/owl.carousel.min.css"> -->
  <link rel="stylesheet" href="../assets/css/bootstrap/style.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
</head>

<body>
  <!-- Body Wrapper -->

  <?php
  require('./header.php')
  ?>

  <!-- Main Content (Start) -->
  <div class="container-fluid">
    <!-- Main Content Header Card (Start) -->
    <div class="card bg-light-primary position-relative overflow-hidden breadcurmb-card-shadow">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="my-3 fs-8 text-primary word-spacing-2px">طلبہ کا داخلہ</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none fs-4" href="index.html">ڈیش بورڈ</a>
                </li>
                <li class="breadcrumb-item fs-4" aria-current="page">
                  طلبہ کا داخلہ
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-3">
            <div class="text-center mb-n5">
              <img src="../assets/images/ChatBc.png" alt="" class="img-fluid mb-n4" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content Header Card (End) -->

    <!-- Student Admission Form (Start) -->
    <div class="row">
      <!-- Madarsa Info -->
      <form action="./st_admi_all_code.php" method="POST">
        <div class="col-12">
          <div class="card">
            <div class="border-bottom title-part-padding mt-3">
              <h4 class="card-title mb-0 fs-7 text-primary"> 1۔ مدرسہ کے معلومات</h4>
            </div>
            <div class="card-body">
              <div class="row g-4">
                <div class="col-md-6">
                  <label for="رجسٹریشن نمبر" class="fs-5 mb-1" for="reg-number">رجسٹریشن نمبر</label>
                  <input type="number" name="reg_number" class="form-control fw-semibold fs-3" required placeholder="#04321" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label for="" class="fs-5 mb-1" for="std-area">رہائش منتخب کریں</label>
                  <select id="std-area" name="std_area" class="form-select fw-semibold jameel-kasheeda fs-4 cursor-pointer" data-allow-clear="true">
                    <option value="" class="jameel-kasheeda">- - -</option>
                    <option value="رہائشی" class="jameel-kasheeda">رہائشی</option>
                    <option value="غیر رہائشی" class="jameel-kasheeda">غیر رہائشی</option>
                  </select>
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6 mb-2">
                  <label class="fs-5 mb-1" for="std-dep">شعبہ منتخب کریں</label>
                  <select id="std-dep" name="std_dep" class="form-select fw-semibold jameel-kasheeda fs-4 cursor-pointer" data-allow-clear="true">
                    <option value="" class="jameel-kasheeda">- - -</option>
                    <option value="حفظ" class="jameel-kasheeda">حفظ</option>
                    <option value="ناظرہ" class="jameel-kasheeda">ناظرہ</option>
                    <option value="اسکول" class="jameel-kasheeda">اسکول</option>
                  </select>
                  <!-- <span class="error" id="std-dep-err"></span> -->
                </div>
                <div class="col-md-6 mb-2">
                  <label class="fs-5 mb-1" for="std-qadeem">منتخب کریں</label>
                  <select id="std-qadeem" name="std_qadeem" class="form-select fw-semibold jameel-kasheeda fs-4 cursor-pointer" data-allow-clear="true">
                    <option value="" class="jameel-kasheeda">- - -</option>
                    <option value="قدیم" class="jameel-kasheeda">قدیم</option>
                    <option value="جدید" class="jameel-kasheeda">جدید</option>
                  </select>
                  <!-- <span class="error" id="std-dep-err"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Student Info -->
        <div class="col-12">
          <div class="card">
            <div class="border-bottom title-part-padding mt-3">
              <h4 class="card-title mb-0 fs-7 text-primary"> 2۔ طلبہ کے معلومات</h4>
            </div>
            <div class="card-body">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="std-name">نام</label>
                  <input type="text" name="std_name" class="form-control fw-semibold fs-4" required placeholder="احمد" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="std-father-name">والد کا نام</label>
                  <input type="text" name="std_father_name" class="form-control fw-semibold fs-4" required placeholder="شفیع عالم" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="std-dbo">تاریخ پیدائش</label>
                  <input type="date" name="std_dbo" class="form-control fw-semibold fs-4" required placeholder="DD/MM/YYYY" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="std-birth-place">مقام پیدائش</label>
                  <input type="text" name="std_birth_place" class="form-control fw-semibold fs-3" required placeholder="کراچی" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-12">
                  <label class="fs-5 mb-1" for="std-address">پتہ</label>
                  <input type="text" name="std_address" class="form-control fw-semibold fs-4" required placeholder="36/جی لانڈھی کراچی۔ گلی نمبر 1" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Father Info -->
        <div class="col-12">
          <div class="card">
            <div class="border-bottom title-part-padding mt-3">
              <h4 class="card-title mb-0 fs-7 text-primary"> 3۔ والدین کے معلومات</h4>
            </div>
            <div class="card-body">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="guar-name">سرپرست کا نام</label>
                  <input type="text" name="guar_name" class="form-control fw-semibold fs-4" required placeholder="شفیع عالم" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="guar-relation">سرپرست سے رشتہ</label>
                  <input type="text" name="guar_relation" class="form-control fw-semibold fs-4" required placeholder="والدِ محترم" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="guar-number">فون نمبر</label>
                  <input type="number" name="guar_number" class="form-control fw-semibold fs-3" required placeholder="03186432506" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="guar-address">پتہ</label>
                  <input type="text" name="guar_address" class="form-control fw-semibold fs-4" required placeholder="36/جی لانڈھی کراچی۔ گلی نمبر 1" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Education Info -->
        <div class="col-12">
          <div class="card">
            <div class="border-bottom title-part-padding mt-3">
              <h4 class="card-title mb-0 fs-7 text-primary"> 4۔ تعلیم کے معلومات</h4>
            </div>
            <div class="card-body">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="pre-school">سابقہ مدرسہ</label>
                  <input type="text" name="pre_school" class="form-control fw-semibold fs-4" required placeholder="دارالعلوم کراچی" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="pre-class">سابقہ درجہ</label>
                  <input type="text" name="pre_class" class="form-control fw-semibold fs-4" required placeholder="اوٰلی" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="next-class">مطلوبہ درجہ</label>
                  <input type="text" name="next_class" class="form-control fw-semibold fs-4" required placeholder="ثانیہ" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
                <div class="col-md-6">
                  <label class="fs-5 mb-1" for="adm-date">تاریخ داخلہ</label>
                  <input type="date" name="adm_date" class="form-control fw-semibold fs-3" required placeholder="DD/MM/YYYY" />
                  <!-- <span class="error" id="std-area-err"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  </div>
  <!-- Submit Button -->
  <div class="col-md-12 mt-4 jameel-kasheeda">
    <button type="button" id="submit" name="submit" class="btn btn-primary fw-semibold fs-5">ایڈ کریں</button>
  </div>
  </div>






  </div>
  </div>
  <!-- Student Admission Form (End) -->
  </div>
  <!-- Main Content (End) -->
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  </div>

  <!--  Mobilenavbar -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
      <div class="offcanvas-header justify-content-between">
        <img src="../assets/images/digital_madarsa.png" alt="" class="img-fluid">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
        <ul id="sidebarnav">
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span>
                <i class="ti ti-layout-grid-add fs-6"></i>
              </span>
              <!-- <span class="hide-menu"><i class="ti ti-layout-grid-add fs-6"></i></span> -->
            </a>
            <ul aria-expanded="false" class="collapse first-level my-3">
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="../assets/images/menu/student.png" alt="" class="img-fluid" width="28" height="28">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold bg-hover-primary jameel-kasheeda fs-5">طلبہ</h6>
                    <span class="fs-2 d-block text-muted jameel-kasheeda">طلبہ کے معلومات</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="../assets/images/menu/money.png" alt="" class="img-fluid" width="28" height="28">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold bg-hover-primary jameel-kasheeda fs-5">فیس</h6>
                    <span class="fs-2 d-block text-muted jameel-kasheeda">فیس کے معلومات</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                  </div>
                </a>
              </li>
              <ul class="px-8 mt-7 mb-4">
                <li class="sidebar-item mb-3">
                  <h5 class="fs-5 fw-semibold">Quick Links</h5>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Register Now</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Notes App</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">User Application</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Account Settings</a>
                </li>
              </ul>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
              <span>
                <i class="ti ti-message-dots"></i>
              </span>
              <span class="hide-menu">Chat</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
              <span>
                <i class="ti ti-calendar"></i>
              </span>
              <span class="hide-menu">Calendar</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
              <span>
                <i class="ti ti-mail"></i>
              </span>
              <span class="hide-menu">Email</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!--  Search Bar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content rounded-1">
        <div class="modal-header border-bottom">
          <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
          <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
            <i class="ti ti-x fs-5 ms-3"></i>
          </span>
        </div>
        <div class="modal-body message-body" data-simplebar="">
          <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
          <ul class="list mb-0 py-2">
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                <span class="fs-3 text-muted d-block">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                <span class="fs-3 text-muted d-block">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Function to clear the console
    function clearConsole() {
      console.clear(); // Clear the console
    }

    // Call the clearConsole function after a 10-second delay
    setTimeout(clearConsole, 7000); // 7000 milliseconds = 7 seconds
  </script>

  <!--  Import Js Files -->
  <script src="../assets/js/jquery/jquery.min.js"></script>
  <script src="../assets/js/template/simplebar.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>

  <!--  core files -->
  <script src="../assets/js/template/app.min.js"></script>
  <script src="../assets/js/template/app.init.js"></script>
  <script src="../assets/js/template/app-style-switcher.js"></script>
  <script src="../assets/js/template/sidebarmenu.js"></script>
  <script src="../assets/js/template/custom.js"></script>

  <!--  current page js files -->
  <script src="../assets/js/template/owl.carousel.min.js"></script>
  <script src="../assets/js/template/apexcharts.min.js"></script>
  <!-- <script src="../assets/js/template/widgets-charts.js"></script> -->
  <script src="../assets/js/template/dashboard.js"></script>
</body>

</html>