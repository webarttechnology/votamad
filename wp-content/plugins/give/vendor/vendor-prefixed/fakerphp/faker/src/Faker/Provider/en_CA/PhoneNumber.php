<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\en_CA;

class PhoneNumber extends \Give\Vendors\Faker\Provider\en_US\PhoneNumber
{
    protected static $formats = [
        '%##-###-####',
        '%##.###.####',
        '%## ### ####',
        '(%##) ###-####',
        '1-%##-###-####',
        '1 (%##) ###-####',
        '+1 (%##) ###-####',
        '%##-###-#### x###',
        '(%##) ###-#### x###',
    ];
}
