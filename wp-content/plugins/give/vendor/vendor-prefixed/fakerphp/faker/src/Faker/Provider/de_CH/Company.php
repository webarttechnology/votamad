<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\de_CH;

class Company extends \Give\Vendors\Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['AG', 'GmbH'];
}
