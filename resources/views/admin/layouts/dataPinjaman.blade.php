@include('admin.partials.header')
<body>
    @include('admin.partials.navbar')
    <div id="app">
        @include('admin.partials.sidebar')
        <div id="main">

            @yield('data-pinjaman')

            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.scripts')
</body>
