<?php

namespace TripServiceKata\Trip;

use User;
use TripServiceKata\Exception\DependentClassCalledDuringUnitTestException;

class TripDAO
{
    public static function findTripsByUser(User $user)
    {
        throw new DependentClassCalledDuringUnitTestException('TripDAO should not be invoked on an unit test.');
    }
}
