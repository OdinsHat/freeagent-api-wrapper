<?php

namespace OdinsHat\FreeAgentApiV2\FreeagentApi;

class Estimates extends FreeAgentApiV2
{
    /**
     * Show all estimates
     *
     * @return [type] [description]
     */
    public function all()
    {

    }

    /**
     * Show recent estimates
     *
     * @return [type] [description]
     */
    public function recent()
    {

    }

    /**
     * Show draft estimates
     *
     * @return [type] [description]
     */
    public function draft()
    {

    }

    public function non_draft()
    {

    }

    public function sent()
    {

    }

    public function approved()
    {

    }

    public function rejected()
    {

    }

    public function invoiced()
    {

    }

    /**
     * Get estimate given specific id
     *
     * @param  integer $estimate the unique FreeAgent id for the estimate
     * @return [type]           [description]
     */
    public function get_estimate($estimate)
    {

    }

    public function all_by_contact($contact)
    {

    }

    /**
     * Get all estimates under a given project
     *
     * @param  integer $project the unique FreeAgent project id
     * @return [type]          [description]
     */
    public function all_by_project($project)
    {

    }

    /**
     * Get estimates by given invoice
     *
     * @param  integer $invoice the FreeAgent invoice id
     * @return [type]          [description]
     */
    public function all_by_invoice($invoice)
    {

    }

    /**
     * Mark an estimate as sent
     *
     * @return [type] [description]
     */
    public function mark_as_sent()
    {

    }

    public function mark_as_draft()
    {

    }

    public function mark_as_approved()
    {

    }

    public function mark_as_rejected()
    {

    }
}

?>