<?php $action = Yii::$app->controller->action->id;
               // var_dump(!$action == 'contact');exit();
 if ($action != 'contact') {
                    echo $this->render(
                    'aside.php'
                );
                } ?>  