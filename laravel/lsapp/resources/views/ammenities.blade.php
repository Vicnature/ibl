<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Ocean Star Hotels</title>
        <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
        </head>
    <body>

    <style>
        *{
    padding: 0;
    margin: 0;
}
.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/background.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    /* background:linear-gradient(to right,lightgreen,lightsalmon); */
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: antiquewhite;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: crimson;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 62px;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 18px;
    color: white;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: white;
    border: 1px solid white;
    padding: 12px 34px;
    font-size: 16px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid crimson;
    background: crimson;
    transition:1s
}

/*----- Services------*/

.Services{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}
h1{
    font-size: 36px;
    font-weight: 600;
}
p{
    color: #777;
    font-size: 14px;
    font-weight: 22px;
    line-height: 22px;
    padding: 10px;
}
.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.Services-col{
    flex-basis: 31%;
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 1s;
}
h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}
.services-col:hover{
    box-shadow: 0 0 20px 0px rgba(80, 12, 12, 0.2);
}

/*---- branches -----*/

.branches{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.branches-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.branches-col img{
    width: 100%;
    display: block; 
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 1s;
}
.layer:hover{
    background: rgba(0, 192, 226, 0.7);
}
.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
    position: absolute;

}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}

/*------- footer-----*/
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}

/*------ammenities -----*/

.ammenities{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}
.ammenities-col{
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
}
.ammenities-col img{
    width: 100%;
    border-radius: 10px;
}
.ammenities-col p{
    padding: 0;
}
.ammenities-col h3{
    margin-top: 16px;
    margin-bottom: 15px;
    text-align: left;
}
/*------- reviews -----*/
.reviews{
    width: 80%;
    margin: auto;
    padding-top: 100px;
    text-align: center;
}
.reviews-col{
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background:#fff3f3 ;
    padding: 25px;
    cursor: pointer;
    display: flex;
}
.reviews-col img{
    height: 40px;
    margin-left: 5px;
    margin-right: 30px;
    border-radius: 50%;
}
.reviews-col p{
    padding: 0;
}
.reviews-col h3{
    margin-top: 15px;
    text-align: left;
}
/*----- call to action------*/

.cta{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(77, 58, 58, 0.7),rgba(77 , 58, 58, 0.7)),url(images/bed-ammenities.jpg);
    
    /* background-image:url({{asset("assets/images/logo.jpg")}}); */
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
    /* background-color:green; */
}
.cta h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}

/*----- about us page----*/
.sub-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/background2.jpg);
    
     /* background:linear-gradient(to right,lightgreen,lightsalmon); */
    background-position: center;
    background-size: cover;
    text-align: center;
    color: #fff;
}
.sub-header h1{
    margin-top: 100px;
}
.about-us{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}
.about-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.about-col img{
width: 100%;
}
.about-col h1{
    padding-top: 100px;
}
.about-col p{
    padding: 15px 0 25px;
}
.red-btn{
    border: 1px solid #000000;
    background: transparent;
    color: rgb(1, 124, 124);
}

/*------contact us page ------*/

.location{
    width: 80%;
    margin: auto;
    padding: 80px 0;
}
.location iframe{
    width: 100%;
}
.contact-us{
    width: 80%;
    margin: auto;
}
.contact-col{
    flex-basis: 48%;
    margin-bottom: 30px;
}
.contact-col div{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.contact-col div p{
    padding: 0;
}
.contact-col div h5{
    font-size: 20px;
    margin-bottom: 5px;
    color: black;
    font-weight: 400;
}
.contact-col input, .contact-col textarea{
    width: 100%;
    padding: 15px;
    margin-bottom: 17px;
    outline: none;
    border: 1px solid #ccc;
}

    </style>

            <section class="sub-header">
                <nav>
                    <a href="index.html">     <img src="{{asset('images/logo.jpg')}}">
</a>
                    <div class="nav-links">
                      
                        <ul>
                        <li><a href="{{URL::to('/')}}">HOME</a></li>
                            <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                            <li><a href="{{URL::to('/ammenities')}}">AMMENITIES</a></li>
                            <li><a href="{{URL::to('/contact')}}">CONTACT</a></li>

                    </div>
                    
                </nav>
            <h1>Our Ammenities</h1>
            
            </section>

<!---------Ammenities---------->

<section class="ammenities">
    <h1>Our Ammenities</h1>
    <p>We bring you the best of resources.</p>
<div class="row">
    <div class="ammenities-col">
    <img src="{{asset('images/gym-ammenities.jpg')}}">
        <h3>World Class Gym</h3>
        <p>We offer a fully equipped gym for all customers at no additional cost.</p>
    </div>
    <div class="ammenities-col">
    <img src="{{asset('images/pool-amenities.jpg')}}">
        <h3>Pool and Spa</h3>
        <p>We also offer a private swimming pool, spa and sauna that have trained staff ready to cater to your every need.</p>
    </div>
    <div class="ammenities-col">
    <img src="{{asset('images/arcade.jpg')}}">
        <h3>Recreational Games</h3>
        <p>We offer gaming services in form of an arcade fitted with lots of games to suit all age groups from kids to the adults.</p>
    </div>       
</div>
</section>


            
           <!------- Footer ------>
           <section class="footer">
            <h4>ABOUT US</h4>
            <p>Ocean Star is a three branch, world-class, four star hotel located in Nairobi, Kigali and Rabat. It features 200 well appointed rooms, eight meeting and <br>conference rooms, restaurant & bar, swimming pool and spa among other top facilities to give you an experience of a lifetime.</p>
            
            </div>
           </section>

        </body>
</html>