<?php

/** @var yii\web\View $this */

$this->title = 'Yii 2 Samples';
?>
<div class="site-index">
    <?=
        \yiidreamteam\jstree\JsTree::widget([
            'containerOptions' => [
                'class' => 'data-tree',
            ],
            'jsOptions' => [
                'core' => [
                    'multiple' => false,
                    'data' => [
                        'url' => [\yii\helpers\Url::to(['site/search'])],

                        'data' => new \yii\web\JsExpression('function (node) {return {\'id\': node.id};}')
                    ]
                ]
            ]
        ])
    ?>

    <div class="data-tree"></div>
</div>
