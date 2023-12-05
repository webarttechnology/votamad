<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\es_VE;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+58 2## ### ####',
        '+58 2## #######',
        '+58 2#########',
        '+58 2##-###-####',
        '+58 2##-#######',
        '2## ### ####',
        '2## #######',
        '2#########',
        '2##-###-####',
        '2##-#######',
        '+58 4## ### ####',
        '+58 4## #######',
        '+58 4#########',
        '+58 4##-###-####',
        '+58 4##-#######',
        '4## ### ####',
        '4## #######',
        '4#########',
        '4##-###-####',
        '4##-#######',
    ];
}
