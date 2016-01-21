var imgUrl = "phone.lkhealth.net/ydzx/business/whitebook2014/wechat_share_preview.png";
var lineLink = "http://phone.lkhealth.net/ydzx/business/whitebook2014/";
var descContent = '掌上药店.2014白皮书';
var shareTitle = '分享用药数据盛宴，你躺枪了吗？';
var appid = '';

function shareFriend() {
    WeixinJSBridge.invoke('sendAppMessage',{
        "appid": appid,
        "img_url": imgUrl,
        "img_width": "200",
        "img_height": "200",
        "link": lineLink,
        "desc": descContent,
        "title": shareTitle
    }, function(res) {
    })
}

function shareTimeline() {
    WeixinJSBridge.invoke('shareTimeline',{
        "img_url": imgUrl,
        "img_width": "200",
        "img_height": "200",
        "link": lineLink,
        "desc": descContent,
        "title": shareTitle
    }, function(res) {
    });
}

function shareWeibo() {
    WeixinJSBridge.invoke('shareWeibo',{
        "content": descContent,
        "url": lineLink,
    }, function(res) {
    });
}

// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
    // 发送给好友
    WeixinJSBridge.on('menu:share:appmessage', function(argv){
        shareFriend();
    });

    // 分享到朋友圈
    WeixinJSBridge.on('menu:share:timeline', function(argv){
        shareTimeline();
    });

    // 分享到微博
    WeixinJSBridge.on('menu:share:weibo', function(argv){
        shareWeibo();
    });
}, false);

//document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
//    /** 发送给好友 **/
//    WeixinJSBridge.on('menu:share:appmessage', function(argv){
//        WeixinJSBridge.invoke(_eventName,{
//        "appid": 'xxx',
//        "img_url": "",
//        "img_width": "320",
//        "img_height": "320",
//        "link": 'http://phone.lkhealth.net/ydzx/business/whitebook2014',
//        "desc": "2014中国网民健康白皮书",
//        "title": "找药、买药，上掌药！"
//        }, function(res) {
//            // 我是回调，很精彩，有ready，有执行，有后事
//        });
//    });
//
//    /** 分享到朋友圈 **/
//    WeixinJSBridge.on('menu:share:timeline', function(argv){
//        WeixinJSBridge.invoke(_eventName,{
//            "appid": 'xxx',
//            "img_url": "phone.lkhealth.net/ydzx/business/whitebook2014/wechat_share_preview.png",
//            "img_width": "320",
//            "img_height": "320",
//            "link": 'http://phone.lkhealth.net/ydzx/business/whitebook2014',
//            "desc": "2014中国网民健康白皮书",
//            "title": "找药、买药，上掌药！"
//        }, function(res) {
//            // 我是回调，很精彩，有ready，有执行，有后事
//        });
//    });
//
//    /** 分享到微博 **/
//    WeixinJSBridge.on('menu:share:weibo', function(argv){
//        WeixinJSBridge.invoke('shareWeibo',{
//            "content": "2014中国网民健康白皮书",
//            "url": 'http://phone.lkhealth.net/ydzx/business/whitebook2014',
//        }, function(res) {
//            // 我是回调，很精彩，有ready，有执行，有后事
//        });
//    });
//}, false);
