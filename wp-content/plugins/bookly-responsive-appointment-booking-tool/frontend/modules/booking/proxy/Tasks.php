<?php
namespace Bookly\Frontend\Modules\Booking\Proxy;

use Bookly\Lib;

/**
 * @method static Lib\UserBookingData prepareUserData( Lib\UserBookingData $userData ) Prepare $userData slots for tasks.
 * @method static void                renderSkipButton( Lib\UserBookingData $userData ) Render 'Skip' button on time step.
 */
abstract class Tasks extends Lib\Base\Proxy
{

}