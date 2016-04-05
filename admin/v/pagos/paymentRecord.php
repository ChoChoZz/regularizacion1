<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Meta, title, CSS, favicons, etc. -->
    
    <title>Regularizaci&oacute;n IPN Administracion</title>
    <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas"/>
    <meta name="description" content="Regularización IPN">
    <meta name="author" content="GeanWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Icomoon CSS(font) -->
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/c3charts/c3.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/admin/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-branding">
            <a class="navbar-brand" href="#">
                <b>Regularización IPN</b>
            </a>
            <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown menu-merge">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name>Administrador</name> </span>
                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="../../assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                    <li class="dropdown-footer text-center">
                        <a href="../../c/cerrarSesion.php" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span> Cerrar sesi&oacute;n </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">

            <!-- Start: Sidebar Header -->
            <header class="sidebar-header"></header>
            <!-- End: Sidebar Header -->

            <!-- Start: Sidebar Menu -->
            <?php include("../menu.php"); ?>
            <!-- End: Sidebar Menu -->

            <!-- Start: Sidebar Collapse Button -->
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
            <!-- End: Sidebar Collapse Button -->

        </div>
        <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="#">
                            Pagos
                        </a>
                    </li>
                    <li class="crumb-link">
                        Registrar pago
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center pt30" style="height: 690px;">

              <!-- recent orders table -->
              <div class="panel">

                <div class="panel-menu admin-form theme-primary mtn">
                  <h6>Selecciona un grupo para registrar el pago</h6>
                  <div class="row mt30">
                      <div class="col-md-8">
                          <label class="field select">
                              <select id="filter-purchases" name="filter-purchases" class="empty">
                                  <option value="">Selecciona</option>
                                  <option value="">Grupo A </option>
                                  <option value="">Grupo B</option>
                                  <option value="">Grupo C</option>
                                  <option value="">Grupo D</option>
                                  <option value="">Grupo E</option>
                                  <option value="">Grupo F</option>
                                  <option value="">Grupo G</option>
                              </select>
                              <i class="arrow double"></i>
                          </label>
                      </div>
                  </div>
              </div>

                  <div class="panel-body pn">
                      <div class="table-responsive">
                          <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                              <thead>
                              <tr class="bg-light">
                                  <th class="">Nombre</th>
                                  <th class="">Primer Apellido</th>
                                  <th class="">Segundo Apeliido</th>
                                  <th class="">Teléfono</th>
                                  <th class="tcenter">Comentario</th>
                                  <th class="tcenter">Pago</th>
                                  <th class="tcenter">Cantidad registrada</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="">John</td>
                                  <td class="">Doe</td>
                                  <td class="">Smith</td>
                                  <td class="">55 2679 0012</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">Adam</td>
                                  <td class="">Abrams</td>
                                  <td class="">Douglas</td>
                                  <td class="">55 1262 7189</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">John</td>
                                  <td class="">Doe</td>
                                  <td class="">Smith</td>
                                  <td class="">55 2679 0012</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">Adam</td>
                                  <td class="">Abrams</td>
                                  <td class="">Douglas</td>
                                  <td class="">55 1262 7189</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">John</td>
                                  <td class="">Doe</td>
                                  <td class="">Smith</td>
                                  <td class="">55 2679 0012</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">Adam</td>
                                  <td class="">Abrams</td>
                                  <td class="">Douglas</td>
                                  <td class="">55 1262 7189</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">John</td>
                                  <td class="">Doe</td>
                                  <td class="">Smith</td>
                                  <td class="">55 2679 0012</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">Adam</td>
                                  <td class="">Abrams</td>
                                  <td class="">Douglas</td>
                                  <td class="">55 1262 7189</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">John</td>
                                  <td class="">Doe</td>
                                  <td class="">Smith</td>
                                  <td class="">55 2679 0012</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              <tr>
                                  <td class="">Adam</td>
                                  <td class="">Abrams</td>
                                  <td class="">Douglas</td>
                                  <td class="">55 1262 7189</td>
                                  <td>
                                    <label class="field prepend-icon">
                                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Comentario"></textarea>
                                      <label for="comment" class="field-icon">
                                        <i class="fa fa-comment-o"></i>
                                      </label>
                                    </label>
                                  </td>
                                  <td>
                                    <div class="smart-widget sm-right">
                                      <label class="field prepend-icon">
                                        <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000">
                                        <label for="s" class="field-icon">
                                          <i class="fa fa-money"></i>
                                        </label>
                                      </label>
                                      <button type="submit" class="button btn-primary">Registrar</button>
                                    </div>
                                  </td>
                                  <td>
                                   <input disabled type="text" name="sub2" id="sub2" class="gui-input" placeholder="$ 00.000"> 
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>

          </div>

        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->


</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
  <script src="../../assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="../../assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- jQuery Validate Plugin-->
  <script src="../../assets/admin/forms/js/jquery.validate.min.js"></script>

  <!-- HighCharts Plugin -->
  <script src="../../assets/js/plugins/highcharts/highcharts.js"></script>

  <!-- jQuery Validate Addon -->
  <script src="../../assets/admin/forms/js/additional-methods.min.js"></script>

  <!-- Theme Javascript -->
  <script src="../../assets/js/utility/utility.js"></script>
  <script src="../../assets/js/demo/demo.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/demo/widgets_sidebar.js"></script>
  <script src="../../assets/js/pages/forms-validation.js"></script>

</body>

</html>
