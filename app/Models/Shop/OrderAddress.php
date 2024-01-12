<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Shop\OrderAddress
 *
 * @property int $id
 * @property string $addressable_type
 * @property int $addressable_id
 * @property string|null $country
 * @property string|null $street
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $addressable
 * @method static \Database\Factories\Shop\OrderAddressFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAddress whereZip($value)
 * @mixin \Eloquent
 */
class OrderAddress extends Model
{
    use HasFactory;

    protected $table = 'shop_order_addresses';

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
