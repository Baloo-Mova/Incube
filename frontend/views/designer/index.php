<?php
/* @var $this yii\web\View */
?>
<div class="row page-title text-center">
    <h2>Проектантам</h2>
</div>
<hr/>
<div class="row content">
    <p><span> Проектант </span> - це користувач, що .....</p>
<p>Для співпраці наукової спільноти України з підприємствами великого, середнього
та малого бізнесу. Ви зможете на взаємовигідних умовах запропонувати їм свої вже
наявні наукові розробки для розв’язання актуальних практичних проблем, надати
професійні консультації чи здійснити науково-дослідні роботи, спрямовані на
створення необхідних для конкретного замовника прикладних розробок.</p>
Вам потрібно заповнити анкету на сайті проекту
       

    <p>Якщо ви хочете запропонувати свій проект на реалізацію - заповніть наступну форму: </p>
    <div class="text-center">
        <a href="#" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <p>Якщо ви хочете запропонувати свій проект  - заповніть наступну форму: </p>
    <div class="text-center">
        <a href="#" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <ul class="nav"> <h3>Важливі відомості:</h3>
     <li> 1. Заповнивши і надіславши цю заявку нам, Ви даєте згоду на обробку наведеної інформації згідно вимог чинного законодавства.</li>
     <li> 2. За повноту і достовірність інформації, наведеної про підприємство відповідає користувач, який заповнив заявку.</li>
     <li> 3. Не наводьте інформацію, яка підпадає під статус комерційної чи державної таємниці, оскільки відповідальність за її недотримання покладається на представника, який заповнив відповідну зявку.</li>
     <li> 4. Анкета заповнюється, перевіряється і надсилається безпосередньо представником підприємства, учбової установи, влади, тощо – тобто, безпосередньо контактною особою для розвитку співпраці в межах проекту.</li>
    </ul> 
    <h3>За згодою Ваші пропозиції будуть розміщені на платформі «ІнКуб». Сподіваємося на ефективну співпрацю.</h3>
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
    
    <h2>Запропонуйте свій проект до існуючого питання</h2>
    
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
                <li><a href="#latest2" data-toggle="tab">Проекти на реалізацію2</a></li> 
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
  