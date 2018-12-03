<?php
/**
 * 调度算法接口
 *
 * @author haobaif <haobaif@jumei.com>
 * @date 2018/11/30
 */
namespace Robin;

interface RobinInterface
{
    /**
     * 初始化服务权重
     *
     * @param array $services
     *
     * @return mixed
     */
    public function init(array $services);

    /**
     * 获取一个服务
     *
     * @return mixed
     */
    public function next();

}
