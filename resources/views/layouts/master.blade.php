<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Manoti | Microfinance Application</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" @keyup="searchit" v-model="search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click="searchit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Manoti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{Auth::user()->name}}
              <p>{{Auth::user()->type}}</p>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
            <router-link to="/home" class="nav-link">
                <i class="nav-icon fas fa-home blue"></i>
                <p>
                Home

                </p>
            </router-link>
            </li>


            <li class="nav-item">
            <router-link to="/customers" class="nav-link">
                <i class="nav-icon fas fa-user blue"></i>
                <p>
                Customer Profile

                </p>
            </router-link>
            </li>

            
            @can('isAdmin')
          <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>
              <p>
                Action
                <i class="right fa fa-angle-left"></i>
              </p>
                 </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/addCustomer" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add Customer</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/finances" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Manage Finances</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/pendingLoans" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Pending Loans</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/pendingDisbursment" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Pending Disbursments</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/messenger" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Messenger</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/employees" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Employees</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/adminRequest" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Admin Requests</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/ussd" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>USSD Activity</p>
                </router-link>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                <p>
                Dashboard

                </p>
            </router-link>
          </li>

            <li class="nav-item">
            <router-link to="/payroll" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt blue"></i>
                <p>
                Payroll

                </p>
            </router-link>
            </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>
              <p>
                Reports
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p> Customers</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/customerLoans" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Customer Loans</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/payments" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Payments</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/overdueInstallments" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Overdue Installments</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/DefaultedLoans" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Defaulted Loans</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/portfolio" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>BDO portfolio</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/overpayments" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>over payments</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/debitRecovery" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>debit Recovery</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/BooksofAccounts" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Books of Accounts</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/employees" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Employees</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/payroll" class="nav-link">
                  <i class="fas fa fa-money-bill-alt nav-icon"></i>
                  <p>Payroll</p>
                </router-link>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-money-bill-alt green"></i>
              <p>
                Transactions
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/disbursment" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p> Disbursment</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/charges" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Charges</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/credits" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Credits</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/Debits" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Debits</p>
                </router-link>
              </li>
              </ul>
             </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-calendar-alt green"></i>
              <p>
                Calendars
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/disbursmentcalendar" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p> Disbursment</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/collection" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Collection</p>
                </router-link>
              </li>
              </ul>
              </li>

              <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>
              <p>
                Targets
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/disbursmentcalendar" class="nav-link">
                  <i class="fas fa-dot-circle nav-icon"></i>
                  <p> Disbursment Targets</p>
                </router-link>
              </li>
              </ul>
              </li>

          <li class="nav-item">
                <router-link to="/administration" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Administration
                    </p>
                </router-link>
         </li>
         @endcan
          <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <p>
                        Profile
                    </p>
                </router-link>
         </li>

          <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                 </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Manoti</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth

<script src="/js/app.js"></script>
</body>
</html>
