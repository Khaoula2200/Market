<?php

namespace App\Handler;

use App\Form\CategoryFormType;
use App\Handler\Handler;
use App\Handler\HandlerInterface;

class CategoryHandler extends Handler implements HandlerInterface
{
    protected function getFormType(): string
    {
        return CategoryFormType::class;
    }
}
