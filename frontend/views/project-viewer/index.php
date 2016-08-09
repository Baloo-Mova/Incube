<?php
/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

?>

<br/>
<div class="container">


    <div class="row page-title text-center">

        <h2>Проекти</h2>
    </div>
    <hr/>

    <div class="row">
        <div class="well well-sm">

            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                    </span>Список</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Сітка</a>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?=
                    Select2::widget([
                        'name' => 'kv-state-250',
                        'data' => ArrayHelper::map(common\models\EconomicActivities::find()->all(), 'id', 'name'),
                        'size' => Select2::MEDIUM,
                        'options' => ['placeholder' => 'Оберіть категорію', 'multiple' => false],
                        'pluginOptions' => [
                            'allowClear' => true,
                        ],
                        'pluginEvents' => [
                            "select2:select" => "function() {   
            $.ajax({
                url: 'load?id='+$(this).val(), 
                beforeSend: function() {
                        var tt  = '<center>Тут типо лейбл загрузки, сам придумаеш</center>';
                        $('#content').html(tt);
                },
                success: function(result){
                        $('#content').html(result);
                        
                }
            });  }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div id="products" class="row list-group">

   

        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="../img/projects_img/5korp_old.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#">Історичний екскурс у минувшину ЗНУ</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                        Поглибити знання студентів, викладачів та абітурієнтів про Запорізький національний університет</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead" style="color: #00d314; font-weight: bold;">
                                Безкоштовно</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://zaporogiekam.moy.su/P1012105.JPG" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#">Еко-проект «Оазис»</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                        Створити умови для еко-відпочинку людей, підвищити потенціал здоров’я українського населення, здолати безробіття на селі, підняти рівень життя мешканців сіл до європейських стандартів
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                               <?=number_format(rand(197500,197500),0,'.','.')?> грн.</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://www.medcent.ru/images/articles2/%D0%BA%D0%B0%D0%BA-%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D0%B4%D0%BE%D0%BC%D0%B0%D1%88%D0%BD%D0%B8%D0%B9-%D1%81%D1%8B%D1%80.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#">Виробництво домашнього сиру</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                        Метою інвестиційного проекту є виготовлення якісних натуральних харчових продуктів з місцевої сировини. Створення додаткових робочих місць у сільський місцевості Запорізькій області
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?=number_format(rand(188000,188000),0,'.','.')?> грн.</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://cs618830.vk.me/v618830939/21439/5-XqMaENRqs.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#">Надання іпотерапевтичних послуг дітям з особливими фізичними потребами та військовослужбовцям (як реабілітаційний компонент)</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                        Метою інвестиційного проекту є оздоровлення населення шляхом проведення оздоровчих, реабілітаційних, психокорекційних, розвиваючих, рекреаційних занять з використанням коня). Цільова аудиторія - інваліди та сім'ї з дітьми з обмеженими фізичними можливостями, особи, які перебувають у важкій життєвій ситуації, члени їх сімей, близькі
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?=number_format(rand(720000,720000),0,'.','.')?> грн.</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
         <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://www.forumdaily.com/wp-content/uploads/2016/03/DIY-Origami-Square-Paper-2.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#"> Маленький мандрівник</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                        Заповнення ніши ефірного простору телекомпаній якісним продуктом, який буде цікавим для наймолодших телеглядачів України
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?=number_format(rand(9000,100000),0,'.','.')?> грн.</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://iz.com.ua/images/stories/1_2013/04/24/390_1269902675.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <a href="#"> Інвестиційний проект зі створення навчально-науково-виробничої лабораторії з відтворення водних біоресурсів верхів'я Каховського водосховища</a></h4>
                    <hr/>
                    <p class="group inner list-group-item-text">
                    Метою інвестиційного проекту є створення у Запорізькій області навчально-науково-виробничої лабораторії з відтворення водних біоресурсів верхів'я Каховського водосховища для виробництва місцевого якісного зарибку представників прісноводної фауни р. Дніпро, у тому числі промислових та рідкісних червонокнижних видів за рахунок впровадження ресурсно- та енергоощадних, екологічно безпечних технологій отримання молоді риб у системах оборотного водозабезпечення (СОВ) та установках замкнутого водозабезпечення (УЗВ).    
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?=number_format(rand(662000,662000),0,'.','.')?> usd</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        



        <div id="content" class="project-viewer-content">

        </div>
    </div>
</div>
<div style="height: 500px"> </div>