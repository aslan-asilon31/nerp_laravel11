<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Volti </title>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="filter_detail_assets/style/style.css">
  <script defer="" src="filter_detail_assets/script/script.js"></script>

</head>
<body>

  <main>

    <section id="content" style="margin-top: 20px;">
      <div class="images_part">
        <div class="image_box">
          <img src="filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1.jpg" alt="image_1" class="image_preview"  onclick="openGallery(this)">
        </div>

        <div class="images_smallbox">
          <ul>
            <li>
            	<img src="filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1-part1.jpg" alt="image_1" onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1-part2.jpg" alt="image_2" onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1-part4.jpg" alt="image_3" onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1.jpg" alt="image_4" onclick="changeImage(this)">
            </li>
          </ul>
        </div>
      </div>

      <div class="image_btns">
    		<button onclick="change(-1)"><img src="filter_detail_assets/images/icon-previous.svg" alt="previous button"></button>
    		<button onclick="change(1)"><img src="filter_detail_assets/images/icon-next.svg" alt="next button"></button>
    	</div>

      <div class="info_part">
        <div class="title">
            <a href="" class="bg-green"> << Back</a> <br>
          <h1>Honda Company</h1>
          <h2>Honda e:Ny1</h2>
        </div>

        <div class="info_text">
          <p>adalah mobil listrik pintar yang dirancang untuk memberikan pengalaman berkendara yang modern dan ramah lingkungan. Mobil ini dilengkapi dengan teknologi canggih dan desain yang futuristik, serta memiliki berbagai fitur terkini untuk kenyamanan dan keamanan pengguna.</p>
        </div>

        <div class="price_part">
          <p class="price">Rp 0</p>
          <p class="offer">0%</p>
          <p class="before_price">Rp 0</p>
        </div>

        <div class="price_part_color">
          <!-- Glossy Red  -->
          <a class="btne " style="background-color: #ff0000;"></a> 
          <!-- Matte Blue  -->
          <a class="btne " style="background-color: #2c3e50;"></a> 
          <!-- Matte Red  -->
          <a class="btne " style="background-color: #c0392b;"></a> 
          <!-- Metalic Grey  -->
          <a class="btne " style="background-color: #bdc3c7;"></a> 
          <!-- Midnight Grey  -->
          <a class="btne " style="background-color: #2c3e50;"></a> 
          <!-- White Pearl  -->
          <a class="btne " style="background-color: #f0f3f4;"></a> 
        </div>

         <div class="purchase_part">
          <div class="quantity_box">
            <button onclick="quantity(-1)"><img src="filter_detail_assets/images/icon-minus.svg" alt="minus icon"></button>
            <p class="quantity_value">0</p>
            <button onclick="quantity(1)"><img src="filter_detail_assets/images/icon-plus.svg" alt="plus icon"></button>
          </div>

          <div class="purchase_btn">
          <button onclick="addCart()"><img src="filter_detail_assets/images/icon-cart2.svg" alt="cart icon"> Add to cart</button>
        </div>
        </div>

        

      </div>

     	
    </section>

    <!--- Checkout box --->
    <div id="checkout_box" style="display: none;">
    	<div class="title_part">
    		<h2>Cart</h2>
    	</div>

    	<div class="item_part">
    		<div class="item_img">
    			<img src="filter_detail_assets/images/ev-database.org/filter_detail_assets/images/ev-database.org/EV-Car-Honda e Ny1.jpg" alt="item image">
    		</div>

    		<div class="item_info">
    			<p>Fall Limited Edition Sneakers</p>
    			<p>Rp 14.000.000 x <span class="quantity">3</span> <span class="total">$375.00</span></p>
    		</div>

    		<div class="delete_btn">
    			<button onclick="Remove()"><img src="filter_detail_assets/images/icon-delete.svg" alt="delete button"></button>
    		</div>
    	</div>

    	<div class="checkout_part">
    		<button class="btn" onclick="checkout()">Checkout</button>
    	</div>
    </div>

    <div id="light_box">
    	<div class="close_part">
    		<img src="filter_detail_assets/images/icon-close.svg" alt="close button" onclick="closeGallery()">
    	</div>

    	<div class="images_part">
    		<button onclick="change(-1)"><img src="filter_detail_assets/images/icon-previous.svg" alt="previous button"></button>

    		<img src="filter_detail_assets/images/image-product-1.jpg" alt="image_1" class="image_preview">
    		
    		<button onclick="change(1)"><img src="filter_detail_assets/images/icon-next.svg" alt="next button"></button>
    	</div>

    	<div class="images_smallbox">
          <ul>
            <li>
            	<img src="filter_detail_assets/images/image-product-1-thumbnail.jpg" alt="image_1"  onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/image-product-2-thumbnail.jpg" alt="image_2" onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/image-product-3-thumbnail.jpg" alt="image_3" onclick="changeImage(this)">
            </li>
            <li>
            	<img src="filter_detail_assets/images/image-product-4-thumbnail.jpg" alt="image_4" onclick="changeImage(this)">
            </li>
          </ul>
        </div>
    </div>

    <footer id="footer">
      <small>Volti 2024</small>
    </footer>
  </main>
 
</body>
</html>