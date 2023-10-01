<?php

declare(strict_types=1);

namespace App\Helper\Date;

use App\Helper\Response\ResponseInterface as CustomResponseInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class DateTimeHelper
{
    /**
     * validateDate.
     *
     * @param string $date
     * @param string $format
     */
    public function dateTimeFromString($date, $format = 'Y-m-d H:i'): \DateTime
    {
        if ($date === null || trim($date) === '') {
            throw new BadRequestHttpException(CustomResponseInterface::DATE_INVALID);
        }

        $dateTime = \DateTime::createFromFormat($format, $date);

        if ($dateTime === true && date_parse($date)['hour'] === false) {
            $dateTime->setTime(0, 0);
        }

        if (!$dateTime || $dateTime->format($format) !== $date) {
            throw new BadRequestHttpException(CustomResponseInterface::DATE_INVALID);
        }

        return $dateTime;
    }
}
