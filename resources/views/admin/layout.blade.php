<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'title' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('admin/css/app.css') }}" rel="stylesheet">

    <!-- Custom Meta Data -->
    @include('admin.partials.meta')
</head>
<body class="min-w-site bg-40 text-black min-h-full">
    <div id="app">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <div class="min-h-screen flex-none pt-header min-h-screen w-sidebar bg-grad-sidebar">
                <a href="{{ route('dashboard') }}">
                    <div class="absolute pin-t pin-l pin-r bg-logo flex items-center w-sidebar h-header px-6 text-white">
                       @include('admin.partials.logo')
                    </div>
                </a>
                {{-- navigation --}}
                @include('admin.partials.sidebar')
            </div>

            <!-- Content -->
            <div class="content">
                <div class="flex items-center relative shadow h-header bg-white z-20 px-6">
                    <a href="/" class="no-underline dim font-bold text-90 mr-6">
                        {{ 'name' }}
                    </a>

                    <div class="ml-auto h-9 flex items-center dropdown-right">
                        @include('admin.partials.user')
                    </div>
                </div>

                <div class="px-view py-view mx-auto">
                    @yield('content')

                    @include('admin.partials.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('admin/js/app.js') }}"></script>
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}

</body>
</html>
