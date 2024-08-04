<?php

namespace App\Http\Pipelines;

use Closure;
use App\Models\Workspace;
use App\Models\MasterData\WebsiteMaster;

class WorkspaceFilter
{
    public function handle($content, Closure $next)
    {
        // Ambil Workspace dengan ID 1
        $workspace = Workspace::find(1);

        // Pastikan workspace ditemukan
        if (!$workspace) {
            return $next($content); // Atau tangani error jika diperlukan
        }

        // Ambil WebsiteMaster berdasarkan website_id dari Workspace
        $websites = WebsiteMaster::where('id', $workspace->website_id)->get();

        // Ekstrak array ID dari WebsiteMaster
        $websiteIds = $websites->pluck('id')->toArray();

        // Filter produk berdasarkan website_id yang ada dalam array ID
        $filteredProducts = $content->filter(function ($product) use ($websiteIds) {
            return in_array($product->website_id, $websiteIds);
        });

        return $next($filteredProducts);
    }
}
