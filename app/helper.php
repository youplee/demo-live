<?php
/**
 * DEMO
 *
 * @category    Helper
 * @package     Modules_Demo
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   BonCodeur
 */

if (! function_exists('json_error_response')) {

    /**
     * Send error response
     *
     * @param $code
     * @param $type
     * @param $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function json_error_response($code, $type, $message)
    {
        return response()->json(
            [
                'status' => [
                    'code' => $code,
                    'type' => $type,
                    'message' => $message
                ]
            ], 200
        );
    }
}

if (! function_exists('json_success_response')) {

    /**
     * Send success response
     *
     * @param $responses
     * @param int $code
     * @param string $type
     * @param string $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function json_success_response($responses = [], $code = 200, $type = 'success', $message = 'success')
    {
        return response()->json(
            [
                'result' => $responses,
                'status' => [
                    'code' => $code,
                    'type' => $type,
                    'message' => $message
                ],
            ], $code
        );
    }
}

















