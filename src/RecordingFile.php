<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class RecordingFile extends Model
{
    public function recording()
    {
        return $this->belongsTo(Recording::class);
    }
}
