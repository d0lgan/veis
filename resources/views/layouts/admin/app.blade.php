<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ pagetitle()->get() }}</title>
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_admin.css') }}" rel="stylesheet">-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" rel="stylesheet"> 

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{ asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css')}}?{{ time() }}" rel="stylesheet" media="all">

    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>

    <!--<
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">-->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('css/templatemo_main.css') }}">
    <!--@yield('head')
    @yield('css')-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    
    <style type="text/css">
        body {
            font-family: 'Inter', sans-serif !important;
            font-weight: 400 !important;
        }

        textarea {
            border: 1px solid #cacaca;
            min-width: 100%;
            min-height: 140px;
            padding: .375rem .75rem;
        }

        .noti__item:hover i {
            color: #a9b3c9 !important;
        }

        table.product_table * {
            font-size: 12px;
        }





        .save,
        .back {
            position: relative;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
        }

        .close_modal {
            width: 60px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;

            padding: 0 !important;
        }

        .save { background-color: green; }
        .back { background-color: grey; }

        .back > i,
        .save > i {
            color: #fff;
            font-size: 18px;
            position: absolute;
        }

        .padding {
            text-align: left !important;
            padding: 5px 5px !important;
            line-height: 1.3;

            font-size: 12px !important;
        }

        .padding * {
            font-size: 12px !important;
        }

        th.padding {
            text-align: center;
        }        

        th.padding * {
            font-size: 10px !important;
        }

        .srw {
            width: auto !important;
            height: 25px;
        }


        .sr  {
            position: relative;
            width: 120px;
        }

        .sr .inp {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .sr .inp::placeholder {
            color: #fff;
            font-size: 14px !important;
            font-weight: bold;
        }

        .sr .sr_icon {
            position: absolute;
            width: 35px;
            height: 100%;
            text-align: center;
            line-height: 35px;
            right: 0;
            font-size: 14px !important;
        }


        .rel { 
            position: relative;
        }

        .abs {
            position: absolute;
        }

        .padding .au-checkmark {
            width: 18px !important;
            height: 18px !important;
        }

        .padding .au-checkmark:after {
            left: 4px !important;
            width: 7px !important;
            height: 13px !important;
            border-width: 0 3px 3px 0 !important;
        }

        .padding:first-child {
        	padding-left: 5px !important;
        	padding-right: 15px !important;
        }

        .padding span {
            line-height: 0 !important;
        }

        table.dataTable thead .bg-none {
        	background-image: none !important;
        }



        #imageModal .modal-dialog,
        #relationModal .modal-dialog {
            max-width: 800px !important;
        }


        #optionModal .modal-dialog,
        #attributeModal .modal-dialog,
        #dataModal .modal-dialog,
        #groupPriceModal .modal-dialog {
            max-width:  1200px !important;
            overflow-y: initial !important;
        }

        #optionModal .modal-dialog .modal-body {
            max-height: 800px !important;
            overflow-y: auto !important;
        }

        #attributeModal .scrollable {
            max-height: 614px !important;
            overflow-y: auto !important;
        }




        .navigation-bar {
            z-index: 999;
            width: auto; 
            position: fixed; 
            top: 65px; 
            bottom: 0; 
            background-color: #f5f5f5;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }

        .navigation-bar .navigation-bar__submenu > a {
             padding: 15px;
        }

        .navigation-bar .navigation-bar__submenu > a:hover {
            background-color: #EEEEEE;
        }

        .navigation-bar .navigation-bar__submenu > a:hover + ul,
        .navigation-bar .navigation-bar__submenu > ul:hover {
            display: block;
        }

        .navigation-bar i {
            color: #95A1B1;
        }

        .navigation-bar .navigation-bar__submenu {
            position: relative;
        }

        .navigation-bar .navigation-bar__submenu > ul {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            width: 200px;
            background-color: #f5f5f5;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }

        .navigation-bar .navigation-bar__submenu > ul > li {
            width: 100%;
            height: 45px;
        }

        .navigation-bar .navigation-bar__submenu > ul > li > a {
             width: 100%;
             height: 100%;
             display: flex;
             align-items: center;
             padding-left: 10px;
             color: #808080;
        }

        .navigation-bar .navigation-bar__submenu > ul > li > a:hover {
            background-color: #EEEEEE;
        }





        .dataTables_length select {
            width: 70px;
            height: 100%;
            text-align: center;
            margin-left: 5px;
        }



        .main-content {
            padding: 25px 0 !important;
        }


        




        table.table.table-data2 th:first-child,
        table.table.table-data2 td:first-child {
            padding-left: 20px;
            text-align: center;
        }



        .contact_select,
        .dataTables_length select {
            appearance: none !important;
            outline: none !important;
            border: none !important;
            height: 100% !important;

            padding: .375rem .75rem !important;
            font-size: 1rem !important;
            line-height: 1.5 !important;
            color: #495057 !important;
            background-color: #fff !important;
            background-clip: padding-box !important;
            border: 1px solid #ced4da !important;
            border-radius: .25rem !important;
            background-image: url("https://cdn.datatables.net/1.10.22/images/sort_desc.png");
            background-repeat: no-repeat !important;
            background-position: 98% 40% !important;
            cursor: pointer !important;
/*
            cursor: pointer !important;
            border-radius: 5px !important;
            border: 1px solid #e5e5e5 !important;
            color: #000 !important;
            background-color: #fff !important;
            background-image: url("https://cdn.datatables.net/1.10.22/images/sort_desc.png");
            background-repeat: no-repeat !important;
            background-position: center right !important;*/
        }


        .dataTables_filter input::placeholder {
            color: #6c757d;
            opacity: 1;
        }


        .dataTables_filter input:focus,
        .dataTables_length select:focus {
            color: #495057 !important;
            background-color: #fff !important;
            border-color: #80bdff !important;
            outline: 0 !important;
            box-shadow: 0 0 0 .2rem rgba(0,123,255,.25) !important;
        }


        .dataTables_filter input {
            display: block !important;
            padding: .375rem .75rem !important;
            font-size: 1rem !important;
            line-height: 1.5 !important;
            color: #495057 !important;
            background-color: #fff !important;
            background-clip: padding-box !important;
            border: 1px solid #ced4da !important;
            border-radius: .25rem !important;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
        }


        .dataTables_wrapper .dataTables_paginate span .paginate_button,
        .ellipsis,
        .dataTables_wrapper .dataTables_paginate .paginate_button.next,
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
            margin: 0 !important;
            display: inline-block !important;
            padding: .375rem .75rem !important;
            font-size: .875rem !important;
            line-height: 1.5 !important;
            margin-top: .5rem !important;
            border: 1px solid #c4c4c4 !important;
            background-color: #fff !important;
        }


        .dataTables_wrapper .dataTables_paginate .paginate_button.next,
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
            background-color: #fff !important;
            color: #333 !important;
        }


        .dataTables_wrapper .dataTables_paginate span .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover {
            background: #0069d9 !important;
            border-color: #0069d9 !important;
            color: #fff !important;
        }


        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            color: #c4c4c4 !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
            border: 1px solid #c4c4c4 !important;
            background-color: #fff !important;
            color: #c4c4c4 !important;
        }
        .dataTables_wrapper .dataTables_paginate span .paginate_button.current {
            color: #fff !important;
            border-color: #007bff !important;
            background: #007bff !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background-color: #007bff !important;
            color: #fff !important;
        }


        .dataTables_length > label,
        .dataTables_filter > label {
            margin: 0 !important;
        }


        .dataTables_paginate.paging_simple_numbers {
            float: none !important;
            text-align: center !important;
        }





        table.products thead select {
            position: relative;
            z-index: 2;
            appearance: none;
            border: none; 
            outline: none; 
            background-color: transparent; 
            font-size: 12px; 
            font-weight: 600; 
            color: #555; 
            text-transform: uppercase; 
            cursor: pointer; 
            height: 100%;
        }

        table.products thead .default {
            z-index: 1;
        }


        .langs .active {
            border-bottom-color: grey !important;
        }

        .card-body.card-block .tab {
            display: none !important;
        }

        .card-body.card-block .tab.active {
            display: flex !important;
        }

        .dataTables_scrollBody {
            border-bottom: none !important;
        }

        .dataTables_scrollBody table thead {
        	visibility: collapse;
        }

        .dataTables_scrollBody table tbody td {
            border-bottom: 5px solid #ebebeb !important;
        }

        .dataTables_scrollBody table tbody tr:last-child td {
            border-bottom: none !important;
        }

    </style>
</head>
<body>
<div id="app">
    <div class="page-wrapper" style="background: #EBEBEB !important;">
        @include('layouts.admin.nav')
    </div>


    <div class="page-container" style="padding-left: 40px !important; width: 100%; margin: 0 auto; background-color: #EBEBEB">
        <div id="app">
        	@yield('content')
        </div>
    </div>
</div>
<!-- Jquery JS-->
<script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}">
</script>

<!-- Main JS-->
<script src="{{ asset('js/main.js') }}?{{ time() }}"></script>



<script src="{{ asset('js/app.js') }}?{{ time() }}"></script>
<script src="https://kit.fontawesome.com/226334c91f.js" crossorigin="anonymous"></script>







@yield('js')

@yield('test')

<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

		
		main_datatable = $(".datatable").DataTable({
            dom: '<"datatables_lf_wrapper" lf>tp',
            pageLength: 14,
            scrollY: '671px',
            scrollCollapse: true,
            language: {
                "lengthMenu": "_MENU_",
                "search": "_INPUT_",
                "searchPlaceholder": "Поиск...",
                "paginate": {
                   "next":       '<i class="fas fa-angle-double-right"></i>',
                   "previous":   '<i class="fas fa-angle-double-left"></i>'
                },
            },
			initComplete : function(){
				
				var datatebleActions = $('.datateble-actions .row'),
					dataTablesLength = $('.dataTables_length'),
					dataTablesFilter = $('.dataTables_filter'),
					dataTablesLength2 = undefined,
					dataTablesFilter2 = undefined;
				
				
				if(datatebleActions.length)
				{
					var datateblePromise = new Promise(function(resolve){
						if(dataTablesLength.length)
						{
							dataTablesHtml = dataTablesLength.clone();
							dataTablesLength.css('display','none');
							datatebleActions.prepend(dataTablesHtml);
							dataTablesLength2 = datatebleActions.find('.dataTables_length');
							dataTablesLength2.removeAttr('id');
							dataTablesLength2.addClass('col-auto').addClass('ml-3').addClass('p-0');
							dataTablesLength2 = dataTablesLength2.find('select');
							dataTablesLength2.on('change',function(e){
								options = dataTablesLength.find('option');
								options.removeAttr('selected');
								options.eq(dataTablesLength2.find('option:selected').index()).attr('selected','selected').trigger('change');
							});
						}
						
						resolve('1');
						
					});
					
					datateblePromise.then(function(){
						if(dataTablesFilter.length)
						{
							dataTablesHtml = dataTablesFilter.clone();
							dataTablesFilter.css('display','none');
							
							if(dataTablesLength2 != undefined)
							{
								datatebleActions.find('.dataTables_length').before(dataTablesHtml);
							}
							else
							{
								datatebleActions.prepend(dataTablesHtml);
							}
							
							dataTablesFilter2 = datatebleActions.find('.dataTables_filter');
							dataTablesFilter2.removeAttr('id');
							dataTablesFilter2.addClass('col-auto').addClass('ml-3').addClass('p-0');
							dataTablesFilter2 = dataTablesFilter2.find('input');
							dataTablesFilter2.on('input',function(e){
								dataTablesFilter.find('input').val(dataTablesFilter2.val()).trigger('input');
							});
						}
					});
					
				}
			}
        });


        category_datatable = $(".datatable-category").DataTable({
            dom: '<"datatables_lf_wrapper" lf>tp',
            pageLength: 13,
            scrollY: '748px',
            scrollCollapse: true,
            language: {
                "lengthMenu": "_MENU_",
                "search": "_INPUT_",
                "searchPlaceholder": "Поиск...",
                "paginate": {
                   "next":       '<i class="fas fa-angle-double-right"></i>',
                   "previous":   '<i class="fas fa-angle-double-left"></i>'
                },
            },
            initComplete : function(){
                
                var datatebleActions = $('.datateble-actions .row'),
                    dataTablesLength = $('.dataTables_length'),
                    dataTablesFilter = $('.dataTables_filter'),
                    dataTablesLength2 = undefined,
                    dataTablesFilter2 = undefined;
                
                
                if(datatebleActions.length)
                {
                    var datateblePromise = new Promise(function(resolve){
                        if(dataTablesLength.length)
                        {
                            dataTablesHtml = dataTablesLength.clone();
                            dataTablesLength.css('display','none');
                            datatebleActions.prepend(dataTablesHtml);
                            dataTablesLength2 = datatebleActions.find('.dataTables_length');
                            dataTablesLength2.removeAttr('id');
                            dataTablesLength2.addClass('col-auto').addClass('ml-3').addClass('p-0');
                            dataTablesLength2 = dataTablesLength2.find('select');
                            dataTablesLength2.on('change',function(e){
                                options = dataTablesLength.find('option');
                                options.removeAttr('selected');
                                options.eq(dataTablesLength2.find('option:selected').index()).attr('selected','selected').trigger('change');
                            });
                        }
                        
                        resolve('1');
                        
                    });
                    
                    datateblePromise.then(function(){
                        if(dataTablesFilter.length)
                        {
                            dataTablesHtml = dataTablesFilter.clone();
                            dataTablesFilter.css('display','none');
                            
                            if(dataTablesLength2 != undefined)
                            {
                                datatebleActions.find('.dataTables_length').before(dataTablesHtml);
                            }
                            else
                            {
                                datatebleActions.prepend(dataTablesHtml);
                            }
                            
                            dataTablesFilter2 = datatebleActions.find('.dataTables_filter');
                            dataTablesFilter2.removeAttr('id');
                            dataTablesFilter2.addClass('col-auto').addClass('ml-3').addClass('p-0');
                            dataTablesFilter2 = dataTablesFilter2.find('input');
                            dataTablesFilter2.on('input',function(e){
                                dataTablesFilter.find('input').val(dataTablesFilter2.val()).trigger('input');
                            });
                        }
                    });
                    
                }
            }
        });

        $(".datatable-length").DataTable({
            dom: '<"datatables_l_wrapper" l>',
            language: {
                "lengthMenu": "_MENU_",
            },
            initComplete : function(){
                
                var datatebleActions = $('.datateble-actions .row'),
                    dataTablesLength = $('.dataTables_length'),
                    dataTablesLength2 = undefined;
                
                
                if(datatebleActions.length)
                {
                    var datateblePromise = new Promise(function(resolve){
                        if(dataTablesLength.length)
                        {
                            dataTablesHtml = dataTablesLength.clone();
                            dataTablesLength.css('display','none');
                            datatebleActions.prepend(dataTablesHtml);
                            dataTablesLength2 = datatebleActions.find('.dataTables_length');
                            dataTablesLength2.removeAttr('id');
                            dataTablesLength2.addClass('col-auto').addClass('ml-3').addClass('p-0');
                            dataTablesLength2 = dataTablesLength2.find('select');
                            dataTablesLength2.on('change',function(e){
                                options = dataTablesLength.find('option');
                                options.removeAttr('selected');
                                options.eq(dataTablesLength2.find('option:selected').index()).attr('selected','selected').trigger('change');
                            });
                        }
                        
                        resolve('1');
                        
                    });
                    
                }
            }
        });



        $(".datatable-length-paging").DataTable({
            dom: '<"datatables_l_wrapper" l>tp',
            language: {
                "lengthMenu": "По _MENU_",
                "paginate": {
                    "next":       "",
                    "previous":   ""
                },
            }
        });



        $(".ru, .uk").on('click', (event) => {
            var clickedElement = $(event.currentTarget);
            var clickToggle = clickedElement.attr('data-id');
            var elements = $('.langs > div');
            var tabs = $('.card-body.tabs > .tab');

            $.each(elements, (index, item) => {
                $(item).removeClass('active');
            });

            clickedElement.addClass('active');

            $.each(tabs, (index, tab) => {
                $(tab).removeClass('active');
            });

            $(`#${clickToggle}`).addClass('active');

            console.log('test');
        });


    });
</script>




</body>
</html>
