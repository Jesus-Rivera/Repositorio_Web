<footer>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="sci">
                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p class="cpryt">
                 © Copyright 2019 RMD
            </p>
        </div>
    </div>
</div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=URL?>Resources/js/jquery-3.4.1.min.js"></script>
<script src="<?=URL?>Resources/js/popper.min.js"></script>
<script src="<?=URL?>Resources/js/bootstrap.min.js"></script>
<script type="text/javascript">
        $(document).scroll(function(){
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
</body>