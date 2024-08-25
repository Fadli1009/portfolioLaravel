<!DOCTYPE html>
<html lang="en">

<head>
    @include('portfolio.partials.head')

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('portfolio.partials.navbar')
        <!-- Header-->

        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->

    <!-- Bootstrap core JS-->
    @include('portfolio.partials.script')
</body>

</html>
