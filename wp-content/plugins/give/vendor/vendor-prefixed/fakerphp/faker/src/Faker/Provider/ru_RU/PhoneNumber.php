<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ru_RU;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '(812) ###-##-##',
        '(495) ###-####',
        '+7 (922) ###-####',
        '(35222) ##-####',
        '8-800-###-####',
    ];
}
