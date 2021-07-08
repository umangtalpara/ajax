$(document).ready(function(){

//code for data show
function showdata(){
    $.ajax({
        url: "retrieve.php",
        method: "GET",
        dataType:'json',
        success:function(data){
            // console.log(data);
            if (data) {
                x =data;
            }else {
                x = "";
            }
            for(i=0; i< x.lenght; i++){
                console.log(x[i])
            }
            
        },
    });
}
showdata();

 //code for data insert   
$("#submit").click(function(e){
    e.preventDefault();
    console.log("submit button clicked");
    let nm = $("#name").val();
    let mn = $("#number").val();
    // console.log(nm);
    // console.log(mn);

    mydata = { name:nm, number:mn };
    // console.log(mydata);

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){
            // console.log(data);
            msg ="<div class='alert alert-dark mt-3'>" + data + "</div>";
            $("#msg").html(msg);
            $('#form')[0].reset();
        },
    });
});
});