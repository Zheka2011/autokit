<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'date_end',
        'car_id',
        'client_id',
        'zip_id',
        'amt',
        'cost',
        'sum_cost',
        'price',
        'sum_price',
        'provisioner_id',
        'user_id',
        'status_id',
        'comment',
        'margin',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function OrdersCar()
    {
        return $this->belongsToMany(\App\Models\Car::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ClientOrders()
    {
        return $this->belongsToMany(\App\Models\Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ZipOrders()
    {
        return $this->belongsToMany(\App\Models\Zip::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function OrdersProvisioners()
    {
        return $this->belongsToMany(\App\Models\Provisioners::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserOrders()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function OrdersStatus()
    {
        return $this->hasMany(\App\Models\Status::class);
    }
}