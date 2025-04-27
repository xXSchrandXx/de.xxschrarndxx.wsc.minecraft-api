<?php

namespace minecraft\system;

use minecraft\action\ApiAction;
use wcf\system\application\AbstractApplication;

final class MINECRAFTCore extends AbstractApplication
{
    /**
     * @inheritDoc
     */
    protected $primaryController = ApiAction::class;
}
