<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalProduct extends BaseWidget
{
    protected function getStats(): array
    {
        $reserve = Product::all()->count();
        $tagging = Tag::all()->count();
        $cat = Category::all()->count();
        $user = User::all()->count();
        return [
            //
            Stat::make(' ', $reserve)
                ->description('Total Produk')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('success'),
            Stat::make('Jumlah Tag', $tagging),
            Stat::make('Jumlah Kategori', $cat),
            Stat::make('Jumlah User', $user),
        ];
    }
}
