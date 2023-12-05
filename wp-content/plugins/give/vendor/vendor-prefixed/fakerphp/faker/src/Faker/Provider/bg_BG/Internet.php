<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\bg_BG;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'mail.bg', 'abv.bg', 'dir.bg'];
    protected static $tld = ['bg', 'bg', 'bg', 'bg', 'bg', 'bg', 'com', 'biz', 'info', 'net', 'org'];
}
