        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-washing-machine"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido a la sección para agregar nuevos materiales al repositorio, deberas de llenar todos los campos para poder registrar el material.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO MATERIAL</a>
                <a href="#tabListProducts" class="mdl-tabs__tab">LISTA DE MATERIALES</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewProduct">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nuevo Material
                            </div>
                            <div class="full-width panel-content">
                                <form>
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Información Básica</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode">
                                                <label class="mdl-textfield__label" for="BarCode">Barcode</label>
                                                <span class="mdl-textfield__error">Invalid barcode</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct">
                                                <label class="mdl-textfield__label" for="NameProduct">Name</label>
                                                <span class="mdl-textfield__error">Invalid name</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Seleccionar categoria</option>

                                                    <?php 
                                                        foreach (Categoria as $value) {
                                                        echo '<option value="">'.$value.'</option>';
                                                     } 
                                                    ?>
                                                </select>
                                            </div>
                                            <h5 class="text-condensedLight">Units and Price</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct">
                                                <label class="mdl-textfield__label" for="StrockProduct">Units</label>
                                                <span class="mdl-textfield__error">Invalid number</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
                                                <label class="mdl-textfield__label" for="PriceProduct">Price</label>
                                                <span class="mdl-textfield__error">Invalid price</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="discountProduct">
                                                <label class="mdl-textfield__label" for="discountProduct">% Discount</label>
                                                <span class="mdl-textfield__error">Invalid discount</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Supplier data and model</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Select provider</option>
                                                    <option value="">Provider 1</option>
                                                    <option value="">Provider 2</option>
                                                </select>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="modelProduct">
                                                <label class="mdl-textfield__label" for="modelProduct">Model</label>
                                                <span class="mdl-textfield__error">Invalid model</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="markProduct">
                                                <label class="mdl-textfield__label" for="markProduct">Mark</label>
                                                <span class="mdl-textfield__error">Invalid Mark</span>
                                            </div>
                                            <h5 class="text-condensedLight">Other Data</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input type="date" class="mdl-textfield__input">
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Select status</option>
                                                    <option value="">Active</option>
                                                    <option value="">deactivated</option>
                                                </select>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <form action="form-div">
                                                    <label for="file" class="input-label">
                                                        <i class="fas fa-upload"></i>
                                                        <span id="label_span">Subir Archivo(s)</span>
                                                    </label>
                                                    <input id="file" type="file" multiple="true">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addProduct">Add Product</div>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdl-tabs__panel" id="tabListProducts">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                        <form action="#">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                                    <i class="zmdi zmdi-search"></i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="searchProduct">
                                    <label class="mdl-textfield__label"></label>
                                </div>
                            </div>
                        </form>
                        
                        <div class="full-width text-center" style="padding: 30px 0;">

                            <?php
                            for ($i = 0; $i < sizeof(Material) ; $i++) { 
                                echo '<div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <div class="mdl-card__title">
                                    <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <small>'.Material[$i][0].'</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    '.Material[$i][1].'
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </div>';
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <script>
	function ajax() {
		const http = new XMLHttpRequest();
		const url = '';
		http.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200)
			{
				//Carga
			}
		}
		http.open("GET",url);
		http.send();
	}

	document.getElementById("boton").addEventListener("click",function(){
		ajax();
	});
</script>