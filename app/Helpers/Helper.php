<?php

use Illuminate\Http\JsonResponse;

function baseResponse($status , $message, $data, $error, $http_code): JsonResponse
{
    return response()->json([
        'message' => $message,
        'status' => $status,
        'data' => $data,
        'error' => $error
    ], $http_code);
}

function tps_types($type)
{
    return match ($type) {
        'bsu' => 'Bank Sampah Unit',
        'bsi' => 'Bank Sampah Induk',
        'tps' => 'TPS',
        'tps3r' => 'TPS3R',
        'tpst' => 'TPST',
        default => 'belum diisi',
    };
}

function jenis_sampah($type)
{
    return match ($type) {
        'basah' => 'Basah',
        'kering' => 'Kering',
        default => 'belum diisi',
    };
}
