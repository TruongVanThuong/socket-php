<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class socketController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.socket.index');
    }

    public function server(Request $request)
    {
        $url = $request->data;
        // Tạo kết nối socket
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket === false) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create socket',
            ]);
        }

        // Kết nối đến server
        $address = 'localhost'; // Địa chỉ IP của server
        $port = 12345; // Cổng của server
        $result = socket_connect($socket, $address, $port);
        if ($result === false) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to connect to socket server',
            ]);
        }

        // Gửi dữ liệu đến server
        $bytesSent = socket_write($socket, $url, strlen($url));
        if ($bytesSent === false) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to send data to socket server',
            ]);
        }

        // Nhận phản hồi từ server
        $response = '';
        while ($out = socket_read($socket, 2048)) {
            $response .= $out;
        }

        // Đóng kết nối socket
        socket_close($socket);

        // Xử lý phản hồi từ server (ví dụ: phân tích dữ liệu JSON)
        $responseData = json_decode($response, true);
        if ($responseData === null) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to parse response from socket server',
            ]);
        }

        // Trả về kết quả
        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $responseData,
        ]);
    }
}