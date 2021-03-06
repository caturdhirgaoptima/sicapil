<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserModel */

$this->title = 'Set Dokumen';

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$this->title?>
        <small>Master Dokumen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>Master Dokumen</a></li>
        <li class="active">Set Dokumen</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
    
      <div class="row">
        <div class="col-md-7">
         		 <div class="box box-warning">
		            <div class="box-header with-border">
		              <h3 class="box-title">Set</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            		<?= $this->render('_form', [
			               'layanan' => $layanan,
			        		'listLayanan' => $listLayanan,
			        		'listDokumen' => $listDokumen,
						    ]) ?>
		            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      
    </section>
    <!-- /.content -->
  </div>