<?php
/**
 * yii2-websocket
 *
 * @category  PHP
 * @package   Yii2
 * @copyright 2006-2018 YiiPlus Ltd
 * @license   https://github.com/yiiplus/yii2-websocket/licence.txt Apache 2.0
 * @link      http://www.yiiplus.com
 */
namespace yiiplus\websocket;

/**
 * Channel Interface.
 *
 * @author gengxiankun@126.com
 * @since 1.0.0
 */
interface ChannelInterface
{
    /**
     * 处理该 channel 的 WebSocket 信息
     *
     * @param object $server WebSocket Server
     * @param object $frame  客户端发来的数据帧信息
     */
    public function execute($server, $frame);
}