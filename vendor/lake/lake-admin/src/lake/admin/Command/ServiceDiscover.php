<?php

namespace Lake\Admin\Command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;

/**
 * 服务安装
 *
 * php think lake-admin:service-discover
 *
 * @create 2020-7-18
 * @author deatil
 */
class ServiceDiscover extends Command
{
    
    /**
     * 配置
     */
    protected function configure()
    {
        $this
            ->setName('lake-admin:service-discover')
            ->setDescription('Discover Services for lake-admin.');
    }

    /**
     * 执行
     */
    protected function execute(Input $input, Output $output)
    {
        $servicesFile = $this->app->getRootPath() . 'vendor/services.php';
        if (is_file($servicesFile)) {
            $services = include $servicesFile;
            
            $lakeAdminService = "Lake\\Admin\\Service";
            if (!empty($services)) {
                foreach ($services as $key => $service) {
                    if ($service == $lakeAdminService) {
                        unset($services[$key]);
                    }
                }
            }
            
            $services[] = $lakeAdminService;
            $services = array_values($services);
            
            $header = '// This file is automatically generated at:' . date('Y-m-d H:i:s') . PHP_EOL . 'declare (strict_types = 1);' . PHP_EOL;
            
            $content = '<?php ' . PHP_EOL . $header . "return " . var_export($services, true) . ';';
            
            file_put_contents($servicesFile, $content);
        }
        
        $output->info("<info>Lake-admin Discover Services successfully!</info>");
    }

}
