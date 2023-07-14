@extends('frontend.layouts.layout')
       
@section('home')
<div class="app__container">
    <div class="grid wide">
        <div class="row sm-gutter app__content">
            <div class="col l-2 m-0 c-0">
                <nav class="category">
                    <h3 class="category__heading">
                        <i class="category__heading-icon fa-solid fa-list"></i>
                        Danh mục
                    </h3>
    
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="#" class="category-item__link">Điện thoại</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Laptop</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">PC</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Taplet</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Chuột</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Bàn phím</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Tản nhiệt</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Giá đỡ</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Ram</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Card đồ họa</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">Lót chuột</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col l-10 m-12 c-12">
                <div class="home-filter hide-on-mobile-tablet">
                    <span class="home-filter__label">Sắp xếp theo</span>
                    <button class="home-filter__btn btn--primary btn">Phổ biến</button>
                    <button class="home-filter__btn btn">Mới nhất</button>
                    <button class="home-filter__btn btn">Bán chạy</button>

                    <div class="select-input">
                        <label class="select-input__label">Giá: None</label>
                        <i class="select-input__icon fas fa-angle-down"></i>
                        
                        <!-- List Option -->
                        <ul class="select-input__list">
                            <li class="select-input__item">
                                <a href="#" class="select-input__link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="select-input__item">
                                <a href="#" class="select-input__link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="home-filter__page">
                        <span class="home-filter__page-num">
                            <span class="home-filter__page-current">1</span>/<span class="home-filter__page-current-max">14</span>
                        </span>
                        <div class="home-filter__page-control">
                            <a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
                                <i class="home-filter__page-icon fas fa-angle-left"></i>
                            </a>
                            <a href="#" class="home-filter__page-btn">
                                <i class="home-filter__page-icon fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <nav class="mobile-category">
                    <ul class="mobile-category__list">
                        <li class="mobile-category__item flickering">
                            <a href="#" class="mobile-category__link">Thiết bị điện tử công nghệ</a>
                        </li>
                 
                        <li class="mobile-category__item">
                            <a href="#" class="mobile-category__link">Thiết bị điện tử</a>
                        </li>
                  
                        <li class="mobile-category__item flickering">
                            <a href="#" class="mobile-category__link">Đồ gia dụng</a>
                        </li>
             
                        <li class="mobile-category__item">
                            <a href="#" class="mobile-category__link">Quần áo</a>
                        </li>
             
                        <li class="mobile-category__item flickering">
                            <a href="#" class="mobile-category__link">Ba lo túi sách</a>
                        </li>
                 
                        <li class="mobile-category__item">
                            <a href="#" class="mobile-category__link">Đô nội thất</a>
                        </li>
                 
                        <li class="mobile-category__item flickering">
                            <a href="#" class="mobile-category__link">Đồ ăn</a>
                        </li>
             
                        <li class="mobile-category__item">
                            <a href="#" class="mobile-category__link">Phương tiện</a>
                        </li>                                          
                    </ul>
                </nav>

                <div class="home-product">
                    <div class="row sm-gutter">
                        <!-- Product item -->
                        <div class="col l-2-4 m-4 c-6 flickering">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6 flickering">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6 flickering">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="home-product-item">
                                <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/bef8b5c9809bbf10a969f7787e00d867_tn)"></div>
                                <h4 class="home-product-item__name">[Mã 159ELSALE hoàn 7% đơn 300K] Chuột Gaming AKKO AG325 Dragon Ball Super – Goku SSG - Cổng USB</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">1.200.000đ</span>
                                    <span class="home-product-item__price-current">999.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">88 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">Whoo</span>
                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                </div>
                                <div class="home-product-item__favourite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span> 
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="pagination home-product__pagination">
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-number pagination-item--active">
                        <a href="#" class="pagination-item__link">1</a>
                    </li>
                    <li class="pagination-item pagination-number">
                        <a href="#" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item pagination-number">
                        <a href="#" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item pagination-number">
                        <a href="#" class="pagination-item__link">4</a>
                    </li>
                    <li class="pagination-item pagination-number">
                        <a href="#" class="pagination-item__link">5</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item pagination-number">
                        <a href="#" class="pagination-item__link">14</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection