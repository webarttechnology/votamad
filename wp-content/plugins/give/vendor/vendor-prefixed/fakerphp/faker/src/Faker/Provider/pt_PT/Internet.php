<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\pt_PT;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'sapo.pt', 'clix.pt', 'mail.pt'];
    protected static $tld = ['com', 'com', 'pt', 'pt', 'net', 'org', 'eu'];
}
