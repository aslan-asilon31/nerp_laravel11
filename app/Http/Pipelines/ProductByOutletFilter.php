<?php

namespace App\Http\Pipelines;

use Closure;
use App\Models\Inventory;

class ProductByOutletFilter
{
    public function handle($content, Closure $next)
    {
        dd($content);
        $inventories = Inventory::where('res_company_id', $outletIds)->pluck('id')->toArray();

        $filteredProducts = $content->filter(function ($product) use ($workspaceIds) {
            return in_array($product->workspace_id, $workspaceIds);
        });

        return $next($filteredProducts);

    }
}
