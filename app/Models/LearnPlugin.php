<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\LearnPlugin
 *
 * @property int $id
 * @property string $category
 * @property string $name
 * @property string $plugin_url
 * @property string $implemented_url
 * @property string $use
 * @property string $status
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin query()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereImplementedUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin wherePluginUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnPlugin whereUse($value)
 * @mixin \Eloquent
 */
class LearnPlugin extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'category',
    'name',
    'plugin_url',
    'implemented_url',
    'use',
    'status',
    ];
}
