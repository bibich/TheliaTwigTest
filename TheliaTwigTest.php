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

namespace TheliaTwigTest;

use Thelia\Core\Template\TemplateDefinition;
use Thelia\Module\BaseModule;

class TheliaTwigTest extends BaseModule
{
    /** @var string */
    const DOMAIN_NAME = 'theliatwigtest';

    public function getHooks()
    {
        return array(
            array(
                "type" => TemplateDefinition::FRONT_OFFICE,
                "code" => "twig.function-test",
                "title" => "Twig Hook Function Test",
                "block" => false,
                "active" => true
            ),
            array(
                "type" => TemplateDefinition::FRONT_OFFICE,
                "code" => "twig.function-test-2",
                "title" => "Twig Hook Function Test 2",
                "block" => false,
                "active" => true
            ),
            array(
                "type" => TemplateDefinition::FRONT_OFFICE,
                "code" => "twig.block-test",
                "title" => "Twig Hook Block Test",
                "block" => true,
                "active" => true
            ),
            array(
                "type" => TemplateDefinition::FRONT_OFFICE,
                "code" => "twig.block-test-2",
                "title" => "Twig Hook Block Test 2",
                "block" => true,
                "active" => true
            )
        );
    }
}
