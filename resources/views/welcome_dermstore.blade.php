<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dermstore</title>
    <link rel="stylesheet" href="{{asset('dermstore_htmlcss/style.css')}}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Noto+Sans+SC:wght@100&family=Oswald:wght@700&family=Poppins:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="{{asset('dermstore_htmlcss/src/landingPage.js')}}"></script>
</head>

<body>
    <header>
        <div class="logo">
            <a href="">
                <h1>DermStore</h1>
            </a>
        </div>
        <div class="searchbox">
            <form>
                <div class="search-container">
                    <input type="text" class="no-outline" placeholder="Search for a product or brand..." />
                    <button type="submit">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </div>
            </form>
        </div>
        <h3 id="signedIn_Name"></h3>
        <!-- <div class="account">
            <a href="account.html">
                <div>
                    <img src="https://fonts.gstatic.com/s/i/short-term/release/materialsymbolsoutlined/person/wght600/24px.svg"
                        alt="">
                </div>
                <div class="autoMargin">
                    Account
                </div>
            </a>
        </div> -->
        <div class="account">
            <div class="dropdown">
                <a href="signup.html">
                    <div>
                        <img src="https://fonts.gstatic.com/s/i/short-term/release/materialsymbolsoutlined/person/wght600/24px.svg"
                            alt="">
                    </div>
                    <div class="autoMargin">
                        Account
                    </div>
                </a>
                <div class="dropdown-content">
                    <a href="login.html">Login</a>
                    <a href="signup.html">Sign up</a>
                </div>
            </div>
        </div>
        
        <div class="cart">
            <a href="cart.html">
                <div>
                    <img src="https://fonts.gstatic.com/s/i/short-term/release/materialsymbolsoutlined/shopping_bag/wght600/24px.svg"
                        alt="">
                </div>
                <div class="autoMargin">
                    Cart
                </div>
            </a>
        </div>
    </header>
    <nav class="nav-area">
        <ul>
            <li>
                <a href="#">Skin Care
                </a>
                <ul>
                    <li><a href="">Cleanser & Exfoliators</a></li>
                    <li><a href="">Treatments and Serums</a> </li>
                    <li><a href="">Moisturizers</a></li>
                    <li><a href="">Eye Care</a></li>
                    <li><a href="">Lip Care</a></li>
                    <li><a href="">Face Sunscreen</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Hair Care</a>
                <ul>
                    <li><a href="">Shampoo </a></li>
                    <li><a href="">Dry Shampoo</a></li>
                    <li><a href="">Conditioner </a></li>
                    <li><a href="">HairLoss Products</a></li>
                    <li><a href="">Anti Dandruff & Scalf Care</a></li>
                    <li><a href="">Hair Treatments</a></li>
                    <li><a href="">Hair Mask</a></li>
                </ul>
            </li>
            <li>
                <a href="#">MakeUp</a>
                <ul>
                    <li>
                        <a href="#">Face</a>
                    </li>
                    <li>
                        <a href="#">Lips</a>
                    </li>
                    <li>
                        <a href="#">Eyes</a>
                    </li>
                    <li>
                        <a href="#">Tools & Brush</a>
                    </li>

                    <li>
                        <a href="#">MakeUp Kit</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Tools & Devices</a>
                <ul>
                    <li><a href="">Skin Care tool</a></li>
                    <li><a href="">Hair Care tool</a></li>
                    <li><a href="">Makeup Tools</a></li>
                </ul>
            </li>

            </li>
            <li>
                <a href="#">Bath & Body</a>
                <ul>
                    <li><a href="">Shop By Category</a></li>
                    <li><a href="">Shop By Concern</a></li>
                    <li><a href="">Personal Care</a></li>
                    <li><a href="">More</a></li>
                    <li><a href="">Popular Brands</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Fragrance Shop</a>
                <ul>
                    <li><a href="">Shop By Category</a></li>
                    <li><a href="">Fragrance Family</a></li>
                    <li><a href="">Popular Brands</a></li>
                </ul>
            </li>
            <li>
                <a href="#">BeautyFIX
                </a>
                <ul>
                    <li><a href="">BeautyFIX Home</a></li>
                    <li><a href="">BeautyFIX</a></li>
                    <li><a href="">Best of DermStore</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Offers</a>
                <ul>
                    <li><a href="">Sale</a></li>
                    <li><a href="">Shop By % Off</a></li>
                    <li><a href="">Others Offers</a></li>
                </ul>
            </li>
            <li>
                <a href="#">New Arrivals</a>
                <ul>
                    <li><a href="">All New Arrivals</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="responsiveSlider">
        <div class="sliderContainer">
            <div>
                <a href="#">
                    <div>
                        <span class="material-symbols-outlined">
                            local_shipping
                        </span>
                    </div>
                    <div class="sliderText">
                        <span>Free Shipping Over $50</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <span class="material-symbols-outlined">
                            currency_exchange
                        </span>
                    </div>
                    <div class="sliderText">
                        <span>New Customers Save 15%</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <span class="material-symbols-outlined">
                            task_alt
                        </span>
                    </div>
                    <div class="sliderText">
                        <span>Redeem DermStore Reward</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <span class="material-symbols-outlined">
                            pace
                        </span>
                    </div>
                    <div class="sliderText">
                        <span>Ask The Esthetician</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <span class="material-symbols-outlined">
                            smartphone
                        </span>
                    </div>
                    <div class="sliderText">
                        <span>Download Our App</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <div class="stripBanner">
        <p>
            Rewards members earn TRIPLE points on Revision Skincare. Plus, receive a $24 gift when you spend $125+. Ends
            3/30. START EARNING
        </p>
    </div>
    <div class="shopByCategory">
        <div>
            <div>
                <p>Shop By Category</p>
            </div>
            <div class="shopCat">
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/20/DS_Round_Nav_-_Untitled_Page_%287%29-052520.png"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/36/DS_Round_Nav_-_Untitled_Page_%2833%29-085536.png"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/52/DS_Round_Nav_-_Untitled_Page_%2834%29-025252.png"
                            alt="">

                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/03/DS_Round_Nav_-_Untitled_Page_%2810%29-052703.png"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/36/DS_Round_Nav_-_Untitled_Page_%2825%29-063536.png"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/49/DS_Round_Nav_-_Untitled_Page_%2813%29-053649.png"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="slideshow-container">
        <div class="slideshow-inner">
            <div class="mySlides fade">

                <img src='https://static.thcdn.com/images/xlarge/webp/widgets/208-us/54/original-Spring_Beauty_1920x700-042754.png'
                    style='width: 100%;' onclick="window.location.href='groceries.html'" />
            </div>

            <div class="mySlides fade">

                <img src='https://static.thcdn.com/images/xlarge/webp/widgets/208-us/27/original-0223_47424_DS_MH_Shot_28_Batching_HomePage-1920x700.jpeg-061027.jpg'
                    style='width: 100%;' alt="fighting nazca boobies" onclick="window.location.href='beauty.html'" />

            </div>

            <div class="mySlides fade">

                <img src='https://static.thcdn.com/images/xlarge/webp/widgets/208-us/27/original-0223_47424_DS_MH_Shot_28_Batching_HomePage-1920x700.jpeg-061027.jpg'
                    style='width: 100%;' alt="otovalo waterfall" / onclick="window.location.href='electronics.html'">

            </div>
        </div>


        <a class="prev" onclick='plusSlides(-1)'> &#10094;</a>
        <a class="next" onclick='plusSlides(1)'>&#10095;</a>
    </section>

    <div class="xPoint">
        <div class="xPointCont">
            <p style="font-size: x-large;">3x Points On Revision Skincare®</p>
            <p>Rewards members earn TRIPLE points on professional formulas for youthful-looking skin. Plus, receive a
                $24 gift when you spend $125+.</p>
        </div>
        <div class="imgCont">
            <div>
                <img src="https://static.thcdn.com/images/medium/webp/widgets/208-us/29/MicrosoftTeams-image_%284%29-034529.png"
                    alt="">
            </div>
            <div>
                <img src="https://static.thcdn.com/images/medium/webp/widgets/208-us/29/MicrosoftTeams-image_%284%29-034529.png"
                    alt="">
            </div>
            <div>
                <img src="https://static.thcdn.com/images/medium/webp/widgets/208-us/29/MicrosoftTeams-image_%284%29-034529.png"
                    alt="">
            </div>
        </div>
    </div>
    <div class="threeItemEditorial_container">
        <div>
            <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/02/HPLPSQBANNER-676x556.jpeg-080002.jpg"
                alt="">
            <p style="margin: 0; padding: 0;font-weight: bold">New from Eminence Organic Skin Care</p>
            <p style="font-size: small;">Three new formulas that help visibly smooth, renew & brighten skin.</p>
        </div>
        <div>
            <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/40/0307_47951_THG0035372_DS_EF_March_Batch_Shot_012_HP_LPSQ_BANNER_676x556-075940.jpg"
                alt="">
            <p style="margin: 0; padding: 0;font-weight: bold">New from IMAGE Skincare</p>
            <p style="font-size: small;">Microbiome-friendly formulas for clearer-looking skin.</p>
        </div>
        <div>
            <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/20/HPLPSQBANNER-676x556-073820.jpeg"
                alt="">
            <p style="margin: 0; padding: 0;font-weight: bold;">New from U Beauty</p>
            <p style="font-size: small;">Helps promote brighter, smoother & more revitalized-looking under eyes.</p>
        </div>
    </div>
    <div class="referral">
        <a href="#">
            <img src="https://static.thcdn.com/images/large/webp/widgets/208-us/14/New_Page-021914.png" alt="">
        </a>
    </div>
    <div class="featured">
        <div>
            <div>
                <p style="font-weight: bold;">Featured Brands</p>
            </div>
            <div class="featuredBrands">
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/19/SR-logo_2000x2000-060919.jpg"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/59/Skinc-014559.jpg" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/19/SR-logo_2000x2000-060919.jpg"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/59/Skinc-014559.jpg" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/19/SR-logo_2000x2000-060919.jpg"
                            alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/59/Skinc-014559.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fromtheblog">
        <div>
            <p style="text-align: center; font-size: x-large; font-weight: bolder;">From The Blog</p>
        </div>
        <div class="ftb">
            <div>
                <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/59/Sunscreens_for_Color_300x180-104659.png"
                    alt="">
                    <p>8 Great Sunscreens for Skin of Color (That Won’t Go on Chalky)</p>
            </div>
            <div>
                <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/03/Best_Beauty_Devices_300x180-104603.png"
                    alt="">
                    <p>Best Beauty Devices to Help Solve Your Skin Care Concerns</p>
            </div>
            <div>
                <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/30/How_to_Hydrate_Hair_300x180-104630.png"
                    alt="">
                    <p>How to Moisturize Hair Thats Feeling Dry</p>
            </div>
            <div>
                <img src="https://static.thcdn.com/images/small/webp/widgets/208-us/18/SkinC_300x180-055918.png"
                    alt="">
                    <p>You Must-Have SkinCeuticals Serum Wardrobe</p>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="footerTOP">
            <div>
                <p style="font-size: smaller;">Sign up to our newsletters and receive the latest exclusive discounts and deals</p>
                <button>Sign Me Up</button>
            </div>
            <div>
                <p style="font-size: smaller;">Connect With us</p>
                <img src="{{asset('dermstore_htmlcss/grpahics/facebook.jpg')}}" alt="">
                <img src="{{asset('dermstore_htmlcss/grpahics/download.png')}}" alt="">
                <img src="{{asset('dermstore_htmlcss/grpahics/instagram.png')}}" alt="">
                <img src="{{asset('dermstore_htmlcss/grpahics/youtube.png')}}" alt="">
                <img src="{{asset('dermstore_htmlcss/grpahics/pinterest.png')}}" alt="">
            </div>
        </div>
    </footer>
    <div class="footerBottom">
        <div class="bottom">
            <p>Customer Service</p>
            <p></p>
            <p></p>
            <div>
                <p>
                    <span class="material-symbols-outlined">
                        error 
                        </span>
                    
                </p>
                <p>
                    Help Center /FAQs
                </p>
            </div>       
            <div>
                <p>
                    <span class="material-symbols-outlined">
                        keyboard_return
                        </span>
                </p>
                <p>
                    Returns
                </p>
            </div>       
            <div>
                <p>
                    <span class="material-symbols-outlined">
                        local_shipping
                        </span>
                </p>
                <p>
                    Shipping Information
                </p>
            </div>       
            <div>
                <p>
                    <span class="material-symbols-outlined">
                        location_searching
                        </span>
                </p>
                <p>
                    Track My Order
                </p>
            </div>       
            <div>
                <p>
                    <span class="material-symbols-outlined">
                        cookie
                        </span>
                </p>
                <p>
                    Cookie Setting
                </p>
            </div>       
        </div>
        <div class="bottomRight">
            <div>
                <p>Customer Service</p>
                <p></p>
                <p></p>
                <p style="margin-top: 32px;"></p>
                <a href="#">My Account</a><br>
                <a href="#">Manage My Auto-Replenishments</a><br>
                <a href="#">My Rewards</a><br>
                <a href="#">My Favourites</a><br>
                <a href="#">Refer a friend</a><br>
                <a href="#">Order History</a><br>
            </div>  
            <div>
                <p>Company</p>
                <p></p>
                <p></p>
                <p style="margin-top: 32px;"></p>
                <a href="#">About Us</a><br>
                <a href="#">Press</a><br>
                <a href="#">What is Klrana?</a><br>
            </div>  
            <div>
                <p>Legal</p>
                <p></p>
                <p></p>
                <p style="margin-top: 32px;"></p>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Terms and Conditions</a><br>
                <a href="#">Modern Slavery Statements</a><br>
                <a href="#">Product Recall</a><br>
                <a href="#">Accessibility</a><br>
            </div>  

        </div>
    </div>
    <div class="lowestFooter">
        <div>
            <p class="THG">AslanAsilon</p>
            <p>2024.</p>
        </div>
        <div style="padding-top: 30px;">
            <p style="font-weight: bold;">Pay Securely With</p>
            <img src="{{asset('dermstore_htmlcss/grpahics/image (6).png')}}" alt="">
        </div>
    </div>
    
</body>
</html>