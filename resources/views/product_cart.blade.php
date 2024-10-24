<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Cart Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}
.cart-item-thumb {
    display: block;
    width: 10rem
}

.cart-item-thumb>img {
    display: block;
    width: 100%
}

.product-card-title>a {
    color: #222;
}

.font-weight-semibold {
    font-weight: 600 !important;
}

.product-card-title {
    display: block;
    margin-bottom: .75rem;
    padding-bottom: .875rem;
    border-bottom: 1px dashed #e2e2e2;
    font-size: 1rem;
    font-weight: normal;
}

.text-muted {
    color: #888 !important;
}

.bg-secondary {
    background-color: #f7f7f7 !important;
}

.accordion .accordion-heading {
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: bold;
}
.font-weight-semibold {
    font-weight: 600 !important;
}
    </style>
</head>
<body>
<div class="container pb-5 mt-n2 mt-md-n3">
<div class="row">
<div class="col-xl-9 col-md-8">
<h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-secondary"><span>Products</span><a class="font-size-sm" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>

<div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
<div class="media d-block d-sm-flex text-center text-sm-left">
<a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF0000/000000" alt="Product"></a>
<div class="media-body pt-3">
<h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Calvin Klein Jeans Keds</a></h3>
<div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
<div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Black</div>
<div class="font-size-lg text-primary pt-2">Rp 125.00</div>
</div>
</div>
<div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
<div class="form-group mb-2">
<label for="quantity1">Quantity</label>
<input class="form-control form-control-sm" type="number" id="quantity1" value="1">
</div>
<button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
<polyline points="23 4 23 10 17 10"></polyline>
<polyline points="1 20 1 14 7 14"></polyline>
<path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
</svg>Update cart</button>
<button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
<polyline points="3 6 5 6 21 6"></polyline>
<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
<line x1="10" y1="11" x2="10" y2="17"></line>
<line x1="14" y1="11" x2="14" y2="17"></line>
</svg>Remove</button>
</div>
</div>

<div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
<div class="media d-block d-sm-flex text-center text-sm-left">
<a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/1E90FF/000000" alt="Product"></a>
<div class="media-body pt-3">
<h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">The North Face Hoodie</a></h3>
<div class="font-size-sm"><span class="text-muted mr-2">Size:</span>XL</div>
<div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Gray</div>
<div class="font-size-lg text-primary pt-2">Rp 134.00</div>
</div>
</div>
<div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
<div class="form-group mb-2">
<label for="quantity2">Quantity</label>
<input class="form-control form-control-sm" type="number" id="quantity2" value="1">
</div>
<button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
<polyline points="23 4 23 10 17 10"></polyline>
<polyline points="1 20 1 14 7 14"></polyline>
<path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
</svg>Update cart</button>
<button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
<polyline points="3 6 5 6 21 6"></polyline>
<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
<line x1="10" y1="11" x2="10" y2="17"></line>
<line x1="14" y1="11" x2="14" y2="17"></line>
</svg>Remove</button>
</div>
</div>

<div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
<div class="media d-block d-sm-flex text-center text-sm-left">
<a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF8C00/000000" alt="Product"></a>
<div class="media-body pt-3">
<h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Medicine Chameleon Sunglasses</a></h3>
<div class="font-size-sm"><span class="text-muted mr-2">Lenses:</span>Chameleon</div>
<div class="font-size-sm"><span class="text-muted mr-2">Frame:</span>Gray / Black</div>
<div class="font-size-lg text-primary pt-2">Rp 47.00</div>
</div>
</div>
<div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
<div class="form-group mb-2">
<label for="quantity3">Quantity</label>
<input class="form-control form-control-sm" type="number" id="quantity3" value="1">
</div>
<button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
<polyline points="23 4 23 10 17 10"></polyline>
<polyline points="1 20 1 14 7 14"></polyline>
<path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
</svg>Update cart</button>
<button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
<polyline points="3 6 5 6 21 6"></polyline>
<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
<line x1="10" y1="11" x2="10" y2="17"></line>
<line x1="14" y1="11" x2="14" y2="17"></line>
</svg>Remove</button>
</div>
</div>

<div class="d-sm-flex justify-content-between my-4">
<div class="media d-block d-sm-flex text-center text-sm-left">
<a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/eeeeee/000000" alt="Product"></a>
<div class="media-body pt-3">
<h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Adidas Performance Hat</a></h3>
<div class="font-size-sm"><span class="text-muted mr-2">Material:</span>Acrylic</div>
<div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Dark green</div>
<div class="font-size-lg text-primary pt-2">Rp 19.00</div>
</div>
</div>
<div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
<div class="form-group mb-2">
<label for="quantity4">Quantity</label>
<input class="form-control form-control-sm" type="number" id="quantity4" value="1">
</div>
<button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
<polyline points="23 4 23 10 17 10"></polyline>
<polyline points="1 20 1 14 7 14"></polyline>
<path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
</svg>Update cart</button>
<button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
<polyline points="3 6 5 6 21 6"></polyline>
<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
<line x1="10" y1="11" x2="10" y2="17"></line>
<line x1="14" y1="11" x2="14" y2="17"></line>
</svg>Remove</button>
</div>
</div>
</div>

<div class="col-xl-3 col-md-4 pt-3 pt-md-0">
<h2 class="h6 px-4 py-3 bg-secondary text-center">Subtotal</h2>
<div class="h3 font-weight-semibold text-center py-3">Rp 325.00</div>
<hr>
<h3 class="h6 pt-4 font-weight-semibold"><span class="badge badge-success mr-2">Note</span>Additional comments</h3>
<textarea class="form-control mb-3" id="order-comments" rows="5"></textarea>
<button class="btn btn-primary btn-block"  id="pay-button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
<rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
<line x1="1" y1="10" x2="23" y2="10"></line>
</svg>Proceed to Checkout</button>
<div class="pt-4">
<div class="accordion" id="cart-accordion">
<div class="card">
<div class="card-header">
<h3 class="accordion-heading font-weight-semibold"><a href="#promocode" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="promocode">Apply promo code<span class="accordion-indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span></a></h3>
</div>
<div class="collapse show" id="promocode" data-parent="#cart-accordion">
<div class="card-body">
<form class="needs-validation" novalidate>
<div class="form-group">
<input class="form-control" type="text" id="cart-promocode" placeholder="Promo code" required>
<div class="invalid-feedback">Please provide a valid promo code!</div>
</div>
<button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
</form>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
<h3 class="accordion-heading font-weight-semibold"><a class="collapsed" href="#shipping" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shipping">Shipping estimates<span class="accordion-indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span></a></h3>
</div>
<div class="collapse" id="shipping" data-parent="#cart-accordion">
<div class="card-body">
<form class="needs-validation" novalidate>
<div class="form-group">
<select class="form-control custom-select" required>
<option value>Choose your country</option>
<option value="Australia">Australia</option>
<option value="Belgium">Belgium</option>
<option value="Canada">Canada</option>
<option value="Finland">Finland</option>
<option value="Mexico">Mexico</option>
<option value="New Zealand">New Zealand</option>
<option value="Switzerland">Switzerland</option>
<option value="United States">United States</option>
</select>
<div class="invalid-feedback">Please choose your country!</div>
</div>
<div class="form-group">
<select class="form-control custom-select" required>
<option value>Choose your city</option>
<option value="Bern">Bern</option>
<option value="Brussels">Brussels</option>
<option value="Canberra">Canberra</option>
<option value="Helsinki">Helsinki</option>
<option value="Mexico City">Mexico City</option>
<option value="Ottawa">Ottawa</option>
<option value="Washington D.C.">Washington D.C.</option>
<option value="Wellington">Wellington</option>
</select>
<div class="invalid-feedback">Please choose your city!</div>
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="ZIP / Postal code" required>
<div class="invalid-feedback">Please provide a valid zip!</div>
</div>
<button class="btn btn-outline-primary btn-block" type="submit">Calculate shipping</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>


<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
 
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
</body>
</html>