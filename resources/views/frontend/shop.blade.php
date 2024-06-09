
@section('content')

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            @forelse( $products as $product )

                <div class="col mb-5">
                    <div class="card h-100 w-72 bg-gray-700 shadow p-4 space-y-2 rounded-md hover:-translate-y-2 duration-300">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />

                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$product->title}}</h5>

                                <h6>{{$product->category}}</h6>
                                <!-- Product price-->
                                {{$product->price}} zł
                            </div>
                        </div>

                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('cart.add', ['id' => $products->id ])}}">Do koszyka</a></div>
                        </div>

                    </div>
                </div>
            @empty
                <div>Brak produktów</div>
            @endforelse
        </div>
    </div>
</section>
@endsection
