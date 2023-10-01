<?php

declare(strict_types=1);

namespace App\Helper\Response;

interface ResponseInterface
{
    public const INVALID_FORM = 'Invalid form';

    public const DATE_INVALID = 'Date invalid';

    public const CATEGORY_INVALID = 'Category Invalid';

    public const USER_INVALID = 'User invalid';
    public const CUSTOMER_NOT_FOUND = 'Customer not found';

    public const NOT_ALLOWED = 'Not allowed';

    public const BAD_REQUEST = 'Bad request';

    public const REQUEST_FAILED = 'Request failed';
}
