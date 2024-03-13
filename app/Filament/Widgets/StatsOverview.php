<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $arr = [];
        foreach(Category::where('parent_id' , null)->get() as $category){
            $arr[] =
            Stat::make($category->title , $category->description ?? '');
        }
        return $arr;
    }
}
