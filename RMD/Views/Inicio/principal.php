 <!-- seccion1 inicio->mostramos el slide -->
    <section id="inicio" class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- slide 1 -->
                <div class="carousel-item active">
                    <img src="<?=URL?>Resources/img/bg-01.jpg" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption text-center d-none d-block">
                        <h5 class="animated bounceInRight" style="animation-delay: 1s;">Repositorio de material
                            didactico</h5>
                        <p class="animated bounceInRight" style="animation-delay: 2s;">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</p>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="carousel-item">
                    <img src="<?=URL?>Resources/img/bg-02.jpg" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption text-center d-none d-block">
                        <h5 class="animated fadeInUp" style="animation-delay: 1s;">Second slide label</h5>
                        <p class="animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</p>
                    </div>
                </div>
                <!-- slide 3 -->
                <div class="carousel-item">
                    <img src="<?=URL?>Resources/img/form.jpg" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption text-center d-none d-block">
                        <h5 class="animated zoomIn" style="animation-delay: 1s;">Second slide label</h5>
                        <p class="animated zoomIn" style="animation-delay: 2s;">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>

    <!-- seccion2 material->mostramos el material -->
    <section id="material" class="section-2">
        <div class="container-fluid">
            <div class="content-center">
                <h2 style="font-family: 'Anton', sans-serif;">Material</h2>
                <p>En el Repositorio podrás encontrar material de diversos tipos como son archivos en PDF, WORD,
                    PowerPoint, Imagenes y Videos</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card-deck">
                        <div class="card shadow">
                            <div class="inner">
                                <img class="card-img-top img-responsive" src="<?=URL?>Resources/img/machine.gif" class="img-fluid"
                                    alt="material 1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">inteligencia artificial</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis necessitatibus animi
                                    quae quis eveniet, iste magnam voluptatibus doloribus earum autem atque soluta enim
                                    numquam distinctio at doloremque reprehenderit odit sequi.</p>
                                <a href="<?=URL?>invitado/IA" class="btn btn-success">Ver Material</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-deck">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img class="card-img-top img-responsive" src="<?=URL?>Resources/img/android.gif" class="img-fluid"
                                    alt="material 1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Aplicaciones moviles con android</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque inventore,
                                    asperiores voluptatem sint quaerat pariatur maiores saepe vitae eaque unde explicabo
                                    dicta sed animi, eos obcaecati soluta, aliquid ut repellat.</b></span></p>
                                <a href="<?=URL?>invitado/Android" class="btn btn-success">Ver Material</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-deck">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img class="card-img-top img-responsive" src="<?=URL?>Resources/img/backend.gif" class="img-fluid"
                                    alt="material 1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Base de datos</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos deserunt totam
                                    inventore, laudantium molestiae incidunt ea similique alias perferendis saepe
                                    aperiam in, nisi consectetur ad non optio nemo provident recusandae.</b></span></p>
                                <a href="<?=URL?>invitado/Database" class="btn btn-success">Ver Material</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-deck">
                        <div class="card shadow" style="width: 20rem;">
                            <div class="inner">
                                <img class="card-img-top img-responsive" src="<?=URL?>Resources/img/Responsive_web.gif" class="img-fluid"
                                    alt="material 1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Aplicaciones web</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga cupiditate,
                                    exercitationem nemo enim aliquid unde? Maxime vel, obcaecati soluta cupiditate quam
                                    quod ratione consequuntur voluptas quasi quas, harum provident fuga.</p>
                                <a href="<?=URL?>invitado/Web" class="btn btn-success">Ver Material</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion3 de profesores -->
    <section id="profesores" class="team bg-light-grey section-3">
        <div class="container">
            <div class="row">
                <br><br><br>
                <div class="section-head text-center col-sm-12">
                    <h2 style="font-family: 'Anton', sans-serif;">Profesores</h2>
                    <h4>Nuestro<span class="blue"> Talentoso</span> Equipo</h4>
                    <br><br>
                </div>
                <div class="item col-md-3">
                    <div class="hover3d">
                        <div class="hover3d-child">
                            <a href="<?=URL."material/profile?id=".First_users[0]?>">
                                <div class="team-img">
                                <img src="<?=URL."ficheros/usuarios/Coordinador/".First_users[0]."/".First_users[0].".jpg"?>" class="img-responsive" alt="">
                            </div></a>
                            <div class="info">
                                <div>
                                    <h6><?=users[0][0]." ".users[0][1]?></h6>
                                    <span>Coordinador</span>
                                    <p><?=users[0][2]."<br>".users[0][3]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-md-3">
                    <div class="hover3d">
                        <div class="hover3d-child">
                            <a href="<?=URL."material/profile?id=".First_users[1]?>">
                            <div class="team-img">
                                <img src="<?=URL."ficheros/usuarios/Profesor/".First_users[1]."/".First_users[1].".jpg"?>" class="img-responsive" alt="">
                            </div></a>
                            <div class="info">
                                <div>
                                    <h6><?=users[1][0]." ".users[1][1]?></h6>
                                    <span>Profesor</span>
                                    <p><?=users[1][2]."<br>".users[1][3]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-md-3">
                    <div class="hover3d">
                        <div class="hover3d-child">
                            <a href="<?=URL."material/profile?id=".First_users[2]?>">
                            <div class="team-img">
                                <img src="<?=URL."ficheros/usuarios/Coordinador/".First_users[2]."/".First_users[2].".jpg"?>" class="img-responsive" alt="">
                            </div></a>
                            <div class="info">
                                <div>
                                    <h6><?=users[2][0]." ".users[2][1]?></h6>
                                    <span>Coordinador</span>
                                    <p><?=users[2][2]."<br>".users[2][3]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-md-3">
                    <div class="hover3d">
                        <div class="hover3d-child">
                            <a href="<?=URL."material/profile?id=".First_users[3]?>">
                            <div class="team-img">
                                <img src="<?=URL."ficheros/usuarios/Profesor/".First_users[3]."/".First_users[3].".jpg"?>" class="img-responsive" alt="">
                            </div></a>
                            <div class="info">
                                <div>
                                    <h6><?=users[3][0]." ".users[3][1]?></h6>
                                    <span>Profesor</span>
                                    <p><?=users[3][2]."<br>".users[3][3]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion de dudas -->
    <section id="dudas" class="accordion-section clearfix mt-3" aria-label="Question Accordions">
        <div class="container">
            <h2>Preguntas frecuentes</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                <span>¿Qué es el Repositorio de Material Didáctico?</span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                            <p>El Repositorio de Material Didáctico es un plataforma en línea con la finalidad de poder
                                proporcionarte diversos materiales que puedes consultar para complementar tu
                                aprendizaje.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                <span>¿Debo registrarme para consultar el repositorio?</span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body px-3 mb-4">
                            <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will
                                be able to have a site up and running in no time.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                ¿Cual es el costos para consultar el material?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body px-3 mb-4">
                            <p>Using Amazon AWS technology which is an industry leader for reliability you will be able
                                to experience an uptime in the vicinity of 99.95%.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                ¿Si quiero descargar un material debo pagar?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body px-3 mb-4">
                            <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site
                                Management, you will be able to easily manage all of your websites.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
