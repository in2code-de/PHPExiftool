<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WBRGBLevelsShade extends AbstractTag
{

    protected $Id = 30757;

    protected $Name = 'WB_RGBLevelsShade';

    protected $FullName = 'Sony::SR2SubIFD';

    protected $GroupName = 'SR2SubIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2SubIFD';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WB RGB Levels Shade';

    protected $flag_Permanent = true;

}
