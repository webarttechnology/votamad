<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\lv_LV;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    /**
     * {@link} https://en.wikipedia.org/wiki/Telephone_numbers_in_Latvia
     */
    protected static $formats = [
        '########',
        '## ### ###',
        '+371 ########',
    ];
}
