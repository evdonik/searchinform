<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?=$title ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?=PATH_PUBLIC_ASSETS ?>/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/metisMenu.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/typography.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/default-css.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/styles.css">
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS ?>/css/responsive.css">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- modernizr css -->
    <script src="<?=PATH_PUBLIC_ASSETS ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/">
                        <h4>SearchInform</h4>
                    </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active"> <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="/">List Tasks</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left"> <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i>
                            </li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php echo $content; ?>
        </div>
    </div>
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2018. SearchInform Systems.</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/popper.min.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/bootstrap.min.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/owl.carousel.min.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/metisMenu.min.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/jquery.slimscroll.min.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script type="text/javascript" src="<?=PATH_PUBLIC_ASSETS?>/js/jquery.jsontotable.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/plugins.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/scripts.js"></script>
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/tagsinput/tagsinput.js"></script>
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS?>/js/tagsinput/tagsinput.css">
    <script src="<?=PATH_PUBLIC_ASSETS?>/js/dynatable/jquery.dynatable.js"></script>
    <link rel="stylesheet" href="<?=PATH_PUBLIC_ASSETS?>/js/dynatable/jquery.dynatable.css">
    <script>
        $(document).ready(function() {

            function loadTable() {
                $.ajax({
                    url: '/ajaxhandler',
                    type: 'POST',
                    data: {
                        function: 'getList'
                    },
                    success: function(data) {
                        var $records = data,
                            myRecords = JSON.parse($records);
                        $('#tableList').DataTable({
                            data: myRecords,
                            "columns": [{
                                "data": "uuid"
                            }, {
                                "data": "title"
                            }, {
                                "data": "tags"
                            }, {
                                "data": "status"
                            }, {
                                "data": "priority"
                            }, {
                                "data": "edit",
                                "render": function(data, type, row) {
                                    return '<button class="btn btn-warning mb-3 btn-xs" id="updateTask" data-id="' + row.uuid + '" >edit</button> <button class="btn btn-danger mb-3 btn-xs" id="deleteTask" data-id="' + row.uuid + '" >del</button>';
                                }
                            }],
                            "order": [
                                [3, "asc"]
                            ]
                        });

                    }
                });
            }

            loadTable();

            $("#addTask").click(function() {
                $.ajax({
                    url: '/modaldialog',
                    type: 'POST',
                    data: {
                        function: 'addTaskModal'
                    },
                    success: function(data) {
                        $("#getCodeModal").html(data);
                        jQuery("#loadmodal").modal('show');
                        $('#addtags').tagsinput('add', 'some tag');
                    }
                });

            });

            $(document).on("click", "#updateTask", function(event) {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: '/modaldialog',
                    type: 'POST',
                    data: {
                        function: 'updateTaskModal',
                        id: id
                    },
                    success: function(data) {
                        $("#getCodeModal").html(data);
                        jQuery("#loadmodal").modal('show');
                        $('#addtags').tagsinput('add', 'some tag');
                    }
                });

            });

            $(document).on("click", "#deleteTask", function(event) {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: '/ajaxhandler',
                    type: 'POST',
                    data: {
                        function: 'deleteTask',
                        id: id
                    },
                    success: function(data) {
                        alert("Row Delete");
                        $('#tableList').dataTable().fnDestroy();
                        loadTable();
                    }
                });

            });

            $(document).on("click", "#submitaddtask", function(event) {

                var title = $("input#addtitle").val();
                if (title.length < 5) {
                    alert("No Title");
                    return false;
                };

                var priority = $("#addpriority").val();
                var tags = $("input#addtags").val();
                $.ajax({
                    url: '/ajaxhandler',
                    type: 'POST',
                    data: {
                        function: 'addList',
                        title: title,
                        priority: priority,
                        tags: tags
                    },
                    success: function(data) {
                        jQuery("#loadmodal").modal('hide');
                        $("#getCodeModal").html();
                        $('#tableList').dataTable().fnDestroy();
                        loadTable();

                    }
                });

            });

            $(document).on("click", "#submitupdatetask", function(event) {

                var title = $("input#addtitle").val();
                if (title.length < 5) {
                    alert("No Title");
                    return false;
                };
                var priority = $("#addpriority").val();
                var status = $("#addstatus").val();
                var tags = $("input#addtags").val();
                var uuid = $("input#uuid").val();

                $.ajax({
                    url: '/ajaxhandler',
                    type: 'POST',
                    data: {
                        function: 'updateTask',
                        title: title,
                        priority: priority,
                        tags: tags,
                        uuid: uuid,
                        status: status
                    },
                    success: function(data) {

                        jQuery("#loadmodal").modal('hide');
                        $("#getCodeModal").html();
                        $('#tableList').dataTable().fnDestroy();
                        loadTable();

                    }
                });

            });

        });
    </script>
</body>

</html>