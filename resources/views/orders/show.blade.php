@extends('../layouts/master_filter_product')

@section('title','product filter')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button class="help-btn"><i class="far fa-question-circle"></i><br/>Help</button>
			</div>
		</div>
        
        <div class="row">
            <div class="col-md-3 mb-4">
				<div class="row">
					<div class="col-md-12 mb-3">
						<a href="#" class="menu-herf">Home </a>
						<a href="#" class="menu-herf">| EV </a>
						<a href="#" class="menu-herf2">| Cars </a>
					</div>
				</div>
                <div class="card">
					<p class="filtter-title mb-0">Filter</p>
					<p class="price-title mb-0">Price Range</p>
					<div class="price-range">
						Min Price
						<input type="number" min="5000" value="0" > <br><br>
						Max Price
						<input type="number" min="5000" value="5000000000" > 
					</div>
					<p class="color-title mb-0">Color / Pattern</p>
					<div class="row">
						<div class="col-md-12">
							<div class="discovers-grid3">
								<div class="color-select" style="background-color: #52B3A9;">
									
								</div>
								<div class="color-select" style="background-color: #EB3231;">
									
								</div>
								<div class="color-select" style="background-color: #8E98A0;">
									
								</div>								
								<div class="color-select" style="background-color: #20D3A3;">
									
								</div>
								<div class="color-select" style="background-color: #8E98A0;">
									
								</div>
								<div class="color-select2" style="background-color: #0B121A;">
									
								</div>
								<div class="color-select" style="background-color: #883636;">
									
								</div>
								<div class="color-select" style="background-color: #EA6060;">
									
								</div>
							</div>	
						</div>
					</div>
				</div>
                <br>
                <div class="card">
					<p class="color-title mb-1">Manufactures</p>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="" checked>
						<label class="" for="">All</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Tesla</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">BMW</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Nissan</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Rivian</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Ford</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Volkswagen</label>
					</div>
					<div class=" ">
						<input type="radio" class="" name="vehicle" id="">
						<label class="" for="">Volta</label>
					</div>
				</div>
                <br>
				<br>
				
                <div class="card">
					<p class="color-title mb-1">Segments</p>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="mini">
						<label class="custom-control-label" for="mini">Mini</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="small">
						<label class="custom-control-label" for="small">Small</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="medium">
						<label class="custom-control-label" for="medium">Medium</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="large">
						<label class="custom-control-label" for="large">Large</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="executive">
						<label class="custom-control-label" for="executive">Executive</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="luxury">
						<label class="custom-control-label" for="luxury">Luxury</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="passegervan">
						<label class="custom-control-label" for="passegervan">Passeger Van</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="sports">
						<label class="custom-control-label" for="sports">Sports</label>
					</div>
				</div>

			</div>

            <div class="col-md-9">
                <div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4 col-5">
							  <p class="product-title">Cars <span class="">(39) Results</span></p>
							</div>
							<div class="col-md-4 col-4 offset-md-4">
								<form class="form-inline brand-form2">
									<div>
										<select class="selectpicker rounded-pill form-input" style="color:black;">
											<option selected disabled>Sort by: Type Vehicle</option>
											<option>Car</option>
											<option>Motorcycle</option>
									  </select>
								  </div>
							  </form>
							</div>
						</div>
					</div>
					
					<div class="col-mb-12 mb-4">
						<div class="row no-gutters ">
							<div class="col-auto">
								<button class="color-title filtter-btn">
									<span class="text-left">Car</span>
									<i class="far fa-times-circle"></i>
								</button>
							</div>
							<div class="col-auto">
								<button class="color-title filtter-btn">
									<span class="text-left">Medium </span>
									<i class="far fa-times-circle"></i>
								</button>
							</div>
						</div>
					</div>

                    <div class="col-md-12">
                        <div class="discovers-grid2">
                            <a href="#">
                                <figure>
                                    <div>
                                        <img src="{{asset('Niche-master/volti_assets/images/ev-database.org/EV-Car-BMW iX1 xDrive30.jpg')}}" class="image-products"/>
                                    </div>
                                    <figcaption class="discover-caption">
                                        <p class="discover-subtitle">
											<img src="volti_assets\images\bmw-logo.png" class="brand-icon"/>
											BMW
										</p>
										<p class="discover-title mb-0">BMW iX1 xDrive30</p>
										<p class="price2" style="font-weight: bold;">Rp 1.234.056.000</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spaces"></div>
        <br>
	</div>
@endsection