<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace TheliaTwigTest\Controller;

use Thelia\Controller\Front\BaseFrontController;

/**
 * Class TestController
 * @author Julien Chanséaume <julien@thelia.net>
 */
class TestController extends BaseFrontController
{
    protected $useFallbackTemplate = true;

    public function indexAction()
    {
        $this->getRequest()->getSession()->getFlashBag()->setAll(
            [
                'test' => ['message test', 'message test - 2'],
                'test1' => ['message test 1'],
                'test2' => ['message test 2', 'message test 2 - 2', 'message test 2 - 3']
            ]
        );

        return $this->render('index');
    }
}
