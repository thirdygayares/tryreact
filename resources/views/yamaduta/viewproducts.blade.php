
@extends('yamaduta.frontend');
@section('content')


   


                       

<!-- SHOP -->
<div id="shop-wrap">
   
    <section id="shop" class="right expandible-sidebar">
        
            <!-- FULL VIEW -->
            <div class="product-quick-view full view">
                <!-- PRODUCT PICTURES -->
                <div class="product-pictures">
                    <div class="product-photo">
                        <figure class="liquid">
                         <img src="{{asset('uploads/products/' .$products->image)}}" alt="product-image">  
                        </figure>
                    </div>
                
                </div>
                <!-- /PRODUCT PICTURES -->

                <!-- PRODUCT DESCRIPTION -->
                <div class="product-description">
                    <a href="#"><p class="highlighted category"></p></a>
                    <a href="#"><h6>{{$products->name}}</h6></a>
                    <!-- RATING -->
                    <ul class="rating big">
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                        <li>
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                    </ul>
                    <!-- /RATING -->
                    <p>{{$products->description}}</p>
                    <p class="highlighted current">Php {{$products->price}}</p>
                  
                    <h5> Size: {{$products->size}}</h5>
                    <br>
                    <div class="color-selection">
                        <h5>Color: {{$products->color}}</h5>
                     
                    </div>
                   
                   
                </div>
                <!-- /PRODUCT DESCRIPTION -->
            </div>
            <!-- /FULL VIEW -->

                        </div>
                        <!-- /RATE -->

                   
    @endsection