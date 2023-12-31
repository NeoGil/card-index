<?php

namespace App\Modules\Admin\Menu\Models;

use App\Modules\Admin\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    use HasFactory;

    const MENU_TYPE_FRONT = 'front';
    const MENU_TYPE_ADMIN = 'admin';

    ///perms


    public function scopeFrontMenu($query, User $user) {

        return $query->
        where('type', self::MENU_TYPE_FRONT)/*->*/
            /*whereHas('perms', function($q) use($user) {

            })*/
            ;
    }

    public function scopeMenuByType($query, $type) {
        return $query->where('type', $type)->orderBy('parent')->orderBy('sort_order');
    }
}
