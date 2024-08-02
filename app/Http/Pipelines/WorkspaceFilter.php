<?php

namespace App\Http\Pipelines;

use Closure;
use App\Models\Workspace;
use App\Models\MasterData\CompanyMaster;

class WorkspaceFilter
{
    public function handle($content, Closure $next)
    {
        $outletIds = CompanyMaster::pluck('id')->toArray();

        $workspaceIds = Workspace::whereIn('res_company_id', $outletIds)->pluck('id')->toArray();

        $filteredProducts = $content->filter(function ($product) use ($workspaceIds) {
            return in_array($product->workspace_id, $workspaceIds);
        });

        return $next($filteredProducts);

    }
}
