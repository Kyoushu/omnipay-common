<?php

namespace Omnipay\Common\Event;

use Omnipay\Common\GatewayInterface;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\ParameterBag;

class GatewayEvent extends Event
{

    /**
     * Triggered before each call to the method initialize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_INITIALIZE = 'pre_initialize';

    /**
     * Triggered after each call to the method initialize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_INITIALIZE = 'post_initialize';

    /**
     * Triggered before each call to the method authorize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_AUTHORIZE = 'pre_authorize';

    /**
     * Triggered after each call to the method authorize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_AUTHORIZE = 'post_authorize';

    /**
     * Triggered before each call to the method completeAuthorize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_COMPLETE_AUTHORIZE = 'pre_complete_authorize';

    /**
     * Triggered after each call to the method completeAuthorize() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_COMPLETE_AUTHORIZE = 'post_complete_authorize';

    /**
     * Triggered before each call to the method capture() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_CAPTURE = 'pre_capture';

    /**
     * Triggered after each call to the method capture() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_CAPTURE = 'post_capture';

    /**
     * Triggered before each call to the method purchase() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_PURCHASE = 'pre_purchase';

    /**
     * Triggered after each call to the method purchase() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_PURCHASE = 'post_purchase';

    /**
     * Triggered before each call to the method completePurchase() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_COMPLETE_PURCHASE = 'pre_complete_purchase';

    /**
     * Triggered after each call to the method completePurchase() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_COMPLETE_PURCHASE = 'post_complete_purchase';

    /**
     * Triggered before each call to the method refund() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_REFUND = 'pre_refund';

    /**
     * Triggered after each call to the method refund() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_REFUND = 'post_refund';

    /**
     * Triggered before each call to the method void() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_VOID = 'pre_void';

    /**
     * Triggered after each call to the method void() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_VOID = 'post_void';

    /**
     * Triggered before each call to the method acceptNotification() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_ACCEPT_NOTIFICATION = 'pre_accept_notification';

    /**
     * Triggered after each call to the method acceptNotification() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_ACCEPT_NOTIFICATION = 'post_accept_notification';

    /**
     * Triggered before each call to the method createCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_CREATE_CARD = 'pre_create_card';

    /**
     * Triggered after each call to the method createCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_CREATE_CARD = 'post_create_card';

    /**
     * Triggered before each call to the method deleteCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_DELETE_CARD = 'pre_delete_card';

    /**
     * Triggered after each call to the method deleteCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_DELETE_CARD = 'post_delete_card';

    /**
     * Triggered before each call to the method updateCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const PRE_UPDATE_CARD = 'pre_update_card';

    /**
     * Triggered after each call to the method updateCard() in a \Omnipay\Common\GatewayInterface implementation
     */
    const POST_UPDATE_CARD = 'post_update_card';

    /**
     * @var GatewayInterface
     */
    protected $gateway;

    /**
     * @var ParameterBag
     */
    protected $parameters;

    /**
     * @param GatewayInterface $gateway
     * @param ParameterBag|null $parameters
     */
    public function __construct(GatewayInterface $gateway, ParameterBag $parameters = null)
    {
        $this->gateway = $gateway;
        $this->parameters = $parameters ?: new ParameterBag();
    }

    /**
     * @return GatewayInterface
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @return ParameterBag
     */
    public function getParameters()
    {
        return $this->parameters;
    }

}