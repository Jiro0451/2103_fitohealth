
function getDoctor(val) {
        $.ajax({
        type: "POST",
        url: "appointment/getDoctor",
        data:'place_id='+val,
        success: function(data){
                $("#doctor-list").html(data);
        }
        });
}

function getReason(val) {
        $.ajax({
        type: "POST",
        url: "process2.php",
        data:'reason_id='+val,
        success: function(data){
                $("#reason-list").html(data);
        }
        });
}


