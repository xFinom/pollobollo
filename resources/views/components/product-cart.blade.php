<!-- cart popup component start -->
<div class="cart_popup">
    <div class="cart_popup-backdrop"></div>
    <div class="cart_popup-helper">
        <div class="cart_popup-wrapper">
            <div class="cart_popup-header d-flex flex-wrap justify-content-between align-items-center">
                <h4 class="success"><i class="icon icon-check"></i> Item Added</h4>
                <span class="cartID">Cart Id: 12345</span>
                <p class="note">Please note: Item(s) is not reserved until checkout is completed</p>
            </div>
            <div class="cart_popup-main">
                <ul class="cart_popup-main_list">
                    <li class="list-item">
                        <div class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="{{asset('images/assets/placeholder.jpg')}}" type="image/webp" />
                                <img class="lazy" data-src="img/placeholder.jpg" src="{{asset('images/assets/placeholder.jpg')}}" alt="Limited Edition T-Shirt" />
                            </picture>
                        </div>
                        <div class="main">
                            <div class="main_info">
                                <div class="wrapper">
                                    <span class="main_info-label">Clothing</span>
                                    <a class="main_info-remove" href="#">
                                        <span class="text">remove</span>
                                        <i class="icon icon-close"></i>
                                    </a>
                                </div>
                                <h6 class="main_info-title">Limited Edition T-Shirt</h6>
                                <ul class="main_info-details">
                                    <li>
                                        <span class="property">size:</span>
                                        <span class="value">s</span>
                                    </li>
                                    <li>
                                        <span class="property">color:</span>
                                        <span class="value">pink</span>
                                    </li>
                                </ul>
                                <div class="wrapper">
                                    <div class="main_info-qty">
                                        <span class="main_info-qty_label">Qty:</span>
                                        <div class="qty">
                                                    <span class="qty_minus control">
                                                        <i class="icon-minus"></i>
                                                    </span>
                                            <input class="qty_amount" type="number" readonly value="1" min="1" max="99" hidden />
                                            <span class="qty_amount-display"></span>
                                            <span class="qty_plus control">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <span class="main_info-price">$320</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="{{asset('images/assets/placeholder.jpg')}}" type="image/webp" />
                                <img class="lazy" data-src="img/placeholder.jpg" src="{{asset('images/assets/placeholder.jpg')}}" alt="Red Flame Jacket" />
                            </picture>
                        </div>
                        <div class="main">
                            <div class="main_info">
                                <div class="wrapper">
                                    <span class="main_info-label">Clothing</span>
                                    <a class="main_info-remove" href="#">
                                        <span class="text">remove</span>
                                        <i class="icon icon-close"></i>
                                    </a>
                                </div>
                                <h6 class="main_info-title">Red Flame Jacket</h6>
                                <ul class="main_info-details">
                                    <li>
                                        <span class="property">size:</span>
                                        <span class="value">s</span>
                                    </li>
                                    <li>
                                        <span class="property">color:</span>
                                        <span class="value">pink</span>
                                    </li>
                                </ul>
                                <div class="wrapper">
                                    <div class="main_info-qty">
                                        <span class="main_info-qty_label">Qty:</span>
                                        <div class="qty">
                                                    <span class="qty_minus control">
                                                        <i class="icon-minus"></i>
                                                    </span>
                                            <input class="qty_amount" type="number" readonly value="1" min="1" max="99" hidden />
                                            <span class="qty_amount-display"></span>
                                            <span class="qty_plus control">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <span class="main_info-price">$320</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="{{asset('images/assets/placeholder.jpg')}}" type="image/webp" />
                                <img class="lazy" data-src="img/placeholder.jpg" src="{{asset('images/assets/placeholder.jpg')}}" alt="Festival Necklace" />
                            </picture>
                        </div>
                        <div class="main">
                            <div class="main_info">
                                <div class="wrapper">
                                    <span class="main_info-label">Clothing</span>
                                    <a class="main_info-remove" href="#">
                                        <span class="text">remove</span>
                                        <i class="icon icon-close"></i>
                                    </a>
                                </div>
                                <h6 class="main_info-title">Festival Necklace</h6>
                                <ul class="main_info-details">
                                    <li>
                                        <span class="property">size:</span>
                                        <span class="value">s</span>
                                    </li>
                                    <li>
                                        <span class="property">color:</span>
                                        <span class="value">pink</span>
                                    </li>
                                </ul>
                                <div class="wrapper">
                                    <div class="main_info-qty">
                                        <span class="main_info-qty_label">Qty:</span>
                                        <div class="qty">
                                                    <span class="qty_minus control">
                                                        <i class="icon-minus"></i>
                                                    </span>
                                            <input class="qty_amount" type="number" readonly value="1" min="1" max="99" hidden />
                                            <span class="qty_amount-display"></span>
                                            <span class="qty_plus control">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <span class="main_info-price">$320</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart_popup-footer">
                <div class="cart_popup-footer_summary d-flex flex-column">
                    <div class="subtotal">
                        <span class="subtotal_title">Subtotal</span>
                        <span class="subtotal_sum">$1320.00</span>
                    </div>
                    <div class="total h6">
                        <span class="total_title">Total</span>
                        <span class="total_sum">$1320.00</span>
                    </div>
                </div>
                <div class="cart_popup-footer_action d-flex">
                    <a class="btn btn--black" href="cart.html">View options</a>
                    <a class="btn btn--accent btn--hover-black" href="cart.html">Checkout</a>
                </div>
                <p class="note">Suspendisse potenti. Fusce id cursus massa. Duis tuc uno venenatis ex</p>
            </div>
        </div>
    </div>
</div>
<!-- cart popup component end -->
