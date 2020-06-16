// 중복체크 방지 변수
var idcheck = false;

$(function() {
    $("#btnEntry").click(register);
    $(".required", "#fEntry").focusin(restore);
    $("#btnIdCheck").click(idCheck);
});
// JS (1)

function register() {
    $("#fEntry").ajaxSubmit({
        url : "http://sample.devdic.com/php-example/member-register.php",
        type : "post",
        dataType : "text",
        beforeSubmit : function() {
            var valid = true;
            $(".required", "#fEntry").each(function() {
                var $el = $(this);
                if (!$el.val()) {
                    $el.effect("highlight");
                    valid = false;

                    return false; // 순환 처리에서 빠져 나옴.
                }
            });

// JS (2)
// each > 5개의 input 요소를 순회하면서 확인
// return false를 제거하면 다 이벤트효과

if (valid) {
	// 아이디 중복 체크 확인
    				if (!idcheck) {
        				$("#userid").parent().prev().children(".result")
  .text("아이디 중복 체크를 하시길 바랍니다.")
  .addClass("result-error");
        				valid = false;
    				}

				// 비밀번호 확인 입력 검증
    				var pwd = $("#passwd").val();
    				var repwd = $("#repasswd").val();
    				if (pwd != repwd) {
        				$("#passwd").parent().prev().children(".result")
        .text("확인 입력한 비밀번호가 다릅니다.")
		   .addClass("result-error");
        				valid = false;
    				}

// JS (3)

// 이메일 유효성 검증
    			var emailRegexp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;
    			var useremail = $("#email").val();
    			if (valid && !useremail.match(emailRegexp)) {
        			$("#email").parent().prev().children(".result")
    .text("이메일을 바로 입력하세요.").addClass("result-error");
        			valid = false;
    			}
}

return valid; // true가 반환되어야 폼 전송 처리

// JS(4)

       },
       success : function(response) {
            switch(response) {
                case "ID_DOES_NOT_EXIST" :
                break;
                case "PASSWD_DOES_NOT_EXIST" :
                break;
                case "EMAIL_DOES_NOT_EXIST" :
                break;
                case "NAME_DOES_NOT_EXIST" :
                break;
                case "OK" :
                    alert("회원 가입이 완료되었습니다.");
                    //location.reload();
                break;
                default :
                    alert("처리되지 못했습니다.");
            }
       }
   });
}

// JS(5)

function restore(e) {
    $(e.target).parent().prev().children(".result")
.text("").removeClass("result-error result-message");
}

// JS(6)

function idCheck() {
    var $userid = $("#userid");
    var userid = $userid.val();
    if (!userid) {
        $userid.effect("highlight");
        return;
    }

    $.post("http://sample.devdic.com/php-example/member-idcheck.php", {
            userid : userid
        }, function(responseText) {
            var $resultEl = $userid.parent().prev().children(".result");

            if (responseText == "OK") {
                idcheck = true;
                $resultEl.text("사용가능한 아이디입니다.").addClass("result-message");
            } else {
                idcheck = false;
                $resultEl.text("사용할 수 없는 아이디입니다.").addClass("result-error");
            }
        });
}

// JS(7)
