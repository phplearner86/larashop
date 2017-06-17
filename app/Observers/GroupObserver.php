<?php  

namespace App\Observers;

use App\Group;

class GroupObserver
{
    public function creating(Group $group)
    {
        $group->slug = str_slug($group->name);
    }
}  

