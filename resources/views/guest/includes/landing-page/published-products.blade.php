<div class="fluid-container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Our Latest Product</h2>
                <img src="{{ asset('assets/images/section-title.png') }}" alt="">
            </div>
        </div>
    </div>
    <ul class="row" x-data="{
                ads: [],
                page: 1,
                loadAds: function loadAds() {
                    fetch('/clouddeal/ads').then(response => response.json())
                    .then(data => {
                    this.ads = (this.ads || []).concat(data.allAds.data);
                    this.page++;
                    })
                    .catch(error => {
                    console.error(error);
                    });
                },
        }" x-init="loadAds">  
        <template x-if="ads">
            <template x-for="ad in ads">
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="assets/images/product/15.jpg" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li>
                                    <li><a href="@{{ route('dashboard.singe-ad', ['id' => ad.id]) }}"><i
                                                class="fa fa-eye"></i></a></li>
                                    <li><a href="{{ route('chat') }}"><i class="fa fa-send"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html" x-text="ad.name"></a></h3>
                            <p class="pull-left" x-text="ad.price">   
                            </p>
                        </div>
                    </div>
                </li>
            </template>
        </template>
        <li class="col-12 text-center">
            <a class="loadmore-btn" x-on:click="loadAds">Load More</a>
        </li>
    </ul>
</div>