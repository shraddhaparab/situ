<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trn_attachments_proforma_details extends Model
{
    protected $table = 'trn_attachments_proforma_details';
     
   protected $fillable = [
        'im_no','user_id','attachment','sub_model','quant','rate_unit','total_cost','total'
        ];
}
