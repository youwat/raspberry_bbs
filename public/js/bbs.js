$(document).ready(function(){
    // 投稿処理
    var vote_success = function(msg) {
        alert( "Data Saved: " + msg );
    }

    // 各イベント分岐
    $("#id_vote_button").click(function(){
        $.ajax({
            type: "GET",
            url: "/bbs/ajax",
            success: vote_success
        });
    });
});
