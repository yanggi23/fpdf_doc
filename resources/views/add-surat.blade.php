<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ url('ltr/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('ltr/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('ltr/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('ltr/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('ltr/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ url('ltr/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('ltr/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('ltr/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('ltr/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ url('ltr/assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('ltr/assets/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('ltr/assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('ltr/assets/js/pages/datatables_basic.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="{{ url('ltr/assets/images/logo_light.png') }}"
                    alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li>
                    <a class="sidebar-control sidebar-main-toggle hidden-xs">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-git-compare"></i>
                        <span class="visible-xs-inline-block position-right">Git updates</span>
                        <span class="badge bg-warning-400">9</span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                            Git updates
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-sync"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body width-350">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="media-annotation">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-commit"></i></a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="media-annotation">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-branch"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span
                                        class="text-semibold">Design</span> branch
                                    <div class="media-annotation">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-merge"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span>
                                    and <span class="text-semibold">Dev</span> branches
                                    <div class="media-annotation">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="media-annotation">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All activity"><i
                                    class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-people"></i>
                        <span class="visible-xs-inline-block position-right">Users</span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                            Users online
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-gear"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body width-300">
                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Jordana Ansley</a>
                                    <span class="display-block text-muted text-size-small">Lead web developer</span>
                                </div>
                                <div class="media-right media-middle"><span class="status-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Will Brason</a>
                                    <span class="display-block text-muted text-size-small">Marketing manager</span>
                                </div>
                                <div class="media-right media-middle"><span class="status-mark border-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Hanna Walden</a>
                                    <span class="display-block text-muted text-size-small">Project manager</span>
                                </div>
                                <div class="media-right media-middle"><span class="status-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Dori Laperriere</a>
                                    <span class="display-block text-muted text-size-small">Business developer</span>
                                </div>
                                <div class="media-right media-middle"><span
                                        class="status-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
                                    <span class="display-block text-muted text-size-small">UX expert</span>
                                </div>
                                <div class="media-right media-middle"><span
                                        class="status-mark border-grey-400"></span></div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All users"><i
                                    class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="visible-xs-inline-block position-right">Messages</span>
                        <span class="badge bg-warning-400">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Messages
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-compose"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            <li class="media">
                                <div class="media-left">
                                    <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                        alt="">
                                    <span class="badge bg-danger-400 media-badge">5</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">James Alexander</span>
                                        <span class="media-annotation pull-right">04:58</span>
                                    </a>

                                    <span class="text-muted">who knows, maybe that would be the best thing for
                                        me...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                        alt="">
                                    <span class="badge bg-danger-400 media-badge">4</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Margo Baker</span>
                                        <span class="media-annotation pull-right">12:16</span>
                                    </a>

                                    <span class="text-muted">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Jeremy Victorino</span>
                                        <span class="media-annotation pull-right">22:48</span>
                                    </a>

                                    <span class="text-muted">But that would be extremely strained and
                                        suspicious...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Beatrix Diaz</span>
                                        <span class="media-annotation pull-right">Tue</span>
                                    </a>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Richard Vango</span>
                                        <span class="media-annotation pull-right">Mon</span>
                                    </a>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All messages"><i
                                    class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('ltr/assets/images/placeholder.jpg') }}" alt="">
                        <span>Victoria</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i
                                    class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img
                                        src="{{ url('ltr/assets/images/placeholder.jpg') }}"
                                        class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">



                                <!-- Forms -->
                                <li class="navigation-header"><span>Forms</span> <i class="icon-menu"
                                        title="Forms"></i></li>
                                <li class="active">
                                    <a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>

                                </li>

                                <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><a href="{{URL::previous()}}" class="icon-arrow-left52 position-left"></a> <span
                                    class="text-semibold">Datatables</span> - Basic</h4>
                        </div>

                        {{-- <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div> --}}
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="datatable_basic.html">Datatables</a></li>
                            <li class="active">Tambah Surat Keterangan</li>
                        </ul>

                        {{-- <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Tambah Data Surat Keterangan Security Clearance</h5>
                            {{-- <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div> --}}
                        </div>

                        <div class="panel-body">
                            <form role="form" class="form-horizontal" action="{{url('/insert-surat')}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                    <hr>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Jabatan</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="jabatan" placeholder="Masukkan jabatan">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tanggal Lahir</label>
										<div class="col-lg-10">
											<input type="date" class="form-control" name="tgl_lahir" >
										</div>
									</div>

                                    <div class="form-group">
			                        	<label class="control-label col-lg-2">Warga Negara</label>
			                        	<div class="col-lg-10">
				                            <select name="select_negara" class="form-control">
				                                <option value="">--Pilih Negara--</option>
				                                <option value="Arab Saudi">Arab Saudi</option>
				                                <option value="Amerika Serikat">Amerika Serikat</option>
				                                <option value="Australia">Australia</option>
				                                <option value="Belanda">Belanda</option>
				                                <option value="Cina">Cina</option>
				                                <option value="Korea">Korea</option>
				                            </select>
			                            </div>
			                        </div>
                                    
                                    <div class="form-group">
			                        	<label class="control-label col-lg-2">Kebangsaan</label>
			                        	<div class="col-lg-10">
				                            <select name="select_kebangsaan" class="form-control">
				                                <option value="">--Pilih Kebangsaan--</option>
				                                <option value="Arab Saudi">Arab Saudi</option>
				                                <option value="Amerika Serikat">Amerika Serikat</option>
				                                <option value="Australia">Australia</option>
				                                <option value="Belanda">Belanda</option>
				                                <option value="Cina">Cina</option>
				                                <option value="Korea">Korea</option>
				                            </select>
			                            </div>
			                        </div>
                                    

									<div class="form-group">
										<label class="control-label col-lg-2">No.Paspor</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="paspor" placeholder="Masukkan paspor">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tujuan</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="tujuan" placeholder="Masukkan tujuan">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Keperluan</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" class="form-control" name="keperluan" placeholder="Masukkan keperluan"></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tanggal Berlaku</label>
										<div class="col-lg-10">
											<input type="date" class="form-control" name="tgl_berlaku" >
										</div>
									</div>

								

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
                        </div>
                    </div>
                    <!-- /basic datatable -->




                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a
                            href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>
