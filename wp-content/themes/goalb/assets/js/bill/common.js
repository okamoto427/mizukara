async function f_submit(cust_code,opportunity_code,item_id,item_name,price) {


    var order = new Order();
    order.pay_method            = "";
    //order.merchant_id           = "19788";
    order.merchant_id           = "96869";
    order.service_id            = "001";
    order.cust_code             = cust_code;
    order.sps_cust_no           = "";
    order.sps_payment_no        = "";
    order.order_id              = getUniqueID();
    order.item_id               = item_id;
    order.pay_item_id           = "";
    order.item_name             = item_name;
    order.tax                   = price*0.1;
    order.amount                = price;
    order.pay_type              = "0";
    order.auto_charge_type      = "";
    order.service_type          = "0";
    order.div_settele           = "";
    order.last_charge_month     = "";
    order.camp_type             = "";
    order.tracking_id           = "";
    order.terminal_type = isSmartPhone() ? "1" : "0";
    order.success_url           = "https://MIZUKARA.co.jp/settlement-thanks/";
    order.cancel_url            = "https://MIZUKARA.co.jp/script/sbps/MerchantPayCancel.cgi";
    order.error_url             = "https://MIZUKARA.co.jp/script/sbps/MerchantPayError.cgi";
    order.pagecon_url           = "https://MIZUKARA.co.jp/script/sbps/MerchantPayResultRecieveSuccess.cgi";
    order.free1                 = opportunity_code;
    order.free2                 = "";
    order.free3                 = "";
    order.free_csv_input        = "";
    order.request_date          = "20231014175944";
    order.limit_second          = "";
    //order.hashkey               = "398a58952baf329cac5efbae97ea84ba17028d02";
    order.hashkey               = "7ed32eac3558283d032cf7504a46aab9222a0ade";
    //日付更新
    order.request_date = getYYYYMMDDHHMMSS();
    // フリーCSV
    order.free_csv = btoa(encodeURIComponent(order.free_csv_input));
    //チェックサム
    order.sps_hashcode = await stringToSHA1Hash(order.toString())

    feppost(order);
  }

  // オブジェクト定義[OrderDetail]
  function OrderDetail() {
    this.toString = function () {
      var result =
        this.dtl_rowno +
        this.dtl_item_id +
        this.dtl_item_name +
        this.dtl_item_count +
        this.dtl_tax +
        this.dtl_amount +
        this.dtl_free1 +
        this.dtl_free2 +
        this.dtl_free3;
      return result;
    }
  }
  // 一意のIDを生成する関数
  function getUniqueID() {
    var timestamp = new Date().getTime().toString(16); // 現在のタイムスタンプを16進数文字列に変換
    var randomChars = Math.random().toString(36).substring(2, 10); // ランダムな文字列を生成
    var uniqueID = timestamp + randomChars; // タイムスタンプとランダム文字列を結合して一意のIDを生成
    return uniqueID;
  }


  // オブジェクト定義[Order]
  function Order() {
    this.orderDetail = new Array();
    this.toString = function () {

      var resultOrderDetail = "";
      for (i = 0; i < this.orderDetail.length; i++) {
        resultOrderDetail = resultOrderDetail + this.orderDetail[i].toString();
      }

      var result =
        this.pay_method +
        this.merchant_id +
        this.service_id +
        this.cust_code +
        this.sps_cust_no +
        this.sps_payment_no +
        this.order_id +
        this.item_id +
        this.pay_item_id +
        this.item_name +
        this.tax +
        this.amount +
        this.pay_type +
        this.auto_charge_type +
        this.service_type +
        this.div_settele +
        this.last_charge_month +
        this.camp_type +
        this.tracking_id +
        this.terminal_type +
        this.success_url +
        this.cancel_url +
        this.error_url +
        this.pagecon_url +
        this.free1 +
        this.free2 +
        this.free3 +
        this.free_csv +
        resultOrderDetail +
        this.request_date +
        this.limit_second +
        this.hashkey;
      return result;
    };
  }

  // 日時の取得
  function getYYYYMMDDHHMMSS() {
    var now = new Date();
    return now.getFullYear() + zeroPadding(now.getMonth() + 1) + zeroPadding(now.getDate()) +
      zeroPadding(now.getHours()) + zeroPadding(now.getMinutes()) + zeroPadding(now.getSeconds());
  }

  function zeroPadding(num) {
    if (num < 10) { num = "0" + num; }
    return num + "";
  }
  

  async function stringToSHA1Hash(inputString) {
    // 文字列をUTF-8エンコードする
    const encoder = new TextEncoder();
    const data = encoder.encode(inputString);
  
    // SHA-1ハッシュを計算する
    const buffer = await crypto.subtle.digest('SHA-1', data);
  
    // ハッシュを16進数文字列に変換する
    const hashArray = Array.from(new Uint8Array(buffer));
    const hashHex = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');
  
    return hashHex;
  }

  function isSmartPhone() {
    // UserAgentからのスマホ判定
    if (navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
      return true;
    } else {
      return false;
    }
  }

  function feppost(order) {

    //var connectUrl = "https://stbfep.sps-system.com/Extra/BuyRequestAction.do";
    //var connectUrl = "https://stbfep.sps-system.com/f01/FepBuyInfoReceive.do";
    var connectUrl = "https://fep.sps-system.com/f01/FepBuyInfoReceive.do";

    var form =
      $('<form></form>', { action: connectUrl, target: 'receiver', method: 'POST' }).hide();

    var body = $('body');
    body.append(form);
    form.append($('<input>', { type: 'hidden', name: 'pay_method', value: order.pay_method }));
    form.append($('<input>', { type: 'hidden', name: 'merchant_id', value: order.merchant_id }));
    form.append($('<input>', { type: 'hidden', name: 'service_id', value: order.service_id }));
    form.append($('<input>', { type: 'hidden', name: 'cust_code', value: order.cust_code }));
    form.append($('<input>', { type: 'hidden', name: 'sps_cust_no', value: order.sps_cust_no }));
    form.append($('<input>', { type: 'hidden', name: 'sps_payment_no', value: order.sps_payment_no }));
    form.append($('<input>', { type: 'hidden', name: 'order_id', value: order.order_id }));
    form.append($('<input>', { type: 'hidden', name: 'item_id', value: order.item_id }));
    form.append($('<input>', { type: 'hidden', name: 'pay_item_id', value: order.pay_item_id }));
    form.append($('<input>', { type: 'hidden', name: 'item_name', value: order.item_name }));
    form.append($('<input>', { type: 'hidden', name: 'tax', value: order.tax }));
    form.append($('<input>', { type: 'hidden', name: 'amount', value: order.amount }));
    form.append($('<input>', { type: 'hidden', name: 'pay_type', value: order.pay_type }));
    form.append($('<input>', { type: 'hidden', name: 'auto_charge_type', value: order.auto_charge_type }));
    form.append($('<input>', { type: 'hidden', name: 'service_type', value: order.service_type }));
    form.append($('<input>', { type: 'hidden', name: 'div_settele', value: order.div_settele }));
    form.append($('<input>', { type: 'hidden', name: 'last_charge_month', value: order.last_charge_month }));
    form.append($('<input>', { type: 'hidden', name: 'camp_type', value: order.camp_type }));
    form.append($('<input>', { type: 'hidden', name: 'tracking_id', value: order.tracking_id }));
    form.append($('<input>', { type: 'hidden', name: 'terminal_type', value: order.terminal_type }));
    form.append($('<input>', { type: 'hidden', name: 'success_url', value: order.success_url }));
    form.append($('<input>', { type: 'hidden', name: 'cancel_url', value: order.cancel_url }));
    form.append($('<input>', { type: 'hidden', name: 'error_url', value: order.error_url }));
    form.append($('<input>', { type: 'hidden', name: 'pagecon_url', value: order.pagecon_url }));
    form.append($('<input>', { type: 'hidden', name: 'free1', value: order.free1 }));
    form.append($('<input>', { type: 'hidden', name: 'free2', value: order.free2 }));
    form.append($('<input>', { type: 'hidden', name: 'free3', value: order.free3 }));
    form.append($('<input>', { type: 'hidden', name: 'free_csv', value: order.free_csv }));
    form.append($('<input>', { type: 'hidden', name: 'request_date', value: order.request_date }));
    form.append($('<input>', { type: 'hidden', name: 'limit_second', value: order.limit_second }));
    form.append($('<input>', { type: 'hidden', name: 'sps_hashcode', value: order.sps_hashcode }));
    form.attr('accept-charset', 'SHIFT_JIS');
    form.submit();
  }