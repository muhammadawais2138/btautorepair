@php
$services = DB::select('SELECT * FROM services ORDER BY service_id ASC LIMIT 5');
$latest_services = DB::select('SELECT * FROM services ORDER BY service_id DESC LIMIT 5');
@endphp

<footer class="main-footer">
    	<!--Footer Upper-->
    	<div class="footer-upper">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget contact-widget">
                        	<h3>Contact Us</h3>
                        	<div class="text">Welcome to BT Auto Repair! We're here to keep your vehicle running smoothly. Have a question, concern, or simply want to schedule a service appointment? Reach out to us using the contact below:</div>
                            <ul class="info">
                            	<li><strong>Email</strong> <a href="mailto:btautorepairusa@gmail.com">btautorepairusa@gmail.com</a></li>
                                <li><strong>Phone</strong> <a href="tel:4107363906">410 736 3906</a></li>
                                <!-- <li><strong>Phone</strong> <a href="tel:4102543043">410 254 3043</a></li> -->
                                <!-- <li><strong>Website</strong> <a href="http://www.envato.com/">http://www.envato.com</a></li> -->
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget services-widget">
                        	<h3>Our Services</h3>
                        	<ul class="links">
                                 @foreach ($latest_services as $data)
                            	<li><a href="/service/{{ $data->services_page_url }}"><i class="fa fa-check-circle"></i>
                                    @php
                                    $str= $data->services;
                                    if (strlen($str) > 20 )
                                    $str= substr($str,0,20) . '';
                                    echo $str ;
                                @endphp
                                </a></li>
                                 @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget support-widget">
                        	<h3>Our Services</h3>
                            <ul class="links">
                                 @foreach ($services as $data)
                                <li><a href="/service/{{ $data->services_page_url }}"><i class="fa fa-check-circle"></i>{{ $data->services }}</a></li>
                                 @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget newsletter-widget">
                        	<h3>Quick Contact</h3>
                        <form class="pq-contactform pq-applyform" action="/contactUsEmail" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                        		<p><input type="text" name="name" placeholder="Your Name" required=""></p>
                        		<p><input type="email" name="email" placeholder="Your Email" required=""></p>
                        		<p><textarea name="message" placeholder="Your Message" required="" rows="1"></textarea></p>
                        		<p><button class="hvr-bounce-to-right" onclick="showAlert()" id="submit" type="submit">Send Message</button></p>
                        	</form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">

            	<div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12"><div class="copyright"><a target="_blank" href="https://techrashi.com/" style="color: #fff;"> Copyright 2024 TechRashi All Rights Reserved.</a></div></div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="social-links">
                             <a href="#" class="fa fa-facebook-f"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest-p"></a>
                <a href="#" class="fa fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <script>
function showAlert() {
    alert("Button clicked!");
}
</script>