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
                            {{-- <h4><span class="text-semibold">Datatables</span> - Basic</h4> --}}
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
                            <li class="active">Basic</li>
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
                            <h5 class="panel-title">Data Surat Keterangan Security Clearance</h5>
                            {{-- <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div> --}}
                        </div>

                        <div class="panel-body">
                            <a href="{{url('/add-surat')}}" type="button" class="btn btn-primary">Tambah</a>
                            <div class="table-responsive">
                                <table class="table datatable-basic">
                                    <thead>
                                        <tr>
                                            {{-- <th>Berdasarkan</th> --}}
                                            <th>No</th>
                                            <th>Warga Negara</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Tgl lahir</th>
                                            <th>Kebangsaan</th>
                                            <th>No Paspor</th>
                                            <th>Tujuan</th>
                                            <th>Keperluan</th>
                                            <th>Berlaku</th>
                                            {{-- <th>Tempat Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Ditujukan</th>
                                            <th>Ditujukan</th>
                                            <th>Yang bertandatangan</th> --}}
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        {{-- <div class="panel-body">
                            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of
                            progressive enhancement, and will add advanced interaction controls to any HTML table.
                            DataTables has most features enabled by default, so all you need to do to use it with your
                            own tables is to call the construction function. Searching, ordering, paging etc goodness
                            will be immediately added to the table, as shown in this example. <strong>Datatables support
                                all available table styling.</strong>
                        </div> --}}
                        <div class="table-responsive">
                            <table class="table datatable-basic table-striped table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th>Berdasarkan</th> --}}
                                        <th>No</th>
                                        <th>Warga Negara</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Tgl lahir</th>
                                        <th>Kebangsaan</th>
                                        <th>No Paspor</th>
                                        <th>Tujuan</th>
                                        <th>Keperluan</th>
                                        <th>Berlaku</th>
                                        {{-- <th>Tempat Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Ditujukan</th>
                                        <th>Ditujukan</th>
                                        <th>Yang bertandatangan</th> --}}
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($data as $key => $datas)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $datas->warga_negara }}</td>
                                                <td>{{ $datas->nama }}</td>
                                                <td>{{ $datas->jabatan }}</td>
                                                <td>{{ date('d-M-Y', strtotime($datas->tgl_lahir)) }}</td>
                                                <td>{{ $datas->kebangsaan }}</td>
                                                <td>{{ $datas->no_paspor }}</td>
                                                <td>{{ $datas->tujuan }}</td>
                                                <td>{{ $datas->keperluan }}</td>
                                                <td>{{ date('d-M-Y', strtotime($datas->berlaku)) }}</td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="fill-data-pdf/{{ $datas->id }}"
                                                                        target="_blank"><i class="icon-file-pdf"></i>
                                                                        Export to
                                                                        .pdf</a></li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
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
