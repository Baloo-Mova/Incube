<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

         <?php // dmstr\widgets\Menu::widget(
//            [
//                'options' => ['class' => 'sidebar-menu'],
//                'items' => [
//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'fa fa-share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'fa fa-circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'fa fa-circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
//                ],
//            ]
//        ) ?>
        
        
        <ul class="sidebar-menu">
            <li class="header" style="text-align: center;">
                <span> Вітаю </span>
            </li>
            <li >
                <a  href="<?= \yii\helpers\Url::to('../form-application-for-the-project/index') ?>" id="allComands" >
                    <i class="fa fa-file"></i> <span style="word-wrap: break-word; width: 200px;"> Форма бланку-заявки<br/> на реалізацію проекту</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to('../form-offer-project/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Форма бланку-пропозиції<br/> проекту</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to('../form-offer-vac-emp/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Форма бланку-пропозиції <br/>вакансий</span>
                </a>
            </li> 
           <li>
                <a href="<?= \yii\helpers\Url::to('../form-cand-vac-emp/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Форма бланку-анкети<br/> претендента на вакансію<br/> роботодавця</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to('../form-order-in-pr/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Форма бланку-заявки<br/> інноваційного проекту</span>
                </a>
            </li>
             <li>
                <a href="<?= \yii\helpers\Url::to('../form-order-in-pr/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Користувачі<br/></span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to('../form-order-in-pr/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Види економічної<br/> діяльності</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to('../form-order-in-pr/index') ?>" id="cleanComand">
                    <i class="fa fa-file"></i> <span> Інше</span> <span class="caret"></span>
                </a>
            </li>
        </ul>

    </section>

</aside>
