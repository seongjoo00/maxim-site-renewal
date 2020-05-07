function join_ok(form){
    var uname = document.getElementById("uname").value.replace(/\s/g, "");
    var uid = document.getElementById("uid").value.replace(/\s/g, "");
    var uid_hidden = document.getElementById("uid_hidden").value.replace(/\s/g, "");
    var pwd = document.getElementById("pwd").value.replace(/\s/g, "");
    var repwd = document.getElementById("repwd").value.replace(/\s/g, "");
    var email_check = document.getElementById("email_check");
    var email_ckeck_hidden = document.getElementById("email_ckeck_hidden");
    var reg_spc = /[`@~!#$%^&*|\\\'\";:\/?]/;
    var reg_gn = /[A-Z|a-z]/;
    var reg_num = /[0-9]/;
    var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;


    /* uname */
    if(!uname){
        alert("이름을 입력해 주세요.");
        uname.focus();
        return false;
    };
    if(reg_spc.test(uname) || reg_num.test(uname)){
        alert("이름에 특수문자 또는 숫자를 입력할 수 없습니다.");
        uname.focus();
        return false;
    };

    /* uid */
    if(!uid){
        alert("아이디를 입력해 주세요.");
        uid.focus();
        return false;
    };
    if(!exptext.test(uid)){
        alert("아이디는 이메일 형식으로 입력해주세요.");
        uid.focus();
        return false;
    };
    if(uid_hidden == "N"){
        alert("아이드를 중복체크 해주세요.");
        uid.focus();
        return false;
    };

    /* pwd */
    if(!pwd){
        alert("비밀번호를 입력해 주세요.");
        pwd.focus();
        return false;
    };
    var len = pwd.length;
    if(len < 8 || len > 16){
        alert("비밀번호는 8~16자 내외로 입력해 주세요.");
        pwd.focus();
        return false;
    };
    if(!reg_gn.test(pwd) || !reg_num.test(pwd)){
        alert("비밀번호는 영대소문자/숫자 조합으로 입력해 주세요.");
        pwd.focus();
        return false;
    };
    
    /* repwd */
    if(!repwd){
        alert("비밀번호를 확인을 입력해주세요.");
        repwd.focus();
        return false;
    };
    if(pwd != repwd){
        alert("비밀번호가 일치하지 않습니다.");
        repwd.focus();
        return false;
    };

    /* email_agree */
    if(email_check.checked){
        email_ckeck_hidden.disabled = true;
    };
    form.submit();
};
function cancel_btn(){
    location.href="./join_01.php";
};

function check_id(){
    window.open("id_check.php","p","width=320,height=250,left=800,top=500")
};
