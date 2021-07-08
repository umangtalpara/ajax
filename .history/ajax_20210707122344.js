$("#submit").click(function(e){
    e.preventDefault();
    console.log("submit button clicked");
    let nm = $("#name").val();
    let mn = $("#number").val();
    // console.log(nm);
    // console.log(mn);

    mydata = { name:nm, number:m n};
    // console.log(mydata);

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){
            console.log(data);
        },
    });
});