
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="main">
                <h3 class="text-center tittles" style=" letter-spacing: 0;">Mi material</h3>
                <ul class="cards">
                    <?php 
                        foreach (Catalogo_guardado as $value) {
                            echo '
                            <li class="cards_item">
                                <div class="card">
                                    <div class="card_image"><img src="'.URL.'Resources/img/material/'.$value[3].".gif".'" width="350" height="400"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">'.substr($value[2],0,15).'</h2>
                                        <p class="card_text">'.substr($value[2],0,30)."...".'</p>
                                        <button class="btn card_btn">Ver '.$value[3].'</button>
                                    </div>
                                </div>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>