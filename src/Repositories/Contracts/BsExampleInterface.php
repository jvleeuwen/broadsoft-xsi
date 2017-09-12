<?php

namespace Jvleeuwen\BroadsoftXSI\Repositories\Contracts;

interface BsExampleInterface
{
    function GetCallCentersBySlug($slug);
    function GetCallCenterMonitoring();
    function GetUsersBySlug($slug);
} 