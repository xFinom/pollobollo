<div class="main sticky-parent">
    <div class="main_content" data-sticky="true">
        <div class="main_content-about">
            <span class="label">Renta de Botargas</span>
            <h2 class="title">Mickey Mouse</h2>
            <div class="price h4 d-flex">
                <span class="price_item">$ 150</span> MXN
            </div>
            <div class="wrapper d-flex">
                <form action="{{route('checkout')}}" method="post">
                    @csrf
                    <button class="btn btn--black btn--shop addToCart">
                        <span class="text">Contratar</span>
                        <i class="icon icon-bag"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="main_content-accordion">
            <div class="wrapper accordion" id="aboutAccordion">
                <div class="accordion-item">
                    <h6 class="accordion-header" id="shipping">
                        <button
                            class="accordion-button h6"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#shippingContent"
                            aria-expanded="false"
                            aria-controls="shippingContent"
                        >
                            <span>Descripción</span> <i class="icon-angle-down icon"></i>
                        </button>
                    </h6>
                    <div id="shippingContent" class="accordion-collapse collapse" aria-labelledby="shipping">
                        <div class="accordion-body">
                            Bonita botarga de Mickey Mouse.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
