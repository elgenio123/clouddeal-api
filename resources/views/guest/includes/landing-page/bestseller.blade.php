<div class="fluid-container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Best Seller</h2>
                <img src="assets/images/section-title.png" alt="">
            </div>
        </div>
    </div>

    <ul class="row">
        @forelse ($ads as $ad)
            <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="product-wrap">
                    <div class="product-img">
                        <img src="{{ $ad->image_path }}" alt="">
                        <div class="product-icon flex-style">
                            <ul>
                                <li>
                                <li><a href="{{ route('dashboard.singe-ad', ['id' => $ad->id]) }}"><i
                                            class="fa fa-eye"></i></a></li>
                                <li><a href="https://wa.me/691586487" target="_blank"><i class="fa fa-send"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="single-product.html">{{ $ad->name }}</a></h3>
                        <p class="pull-left">
                            {{ toMoney($ad->price) }}
                        </p>
                    </div>
                </div>
            </li>
        @empty
            <p class="text-center">No best seller</p>
        @endforelse
    </ul>
</div>
