<?php

namespace App\Http\Middleware;

use Closure;

class HidePasswordMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Lấy dữ liệu từ response của request
        $response = $next($request);

        // Xóa trường "password" khỏi mảng dữ liệu nếu tồn tại
        $responseData = json_decode($response->getContent(), true);

        echo '<pre style="color:red";>$responseData === '; print_r($responseData);echo '</pre>';
        $dataHome = $responseData['dataHome'];

        foreach ($dataHome as &$value) {
            if (isset($value['hidden'])) {
                unset($value['hidden']);
            }
        }

        $responseData['dataHome'] = $dataHome;

        // Cập nhật lại dữ liệu của response
        $response->setContent(json_encode($responseData));

        $responseDataNew = json_decode($response->getContent(), true);
        echo '<pre style="color:red";>$responseDataNew === '; print_r($responseDataNew);echo '</pre>';

        // return $response;
        // return $next($request);

        echo '<h3>Die is Called - hid password middlware</h3>';die;
    }
}
