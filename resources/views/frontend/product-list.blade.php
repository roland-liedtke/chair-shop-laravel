<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('templates/shopHome/assets/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('templates/shopHome/css/styles.css')}}" rel="stylesheet" />
</head>
<body>

@yield('navigation')


<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

{{--            @forelse( $products as $product )--}}

{{--                <div class="col mb-5">--}}
{{--                    <div class="card h-100">--}}
{{--                        <!-- Product image-->--}}
{{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                        <!-- Product details-->--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="text-center">--}}
{{--                                <!-- Product name-->--}}
{{--                                <h5 class="fw-bolder">{{$product->title}}</h5>--}}
{{--                                <!-- Product price-->--}}
{{--                                {{$product->price}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Product actions-->--}}
{{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @empty--}}
{{--            @endforelse--}}
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="sticky-bottom py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Roland Liedtke 2024</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('templates/shopHome/js/scripts.js')}}"></script>
</body>
</html>