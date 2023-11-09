<?php $this->renderPartial('user/slider'); ?>

<?php $this->renderPartial('index/about'); ?>

<?php $this->renderPartial('index/service'); ?>

<?php $this->renderPartial('index/work',[
    "projects" => $projects
]); ?>

<?php $this->renderPartial('index/testimonial'); ?>

<?php $this->renderPartial('index/contact'); ?>


