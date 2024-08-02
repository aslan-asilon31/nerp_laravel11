<?php
namespace Neo\Modules\HumanResource\Http\Pipelines\QueryFilters;


class Status extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('record_status', request($this->filterName()));
    }
}
