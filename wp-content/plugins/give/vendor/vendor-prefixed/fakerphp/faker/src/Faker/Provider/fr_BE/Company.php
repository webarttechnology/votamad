<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 03-November-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\fr_BE;

class Company extends \Give\Vendors\Faker\Provider\fr_FR\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL'];
}
