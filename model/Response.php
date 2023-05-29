<?php
namespace Model;

use Model\Exception;

class Response
{
    const SUCCESSFUL = 'success';

    const ERROR = 'error';
    
    public static function success($data = [], $code = null)
    {
        http_response_code(200);
        
        return [
            'status' => Response::SUCCESSFUL,
            'data' => $data ?? [],
            'code' => $code ?? Exception::SUCCESSFUL
        ];
    }
    
    public static function error($data = null, $code = null)
    {
        http_response_code(500);
        
        return [
            'status' => Response::ERROR,
            'data' => $data ?? [],
            'code' => $code ?? Exception::UNKNOWN
        ];
    }
}
