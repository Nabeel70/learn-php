<?php

declare(strict_types= 1);

function is_username_wrong(bool|array $result) 
{
    if(!$result){
        return true;
    }else{
        return false;
    }
}
