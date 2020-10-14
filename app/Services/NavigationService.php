<?php

namespace App\Services;

use App\Models\Navigation;

class NavigationService
{
    public function getNavBars($parentId = null, $allNavigations = null)
    {
        if (is_null($allNavigations)) {
            $allNavigations = Navigation::all();
        }

        return $allNavigations
            ->where('parent_id', $parentId)
            ->map(function (Navigation $navigation) use ($allNavigations) {
                $data = $navigation->toArray();
                $data['is_post_meta'] = false;
                if (! $navigation->children) {
                    return $data;
                }
                $data['children'] = ($this->getNavBars($navigation->id, $allNavigations))->toArray();
                return $data;
            });
    }
}
