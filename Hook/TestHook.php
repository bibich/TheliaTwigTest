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

namespace TheliaTwigTest\Hook;

use Thelia\Core\Event\Hook\HookRenderBlockEvent;
use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;

/**
 * Class TestHook
 * @author Julien Chanséaume <julien@thelia.net>
 */
class TestHook extends BaseHook
{
    public function testFunction(HookRenderEvent $event)
    {
         $event->add(
            $this->render('test-function.html.twig')
        );
    }

    public function testFunction2(HookRenderEvent $event)
    {
        // Do something
        $poipoi = "";
    }

    public function testBlock(HookRenderBlockEvent $event)
    {
        $event
            ->add(
                [
                    'id' => '1',
                    'content' => $this->render('test-block.html.twig')
                ]
            )
            ->add(
                [
                    'id' => '2',
                    'class' => 'class2',
                    'content' => $this->render('test-block.html.twig', ["myVar" => "content 2"]),
                    'other' => 'other variable'
                ]
            )
        ;
    }

    public function testBlock2(HookRenderBlockEvent $event)
    {
        // Do something
        $poipoi = "";
    }
}
