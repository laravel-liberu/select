<?php

namespace LaravelLiberu\Select\Traits;

use Illuminate\Http\Request;

trait TypeaheadBuilder
{
    use OptionsBuilder;

    public function __invoke(Request $request)
    {
        $this->convert($request);

        return $this->response($request);
    }

    private function convert(Request $request)
    {
        $params = json_decode($request->get('params'), null, 512, JSON_THROW_ON_ERROR);

        $request->replace([
            'query' => $request->get('query'),
            'paginate' => $request->get('paginate'),
            'params' => json_encode($params?->params  ?? null, JSON_THROW_ON_ERROR),
            'searchMode' => $request->get('searchMode'),
            'pivotParams' => json_encode($params?->pivot ?? null, JSON_THROW_ON_ERROR),
            'customParams' => json_encode($params?->custom  ?? null, JSON_THROW_ON_ERROR),
        ]);
    }
}
