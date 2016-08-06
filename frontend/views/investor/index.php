<?php
/* @var $this yii\web\View */
?>

<div class="row page-title text-center">
    <h2>Інвесторам</h2>
</div>
<hr/>
<div class="row content">
    <p><span> Інвестор </span> - це користувач, що вкладає кошти.</p>

    <ul class="nav"> Інвесторомами можуть виступати Юридичні та Фізичні особи, які можуть вкладувати кошти у інноваційний проект

    </ul>    

    <p>Якщо ви хочете виступити інвестором - заповніть наступну форму: </p>
    <div class="text-center">
        <a href="#" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<hr/>
<div class="row">
    <div class="well well-sm">

        <div class="btn-group">
          
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            
                <select>
                    <option>Filter</option>
                </select>
           
        </div>
    </div>
</div>
<hr/>
<div class="row page-title text-center">
    
    <h2>Інвестор може вкласти кошти у наступне</h2>
    
</div>
<br/>


 <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Питання(проблеми) для вирішення</a></li>
                <li><a href="#featured" data-toggle="tab">Запроновані проекти</a></li>
                <li><a href="#latest" data-toggle="tab">Проекти на реалізацію</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start popular problems -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                     <?php for ($i = 0; $i < 6; $i++) { ?>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">rrrr Random</a></h4>
                          <span class="aa-product-price">$<?=number_format(rand(60,662000),0,'.','.')?></span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                     
                      <!-- product id -->
                      <span class="aa-badge aa-sale" href="#"></span>
                    </li>
                     <?php } ?>                                
                  </ul>
                  <a class="btn btn-success btn-lg" href="#">Усі питання <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular problem category -->
                
                <!-- start prop-project category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">rrrr Random</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">12344</span>
                    </li>
                                                                                               
                  </ul>
                  <a class="btn btn-success btn-lg" href="#">Усі запропоновані проекти<span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / prop-projects category -->

                <!-- start realiz-projects category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="gg"></a>
                        <a class="aa-add-card-btn" href="#"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">rrrr Random</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                     <!-- product id -->
                      <span class="aa-badge aa-sale" href="#"></span>
                    </li>
                                                                  
                  </ul>
                  <a class="btn btn-success btn-lg" href="#">Усі проекти на реалізацію <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / realiz-projects category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  



