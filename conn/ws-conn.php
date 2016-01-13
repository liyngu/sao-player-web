<?php
$host = "http://localhost:8080/sao-player-api/ws/";
function http_request($url, $method="GET", $data) {
    global $host;
    $ch = curl_init();
    //设置URL
    curl_setopt($ch, CURLOPT_URL, $host.$url);
    //设置返回结果
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //设置请求方式
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    // 设置http头信息
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // 设置要提交的json字符串
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function http_get($url) {
    return json_decode(http_request($url), true);
}

function http_post($url, $data) {
    return json_decode(http_request($url,"POST", json_encode($data)), true);
}

function http_put($url, $data) {
    http_request($url, "PUT", json_encode($data));
}

function http_delete($url) {
    http_request($url, "DELETE");
}
?>
