<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\da_DK;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    /**
     * @var array Danish phonenumber formats.
     */
    protected static $formats = [
        '+45 ## ## ## ##',
        '+45 #### ####',
        '+45########',
        '## ## ## ##',
        '#### ####',
        '########',
    ];
}
