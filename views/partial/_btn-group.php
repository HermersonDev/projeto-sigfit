<?php
/* @var $this \yii\web\View */

use yii\helpers\Url;

$this->registerCssFile('@web/css/btns.css');
?>

<div id="btns" class="row">
    <div class="col-md-6">
        <div class="btn-group btn-group-sm" role="group" >
           <a class="btn bg-gray "
              href="<?= Url::to(['pessoa/usuarios']) ?>">
                Todos
            </a>
            <a class="btn bg-gray "
               href="<?= Url::to(['pessoa/alunos']) ?>">
                Alunos
            </a>
            <a class="btn bg-gray "
               href="<?= Url::to(['pessoa/servidores']) ?>">
                Servidores
            </a>
        </div>
        <div class="pull-right">
            <a href="<?= Url::to(['pessoa/create']) ?>"></a>
        </div>
    </div>
    <div class="col-md-6">
        <?= $this->render('../partial/_btn-registro') ?>
    </div>
</div>
