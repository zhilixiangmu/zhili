<?php
$str = $_REQUEST["orderId"];
file_put_contents("success.txt",$str."\n", FILE_APPEND);
// exit();
   $returnArray = array( // 返回字段
            "orderId" => $_REQUEST["orderId"], // 商户代付订单号
            "status" =>  $_REQUEST["status"], // 代付结果 （processed =收款方银行返回金额已经到账）
            "remarks" =>  $_REQUEST["remarks"], // 代付结果描述/失败原因
            "amount" =>  $_REQUEST["amount"] // 字段， 订单金额
        );
        $md5key = "q26weylror5kp0i08d4vfpdovqrp3eyl";
        // ksort($returnArray);
        // reset($returnArray);
        // $md5str = "";
        // foreach ($returnArray as $key => $val) {
        //     $md5str = $md5str . $key . "=" . $val . "&";
        // }
        // $sign = strtoupper(md5($md5str . "key=" . $md5key));
        // if ($sign == $_REQUEST["sign"]) {
        //     if ($_REQUEST["returncode"] == "00") {
        //           $str = "交易成功！智联易付订单号：".$_REQUEST["orderid"];
        //           file_put_contents("success.txt",$str."\n", FILE_APPEND);
        //           exit("ok");
        //     }
        // }
?>