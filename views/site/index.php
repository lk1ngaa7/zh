<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '后台首页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
			<div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">upload file</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form enctype="multipart/form-data"  class="form-horizontal" role="form" method="post"  action="/basic/web/index.php?r=site/upload">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                                <div class="col-md-9">
                                                    <input type="file" name="UploadForm[file]" id="exampleInputFile">
                                                    <p class="help-block"> please upload your excel file </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
			</div>
