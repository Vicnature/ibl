<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Ocean Star Hotels</title>
        <link rel="stylesheet" href="style.css">           
        </head>
        
    <body>

            <section class="sub-header">
                <nav>
                    <a href="index.html"><img src="images/logo.jpg"></a>
                    <div class="nav-links">
                      
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="ammenities.html">AMMENITIES</a></li>
                            <li><a href="contact.html">CONTACT</a></li>

                    </div>
                    
                </nav>
            <h1>Conctact Us</h1>
            
            </section>

            <!-----Contact us------->
            <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127642.93481638034!2d36.765196546183624!3d-1.2677391996687228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19f7fd53fbfd%3A0x40b8907600d98711!2sLavington%20Mall!5e0!3m2!1sen!2ske!4v1676122991438!5m2!1sen!2ske" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
            </section>
            
            <section class="contact-us">
                <div class="row">
                    <div class="contact-col">

                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>James Gichuru Rd, Near Lavington mall</h5>
                        <p>Lavington,Nairobi, KE</p>
                    </span>
                        </div>
                    </div>
                
                <div>
                    <i class="fa fa-phone"></i>
                   <span>
                    <h5>+254701255233</h5>
                    <p>7 days a week, 24 hours a day</p>
                   </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o">
                        <span>
                    <h5>oceanstarhotels.ke@gmail.com</h5>
                    <p>Email us your querry</p>
                    
                        </span>
                    </i>
                </div>
                
                
                    <div class="contact-col">

                      

                        <form action="controller.php" method="post">
                            <input type="text" placeholder="Enter Name" name="name" required>
                            <input type="email" placeholder="Enter email address" name="email" required>
                            <input type="number" placeholder="Enter number of rooms" min=1 max=10 name="number_of_rooms" required>
                            <textarea rows="8" placeholder="Preferences and special requirements" name="preferences" required></textarea>
                            <button type="submit" name="send_Order" class="hero-btn red-btn">Send Order</button>
                            </form> 
                            
                            
                            <!-- <form>
                            <input type="text" placeholder="enter name" id="name" style="color:brown">
                            <input type="text" placeholder="enter email" id="email" style="color:brown">
                            <input type="text" placeholder="enter your number" id="number" style="color:brown"> 
                            <input type='text' style="background:salmon;" id='numbers'/>
                            <input type='button' 
                                onclick="notEmpty(document.querySelectorAll('#trial'), 'Please enter a value')"
                                value='Check Field' style="color:brown"/>
                            </form> -->
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