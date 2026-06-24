<?php

namespace JeffersonGoncalves\Filament\Ban\Tests\Models;

use Cog\Contracts\Ban\Bannable as BannableContract;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements BannableContract
{
    use Bannable;

    protected $table = 'users';

    protected $guarded = [];
}
