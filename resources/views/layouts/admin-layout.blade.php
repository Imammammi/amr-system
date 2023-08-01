<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | JED AMR</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" id="bootstrap-css" media="all">
    <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet" id="bootstrap-css" media="all">
    
    <!-- Datatables CSS-->
    <link rel="stylesheet" href="{{ asset('js/datatable/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('js/datatable/dt-global_style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none;
        }

        .btn {
          background: #1C2833;
          font-size: 90%;
          padding: 2px 10px;
          border-radius: 25px;
          color: white;
        }
    </style>

    <script>
        let themeButton = document.querySelector('html')

        if (localStorage.getItem('theme') == 'dark') {
            themeButton.classList.add("dark");
        }

        function check() {
            if (themeButton.classList.contains('dark')) {
                themeButton.classList.remove("dark");
                localStorage.removeItem('theme')
            } else {
                themeButton.classList.add("dark");
                localStorage.setItem('theme', 'dark')
            }
        }
    </script>

</head>

<body>

    <div x-data="{ openSideMenu: false }" class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': openSideMenu }">
        {{-- Navbar --}}
        <livewire:partials.admin-navbar />
        {{-- <livewire:partials.navbar />         --}}

        <div class="flex flex-col flex-1">
            {{-- Header --}}
            <livewire:partials.admin-header />
            {{-- <livewire:partials.header /> --}}

            <main class="bg-gray-100 dark:bg-transparent h-full pb-16 overflow-y-auto">
                <!-- Remove everything INSIDE this div to a really blank page -->
                <div class="container px-6 mx-auto grid">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @livewireScripts

    @stack('show-readmore')

    <script>
        Livewire.on('created', function(e) {
            Swal.fire({
                title: e.title,
                icon: e.icon,
                iconColor: e.iconColor,
                timer: 1000,
                toast: true,
                position: 'top-right',
                // timerProgressBar: true,
                showConfirmButton: false,
            });
        });
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables Kasupda start-->
    <script src="{{ asset('js/datatable/datatables.js') }}"></script>
    <script src="{{ asset('js/datatables/custom_miscellaneous.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel Print Options You Must Include These Files  -->
    <script src="{{ asset('js/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/datatable/button-ext/buttons.print.min.js') }}"></script>
    <!-- NOTE TO Use PDF -->
    <script src="{{ asset('js/datatable/button-ext/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/datatable/button-ext/vfs_fonts.js') }}"></script>

    <script>
        $('#html5-table').DataTable({
            dom: 'l <"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [{
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn'
                    },
                ]
            },
            "pagingType": "simple",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-gray-900 dark:text-gray-300" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-gray-900 dark:text-gray-300" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Page _PAGE_ of _PAGES_",
                "sSearch": '',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [100, 250, 500, 1000],
            "pageLength": 100
        });
    </script>
    <!--Datatables Kasupda end-->
</body>

</html>
