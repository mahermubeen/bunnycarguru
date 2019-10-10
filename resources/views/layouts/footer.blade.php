<footer class="footer">
    <div class="container footer-container">
        <ul class="footer-list">
            <li class="about-us-li">
                <h3 class="heading9">About Us</h3>
                <p class="paragraph8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                <ul class="footer-apis">
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </li>
            <li class="recent-post-li">
                <h3 class="heading9">Recent Posts</h3>
                <div class="recent-heading">
                    <h4>Johny's Wall: Mind the gap</h4>
                    <div class="recent-details">
                        <span>Admin</span>
                        <p>Jun 11,2018</p>
                    </div>
                </div>
                <div class="recent-heading">
                    <h4>leesa's wall: Mind the gaps</h4>
                    <div class="recent-details">
                        <span>Admin</span>
                        <p>Jun 11,2018</p>
                    </div>
                </div>
            </li>
            <li class="newsletter-wrapper">
                <h3>Our NewsLetter</h3>
                <form class="footer-form">
                    <div class="newsletter-input">
                        <input type="email" name="email" placeholder="Email Address" />
                    </div>
                    <button class="subs-btn" type="submit">Subscribe</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="copyright-div">
        <div class="container">
            <div class="copyrights">
                <p class="paragraph9">Copyright ©2018 - 2019. All Rights Reserved.</p>
                <img src="images/payment-footer.png" />
            </div>
        </div>
    </div>
</footer>
</div>

<script>

    closeNav = function() {
        document.getElementById("main-nav").style.display = "none";
        document.getElementById("bars").style.display = "block";
    }

    openNav = function() {
        document.getElementById("main-nav").style.display = "block";
        document.getElementById("bars").style.display = "none";
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-links");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-service", "");
        }
        document.getElementById(cityName).style.display = "grid";
        evt.currentTarget.className += " active-service";
    }
    openCity(event, 'battery');



</script>

</body>
</html>
