<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\it_IT;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+## ### ## ## ####',
        '+## ## #######',
        '+## ## ########',
        '+## ### #######',
        '+## ### ########',
        '+## #### #######',
        '+## #### ########',
        // According to http://it.wikipedia.org/wiki/Prefisso_telefonico#Elenco_degli_indicativi_in_Italia.2C_a_San_Marino_e_nel_Vaticano
        '0## ### ####',
        '+39 0## ### ###',
        '3## ### ###',
        '+39 3## ### ###',
    ];
}
