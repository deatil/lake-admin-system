<?php

namespace app\database;

class Uninstall
{
    /**
     * 开始执行
     * @return boolean
     */
    public function run()
    {
        return true;
    }    

    /**
     * 完成后回调
     * @return boolean
     */
    public function end()
    {
        return true;
    }

}
