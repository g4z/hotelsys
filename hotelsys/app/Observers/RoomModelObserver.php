<?php

namespace App\Observers;

use App\Utils\UuidGenerator;

class RoomModelObserver
{
    /**
     * @param $transaction
     */
    public function creating($transaction)
    {
        $transaction->uuid = UuidGenerator::create();
    }

    /**
     *
     */
    public function created()
    {

    }

    /**
     *
     */
    public function updating()
    {

    }

    /**
     *
     */
    public function updated()
    {

    }

    /**
     *
     */
    public function saving()
    {

    }

    /**
     *
     */
    public function saved()
    {

    }

    /**
     *
     */
    public function deleting()
    {

    }

    /**
     *
     */
    public function deleted()
    {

    }

    /**
     *
     */
    public function restoring()
    {

    }

    /**
     *
     */
    public function restored()
    {

    }
}