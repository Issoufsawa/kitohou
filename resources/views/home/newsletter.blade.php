<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-12 me-auto mb-4">
                <h5 class="text-white mb-3">Newsletter</h5>

                <form class="custom-form subscribe-form mt-4" action ="{{route('suscriber')}}" method = "POST" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-7">                                    
                            <input type="email" name="adresse_mail" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Votre adresse e-mail" required="">
                        </div>

                        <div class="col-lg-4 col-md-4 col-5">                                  
                            <button type="submit" class="form-control" name="submit" id="subscribe">Subscribe</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-12 mx-auto my-lg-0 my-4">
                <h5 class="text-white mb-3"> Certifications</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a  class="footer-menu-link">Robotic Process Automation (RPA)</a></li>
                    
                    <li class="footer-menu-item"><a class="footer-menu-link">Business intelligence Analyst</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Big Data analyst</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Data scientist </a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Data Administrator</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Data Analyst</a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Data mining</a></li>
                    
                    
                    
                    </ul>
                    
                 
                
            </div>
            <div class="col-lg-2 col-12 mx-auto my-lg-0 my-4">
                <!-- <h5 class="text-white mb-3"> Certifications</h5> -->

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a  class="footer-menu-link">Data Analytics </a></li>
                    
                    <li class="footer-menu-item"><a class="footer-menu-link">Quantitative Portfolio Manager</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">MarketRisk – Associate</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">Investment Risk Manager</a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Business Analyst</a></li>

                    <li class="footer-menu-item"><a class="footer-menu-link">EquityDerivatives Trader</a></li>

                    <li class="footer-menu-item"><a  class="footer-menu-link">Quantitative Investment Analyst</a></li>
                    
                    
                    
                    </ul>
                    
                 
                
            </div>
           

            <div class="col-lg-2 col-12">
                <h5 class="text-white mb-3">Localisation</h5>

                <p class="text-white mb-1">Cocody, Côte d'Ivoire</p>
                <p class="text-white mb-1">Fixe : 2721774291  </p>

                <p><a href="mailto:email@company.com" class="footer-link">info@K-B.com</a><p>
            </div>

            <div class="site-footer-bottom mt-5">
                <div class="row pt-4">
                    <div class="col-lg-6 col-12">
                        <p class="copyright-text tooplate-link">Copyright © 2023 Koopers & Brown. Tous droits réservés
                    </div>

                    <div class="col-lg-3 col-12 ms-auto">
                        
                        <ul class="social-icon">

                        
                            <li><a href="" class="social-icon-link bi-facebook"></a></li>


                            <li><a href="" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
