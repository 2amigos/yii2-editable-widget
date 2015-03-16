<?php
/**
 *
 * EditableActionTest.php
 *
 * Date: 17/03/15
 * Time: 00:07
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */

namespace tests;

use Yii;
use yii\web\Controller;

class EditableActionTest extends TestCase
{
    public function testAction() {
        $controller = new FakeController('fake', Yii::$app);

    }
}

class FakeController extends Controller
{
    public $result;
    public $behaviors = [];

    public function behaviors()
    {
        return $this->behaviors;
    }

    public function actions() {
        return [
            ''
        ];
    }
}
