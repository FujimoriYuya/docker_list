<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redis;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class SampleController extends Controller
{
    public function test()
    {
        // redis 動作確認用
        $this->redis = Redis::connection('default');
        $this->redis->set('laravel', '2217');

        return "test";
    }
}
