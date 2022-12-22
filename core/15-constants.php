<?php

// case insensitive.
// global by default.
// starts with _ or letter.
// cannot be changed.
// define(name, value, case-insensitive)

define("TESTING", "Hello"); //internally saves "TESTING" as smaller case.

echo TESTING;

