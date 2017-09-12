<?php

namespace Jvleeuwen\BroadsoftXSI\Repositories\Contracts;

interface BsUserInterface
{
    function SaveToDB($UserArray);
    function UserdbCompare($bsArray);
    function GetAllUsers();
    function SaveUserCallCenterServices($CallCenterServicesArray);
    function CallCenterServicesBsCompare($bsArray);
    function SetAcdState($userId, $acdState);
} 