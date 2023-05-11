<div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">{{ $appSetting->website_name ?? 'website name'}}</h4>
                        <div class="footer-underline"></div>
                        <p>
                        Perfumes  website offer customers a convenient way to browse, compare, and purchase fragrances online.
                        Discover a world of fragrances, including top-rated brands and exclusive releases, since the 1500s, to find your perfect scent.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="{{ url('/')}}" class="text-white">Home</a></div>
                        <div class="mb-2"><a href="{{ url('/about us')}}" class="text-white">About Us</a></div>
                        <div class="mb-2"><a href="{{ url('/contact us')}}" class="text-white">Contact Us</a></div>
                        <div class="mb-2"><a href="{{ url('/my-account')}}" class="text-white">My Account</a></div>


                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Shop Now</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="{{ url('/collections')}}" class="text-white">Collections</a></div>

                        <div class="mb-2"><a href="{{ url('/cart')}}" class="text-white">Cart</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Reach Us</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <p>
                                <i class="fa fa-map-marker"></i> 
                                Carrefour Alex City Center
                                {{ $appSetting->address ?? 'address'}}
                            </p>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
<<<<<<< HEAD
                                <i class="fa fa-phone"></i> {{ $appSetting->phone1 ?? 'phone 1'}}
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i>  {{ $appSetting->email1 ?? 'email 1'}}
=======
                                <i class="fa fa-envelope"></i> basmaelwazzan@gmail.com
>>>>>>> 768849ac23f15cec77d1a24f0adc722dfc79167c
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class=""> &copy; 2023 - Blossom for perfumes. All rights reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social-media">
                            Get Connected:
                            {{ $appSetting->phone1 ?? 'phone 1'}}
                            
                            @if($appSetting->facebook)
                              <a href="{{ $appSetting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                            @endif
                            
                            @if($appSetting->twitter)
                              <a href="{{ $appSetting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                            @endif
                           
                            @if($appSetting->instagram)
                              <a href="{{ $appSetting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                            @endif
                           
                            @if($appSetting->youtube)
                              <a href="{{ $appSetting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                            @endif
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
