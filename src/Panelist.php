<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class Panelist extends Model
{
    protected $insertResource = 'MostafaSewidan\Zoom\Requests\StorePanelist';

    protected $endPoint = 'webinars/{webinar:id}/panelists';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiMultipleDataField = 'panelists';

    protected $wrapInOnInsert = 'panelists';
    protected $wrapInEmptyArrayOnInsert = true;

    public function updateAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function approve()
    {
        return $this->updateAction('approve');
    }

    public function deny()
    {
        return $this->updateAction('deny');
    }

    public function cancel()
    {
        return $this->updateAction('cancel');
    }
}
