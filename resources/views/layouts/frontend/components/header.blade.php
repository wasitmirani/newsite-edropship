<header class="header-area header-v4 bg-white">
    <div class="header-navigation">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Brand Logo -->
                <div class="col-xl-4 col-md-6 col-8">
                    <div class="site-branding-and-language-selection">
                        <div class="brand-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/img/LOGO-Web.png')}}" alt="logo" width="50%">
                            </a>
                        </div>
                        {{-- <div class="language-selection">
                            <select class="nice-select" name="language">
                                <option value="en">English</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
                <!-- Desktop and Mobile Menu -->
                <div class="col-xl-8 col-md-6 col-4 text-center">
                    <div class="primary-menu d-flex justify-content-end align-items-center">
                        <div class="nav-menu">
                            <!-- Navbar Close Icon -->
                            <div class="navbar-close">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item menu-item-has-children" >
                                        <a href="https://store.edropship.co.uk/collections/new-in" class="nav-link ">Products</a>
                                        <ul class="sub-menu collection_menu" >
                                            <div >
                                                <div class="row">
                                                    <div class="col-11">
                                                        <h3> Products you Need    </h3>
                                                        <p style="font-size: 15px"> All the product you need and many more in the new collections are just a tap away!   </p>
                                                    </div>
                                                    <div class="col-1">
                                                            <a href="https://store.edropship.co.uk/collections/new-in" target="_blank">
                                                                <i class="fa fa-arrow-right mt-5" ></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                            {{--  <a href="{{route('integrations')}}">  --}}
                                            {{--  </a>  --}}
                                            <div class="int_nev">
                                                    <li><a href="https://store.edropship.co.uk/collections/adult" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/ElGZyY_large.jpg?v=1598944881"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Adult </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Automotive" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Automotive_large.jpg?v=1598944879"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Automotive </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Baby-Children" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Baby_Children_large.jpg?v=1598944849"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Baby & Children </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Books" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/books_large.jpg?v=1598944884"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Books </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Computers-Electronics" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/computers_electronics_large.jpg?v=1598944841"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Computers & Electronics </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/DIY-Tools" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/DIY_TOOLS_large.jpg?v=1598944889"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> DIY & Tools </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Fashion-Lifestyle" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Fashion_Lifestyle_large.jpg?v=1598944891"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Fashion & Lifestyle </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Food-Drink" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Food_Drink_large.png?v=1598944894"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Food & Drink </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Health-Beauty" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Health_Beauty_large.jpg?v=1598944795"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Health & Beauty </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/home-garden" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Home_Garden_large.jpg?v=1598944878"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Home & Garden </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Jewellery-Accessories" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Jewellery_Accessories_large.jpg?v=1598944798"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Jewellery & Accessories </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Sports & Outdoors" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/sports_Outdoors_large.png?v=1598944743"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Sports & Outdoors </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Stationery & Office Supplies" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/STATIONERY_OFFICE_SUPPLIES_large.jpg?v=1598944732"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Stationery & Office     </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Pet Suppliess" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Pet_Supplies_large.png?v=1598944767"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Pet Suppliess </span>   </span>
                                                        </a></li>


                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" >
                                        <a href="{{route('integrations')}}" class="nav-link ">Integrations</a>
                                        <ul class="sub-menu collection_menu" >
                                            <div  >
                                                <div class="row" >
                                                    <div class="col-11">
                                                        <h3> Integrations    </h3>
                                                        <p style="font-size: 15px"> Seamlessly integrate to your eCommerce store and render your dropshipping business a success overnight!   </p>
                                                    </div>
                                                    <div class="col-1">
                                                            <a href="{{route('integrations')}}">
                                                                <i class="fa fa-arrow-right mt-5"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                            {{--  <a href="{{route('integrations')}}">  --}}
                                            {{--  </a>  --}}
                                            <div class="int_nev">

                                                    <li>
                                                        <a href="{{route('integration',['slug'=>'amazon'])}}">  <span><img src="{{asset('assets/img/hero/amazon_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /><span class="ml-10 " style="font-size: 15px"> Amazon </span>
                                                            </span></a>
                                                    </li>
                                                    <li><a href="{{route('integration',['slug'=>'eBay'])}}">
                                                            <span><img src="{{asset('assets/img/hero/eBay_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> ebay </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'Etsy'])}}">
                                                            <span><img src="{{asset('assets/img/hero/Etsy_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Etsy </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'OnBuy'])}}">
                                                            <span><img src="{{asset('assets/img/hero/onbuy_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> OnBuy </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'shopify'])}}">
                                                            <span><img src="{{asset('assets/img/hero/shopify_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Shopify  </span>  </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'fruugo'])}}">
                                                            <span><img src="{{asset('assets/img/hero/fruugo_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Fruugo </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'wish'])}}">
                                                            <span><img src="{{asset('assets/img/hero/wish_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> wish </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'gumtree'])}}">
                                                            <span><img src="{{asset('assets/img/hero/gumtree_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> gumtree </span> </span>
                                                        </a></li>


                                                    <li><a href="{{route('integration',['slug'=>'FacebookShop'])}}">
                                                            <span><img src="{{asset('assets/img/hero/facebook_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> FacebookShop  </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'InstaShop'])}}">
                                                            <span><img src="{{asset('assets/img/hero/insta_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> InstaShop </span> </span> </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'google'])}}">
                                                            <span><img src="{{asset('assets/img/hero/google_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> GoogleShop </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'BigCommerce'])}}">
                                                            <span><img src="{{asset('assets/img/hero/bigcommerce_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> BigCommerce </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'woocommerce'])}}">
                                                            <span><img src="{{asset('assets/img/hero/woocommerce_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> WooCommerce </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'linnworks'])}}">
                                                            <span><img src="{{asset('assets/img/hero/Linnworks_icon.png')}}"
                                                                    width="40px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 15px"> Linnworks </span> </span>
                                                        </a></li>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nav-link">Partners</a>
                                        <ul class="sub-menu partner_menu">
                                                {{--  <div class="row">
                                                    <div class="col-6">
                                                        <img src="https://assets.website-files.com/5b3213161e5234bf1cfff9e1/5f21eb4cedf09d631827b06f_affiliates.jpg" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="https://assets.website-files.com/5b3213161e5234bf1cfff9e1/5f21eb4cedf09d631827b06f_affiliates.jpg" alt="">
                                                    </div>
                                                </div>  --}}


                                                @php
                                                    $partners=getPartners();
                                                @endphp
                                                @foreach ($partners as $item)
                                                <li><a href="{{route('partner',['slug'=>$item->slug])}}"><img src="https://img.icons8.com/bubbles/30/000000/user.png"/> &nbsp {{$item->name}} </a></li>
                                                @endforeach
                                                <li><a href="https://store.edropship.co.uk/" target=_blank><img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/30/000000/external-layers-graphic-design-vitaliy-gorbachev-flat-vitaly-gorbachev.png"/></i> &nbsp OnePiece
                                                        Wholesaler</a></li>
                                                <li><a href="https://store.edropship.co.uk/" target=_blank><img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/30/000000/external-layers-graphic-design-vitaliy-gorbachev-flat-vitaly-gorbachev.png"/> &nbsp Bulk Wholesaler</a>
                                                </li>

                                                <li><a href="{{route('contact.franchise')}}"> <img src="https://img.icons8.com/cute-clipart/30/000000/home.png"/> &nbsp Franchise </a></li>
                                                <li><a href="{{route('contact.whiteable')}}"> <img src="https://img.icons8.com/material-sharp/30/000000/double-tick.png"/> &nbsp Whitelable </a></li>
                                                <li><a href="{{route('contact.investment')}}"> <img src="https://img.icons8.com/cotton/30/000000/investment--v1.png"/> &nbspInvestment </a></li>
                                                <li><a href="{{route('contact.smartshop')}}"> <img src="https://img.icons8.com/fluency/30/000000/bookmark-ribbon.png"/> &nbspSmartshop </a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('pricing')}}" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nav-link">Resources</a>
                                        <ul class="sub-menu partner_menu">
                                            <li><a href="{{route('resources.tour')}}"><img src="https://img.icons8.com/nolan/30/google-cloud-platform.png"/> &nbsp Platform Tour </a></li>
                                            <li><a href="{{route('resources.academy')}}"> <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/30/000000/external-book-back-to-school-vitaliy-gorbachev-flat-vitaly-gorbachev.png"/> &nbsp {{config('app.name')}} Academy </a></li>
                                            <li><a href="{{route('resources.guru')}}"> <img src="https://img.icons8.com/color/30/000000/checked-user-male--v1.png"/> &nbsp {{config('app.name')}} Guru </a></li>
                                            <li><a href="{{route('resources.app')}}"> <img src="https://img.icons8.com/emoji/30/000000/mobile-phone.png"/> &nbsp Mobile App</a></li>
                                            <li><a href="{{route('resources.webinars')}}"> <img src="https://img.icons8.com/fluency/30/000000/video-call.png"/> &nbsp Webinars </a></li>
                                            <li><a href="{{route('resources.blogs')}}"> <img src="https://img.icons8.com/fluency/30/000000/bebo.png"/> &nbsp Blogs </a></li>
                                            <li><a href="{{route('resources.hotproducts')}}"> <img src="https://img.icons8.com/color/30/000000/shopping-cart--v2.png"/> &nbsp Hot Products </a></li>
                                            <li><a href="{{route('contact.contactus')}}"> <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/30/000000/external-contact-contact-us-flatart-icons-flat-flatarticons-1.png"/> &nbsp Contact </a></li>
                                            <li><a href="{{route('resources.freetool')}}"> <img src="https://img.icons8.com/external-prettycons-flat-prettycons/30/000000/external-design-tools-design-prettycons-flat-prettycons.png"/> &nbsp Free Tools </a></li>
                                            <li><a href="{{route('about')}}"> <img src="https://img.icons8.com/cute-clipart/30/000000/about.png"/> &nbsp About us </a></li>
                                            </a></li>
                                        </ul>
                                    </li>



                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul>
                                <li class="get-started-wrapper">
                                    <a href="https://portal.edropship.co.uk" class="filled-btn bg-mandy button-radius" target="_blank">
                                        Get Started <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="menu-toggle">
                                        <div class="menu-overlay"></div>
                                        <!-- Navbar Toggler -->
                                        <div class="nav-toggle">
                                            <div class="navbar-toggler float-end">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.header-navigation -->
</header> <!-- /.header-area -->
