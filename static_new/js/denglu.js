function getSign(){
    var tel = $("input[name=tel]").val();
    var pwd = $("input[name=pwd]").val();
    var jizhu = $("input[name=jizhu]").val();
    var uniqid = $("input[name=uniqid]").val();
    var yzm = $("input[name=yzm]").val();
    // V1
    // pwd = pwd.split("").reverse().join("");
    // pwd = window.btoa(unescape(encodeURIComponent(pwd)));
    // pwd = pwd.split("").reverse().join("");
    // pwd = window.btoa(unescape(encodeURIComponent(pwd)));
    var sign = md5(yzm+tel+uniqid);
    const data = {tel: tel, pwd: pwd, jizhu: jizhu, yzm:yzm, uniqid:uniqid, sign:sign,};
    return data;
}