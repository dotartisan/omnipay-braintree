<?php

namespace Omnipay\Braintree\Message;

/**
 * Create Subscription Request
 *
 * @method CustomerResponse send()
 */
class CreatePlanRequest extends AbstractRequest
{
    public function getData()
    {
        return $this->getPlanData();
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return SubscriptionResponse
     */
    public function sendData($data)
    {
        dd($this->braintree->plan());
        $response = $this->braintree->plan()->create($data);

        return $this->response = new PlanResponse($this, $response);
    }

    public function setPlanData($value)
    {
        return $this->setParameter('planData', $value);
    }

    public function getPlanData()
    {
        return $this->getParameter('planData');
    }
}
