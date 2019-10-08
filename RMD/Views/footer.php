 <!-- footer -->
    <section id="footer" class="bg-dark section-4">
        <div class="container">
            <img class="logo-brand" src="img/logo.png" alt="">
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#inicio">Inicio</a></li>
                <li class="list-inline-item footer-menu"><a href="#material">Material</a></li>
                <li class="list-inline-item footer-menu"><a href="#profesores"><a href="">Profesores</a></a></li>
                <li class="list-inline-item footer-menu"><a href="#dudas">Dudas</a></li>
            </ul>
            <ul class="sci">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <p class="cpryt">
                <small>© Copyright 2019 RMD</small>
            </p>
        </div>
    </section>


    <!-- script para el efecto de las tarjetas de los profesores -->
    <script src="js/jquery.hover3d.min.js"></script>
    <script>
        $(".hover3d").hover3d({
            selector: ".hover3d-child",
            invert: true
        });
    </script>


    <!-- Optional JavaScript -->
    <script src="js/jquery.pagepiling.js"></script>
    <script>
        $(document).ready(function () {
            $('#pagepiling').pagepiling({
                navigation: {
                    'textColor': '#fff',
                    'bulletsColor': '#fff',
                    'position': 'right',
                    'tooltips': ['section1', 'section2', 'section3', 'section4']
                }
            });
        });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>
