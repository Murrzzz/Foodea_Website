<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Foodea</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/admin_history.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../user/image/foodea1.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.html"
            ><img src="assets/images/foodea_logo.PNG" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"
            ><img src="../../user/image/foodea.png" class="w-50" alt="logo"
          /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="assets/images/faces/face15.jpg"
                    alt=""
                  />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Verified</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"
                ><i class="mdi mdi-dots-vertical"></i
              ></a>
              <div
                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                aria-labelledby="profile-dropdown"
              >
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Account settings
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Change Password
                    </p>
                  </div>
                </a>
         
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="superadmin_index.html">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="admin_history.html">
              <span class="menu-icon">
                <i class="mdi mdi-history"></i>
              </span>
              <span class="menu-title">Transaction History</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-cards"></i>
              </span>
              <span class="menu-title">Voucher</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-library-books"></i>
              </span>
              <span class="menu-title">Activity log</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-box"></i>
              </span>
              <span class="menu-title">Account</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="superadmin_index.html"
              ><img src="../../user/image/foodea.png" class="w-50" alt="logo"
            /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search products"
                  />
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <!-- <a
                  class="nav-link btn btn-success create-new-button"
                  id="createbuttonDropdown"
                  data-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >+ Add Product</a
                > -->
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="createbuttonDropdown"
                >
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        UI Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Testing
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="messageDropdown"
                  href="#"
                  data-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="messageDropdown"
                >
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face4.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Mark send you a message
                      </p>
                      <p class="text-muted mb-0">1 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face2.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Cregh send you a message
                      </p>
                      <p class="text-muted mb-0">15 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face3.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Profile picture updated
                      </p>
                      <p class="text-muted mb-0">18 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0">
                        Just a reminder that you have an event today
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0">Update dashboard</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0">New admin wow!</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  id="profileDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <div class="navbar-profile">
                    <img
                      class="img-xs rounded-circle"
                      src="assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Henry Klein
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown"
                >
                  <h6 class="black p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                 
                </div>
              </li>
            </ul>
            <button
              class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
              type="button"
              data-toggle="offcanvas"
            >
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img
                          src="assets/images/dashboard/Group126@2x.png"
                          class="gradient-corona-img img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class=" mb-1 mb-sm-0" style="color: #FEEECB;">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the documents needed so you can access all features.
                        </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="#"
                            class="btn btn-warning btn-rounded get-started-btn text-decoration-none"
                            >Upload documents</a
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- rider table buttons -->
            <div class="row justify-content-sm-between px-3">
              <h4 class="card-title"></h4>
              <div class="template-demo">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Daily </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Date </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item" href="#">Day</a>
                    <a class="dropdown-item" href="#">Month</a>
                    <a class="dropdown-item" href="#">Year</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Status </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                    <a class="dropdown-item" href="#">Accepted</a>
                    <a class="dropdown-item" href="#">Cancelled</a>
                    <a class="dropdown-item" href="#">Delivered</a>
                    <a class="dropdown-item" href="#">In Delivery</a>
                  </div>
                </div>
              </div>
            </div>

      
           <!-- rider table -->
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="table-responsive text-center">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Transaction ID</th>
                              <th>Order Number</th>
                              <th>Customer???s ID</th>
                              <th>Rider's ID</th>
                              <th>Product ID</th>
                              <th>Date</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($history as $key => $data)

                            <tr>
                              <td>
                                {{$data->transaction_id}}
                              </td>
                              <td>
                                {{$data->order_id}}
                              </td>
                              <td>
                                {{$data->customer_id}}
                              </td>
                              <td>
                                {{$data->customer_id}}
                              </td>
                              <td>{{$data->product_Id}}</td>
                              <td>
                                {{$data->date}}
                              </td>
                              <td>
                                {{$data->order_status}}
                              </td>
                              <td>
                                  
                                  @if ($data->order_status =='Cancelled')
                                      <button class="btn btn-danger" data-toggle="modal" data-target="#Cancelled">
                                        Cancelled
                                      </button>
                                    @elseif($data->order_status=='Delivered')
                                      <button class="btn btn-success" data-toggle="modal" data-target="#Cancelled">
                                        Delivered
                                      </button>
                                    @else
                                    
                                    @endif
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#viewdetails">View Details</button>
                              </td>
                            </tr>

                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


                <!-- Modal Details -->
            <div class="modal fade" id="viewdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer's Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <!-- Accepted & User -->
                            <label><i class="mdi mdi-circle text-success icon-sm"></i>Accepted</label>
                            <img class="rounded-circle mx-auto d-block py-2" src="assets/images/sample2.jpg" width="120" height="110"/>
                            <ul class="list-unstyled text-center text-small">
                              <li>John Paul Quia</li>
                              <li>CAMARIN CALOOCAN CITY</li>
                              <li>09185731806</li>
                            </ul>
            
                  <!-- Orders -->
                  <div class="table-responsive-sm">
                    <table class="ordetails">
                      <thead>
                        <tr>
                          <th>Order</th>
                          <th>Product Name</th>
                          <th>Qty</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img
                              src="assets/images/milktea.jpg"
                              alt="image" width="40" height="50"
                            />
                          </td>
                          <td>Classic Milk Tea R</td>
                          <td>1</td>
                          <td>???95.00</td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="assets/images/milktea.jpg"
                              alt="image" width="40" height="50"
                            />
                          </td>
                          <td>Premium Milk Tea R</td>
                          <td>1</td>
                          <td>???115.00</td>
                        </tr>
                        <tr>
                          <td colspan="2"></td>
                          <td>Total</td>
                          <td>???210.00</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                         <div class="cod">
                         <label>Cash on Delivery</label>
                         </div>
                         <span class="ridername">
                         <div>
                         <label>Rider???s name</label>
                         </div>
                         <div>
                         <label>Juan Dela cruz</label>
                         </div>
                         </span>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block btn-rounded " data-dismiss="modal">Back</button>
                  </div>
                </div>
              </div>
            </div>
            

            <!-- Modal Delivered-->
            <div class="modal fade" id="Delivered" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <div class="container">
                    <div class="row">
                      <div class="col">
                        <label style="font-size: 11px;">Febraury 20, 2022</label>
                        <img src="assets/images/milktea.jpg" class="img-thumbnail"  width="105" height="100"/>
                        <div>
                        <label class="text-small px-2 text-center">4.5
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star-half text-warning"></i>
                        </label>
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label class="pt-2" style="font-size: 11px;">Quantity</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="1">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Price</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="???95.00">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Status</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="Delivered">
                        </div>
                      </div>
                    </div>

                    <div class="row py-3">
                      <div class="form-container">
                      <label style="font-size: 11px;">Product Name</label>
                      <input type="text" readonly placeholder="Milktea" />
                      <label style="font-size: 11px;">Customer???s Name</label>
                      <input type="text" readonly placeholder="John Doe" />
                      <label style="font-size: 11px;">Rider???s Name</label>
                      <input type="text" readonly placeholder="Juan Dela Cruz" />
                      <label style="font-size: 11px;">Comment</label>
                      <textarea type="text" readonly placeholder="Delicious nice flavor exact sweetness"></textarea>
                      <label style="font-size: 11px;">Amount</label>
                      <input type="text" readonly placeholder="???95.00"/>
                    </div>
                    </div>
                   </div>
                   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger  btn-rounded" style="width: 40%;" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger   btn-rounded" style="width: 50%;">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>  

            <!-- Modal Cancelled-->
          <div class="modal fade" id="Cancelled" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-sm" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <label style="font-size: 11px;">Febraury 20, 2022</label>
                        <img src="assets/images/milktea.jpg" class="img-thumbnail"  width="105" height="100"/>
                        <div>
                        <label class="text-small px-2 text-center">0
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                          <i class="mdi mdi-star-outline text-warning"></i>
                        </label>
                      </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label class="pt-2" style="font-size: 11px;">Quantity</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="1">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Price</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="???95.00">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11px;">Status</label>
                          <input type="text" class="form-control form-control-sm" readonly placeholder="Cancelled">
                        </div>
                      </div>
                    </div>

                    <div class="row py-3">
                      <div class="form-container">
                      <label style="font-size: 11px;">Product Name</label>
                      <input type="text" readonly placeholder="Milktea" />
                      <label style="font-size: 11px;">Customer???s Name</label>
                      <input type="text" readonly placeholder="John Paul" />
                      <label style="font-size: 11px;">Rider???s Name</label>
                      <input type="text" readonly placeholder="Juan Dela Cruz" />
                      <label style="font-size: 11px;">Comment</label>
                      <textarea type="text" readonly placeholder="Wrong Order"></textarea>
                      <label style="font-size: 11px;">Amount</label>
                      <input type="text" readonly placeholder="???95.00" />
                    </div>
                    </div>
                  </div>
                   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger  btn-rounded" style="width: 40%;" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger   btn-rounded" style="width: 50%;">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright ?? 2022. All Rights Reserved</span
              >
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
