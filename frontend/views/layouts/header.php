   <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="icon-cloud"></i>+777 7777 7777</span>
                                <span><i class="icon-mail"></i>incube_zp@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/site/index')?>"><img src="../img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <?= Yii::$app->user->isGuest ? $this->render('//layouts/header_reg_buttons.php'):'' ?> 
			  
              <ul class="main-nav nav navbar-nav navbar-center">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/site/index')?>">Головна</a></li>
	        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="#">Проекти</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Підприємцям</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Професіоналу</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">Про нас</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">Контакти</a></li> 
                <?= Yii::$app->user->isGuest ? '':'<li class="wow fadeInDown" data-wow-delay="0.6s"><a href="'.\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/personal-area/index').'">ЛИЧНЫЙ КАБИНЕТ</a></li>' ?>
              </ul>
			  
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

 