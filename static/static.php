<?php

class BasketHandler
{
    public static $isOwned;
}

var_dump(BasketHandler::$isOwned);

BasketHandler::$isOwned = true;

var_dump(BasketHandler::$isOwned);

BasketHandler::$isOwned = false;

var_dump(BasketHandler::$isOwned);
