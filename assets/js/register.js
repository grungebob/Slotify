$(document).ready(function(){
    console.log('wu tang foreva')
    $("#hideLogin").click(function(){
        console.log('login hider pressed');
        $("#loginForm").hide();
        $("#registerForm").show();

    });

    $("#hideRegister").click(function(){
        console.log('reg hider pressed');
        $("#loginForm").show();
        $("#registerForm").hide();

    });
})