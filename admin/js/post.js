$(document).ready(function(){
     //$("#loading").hide();  
});
function post() {
    var title = document.getElementById('title').value;
    var subject = document.getElementById('subject').value;
    var body = document.getElementById('hidden-field').value;
    //store all the submitted data in astring.
    var formdata = 'title=' + title + '&subject=' + subject + '&body=' + body;
    // validate the form input
    if (title == '' ) {
        alert("Please Enter Title");
        return false;
    }
    if(subject == '') {
        alert("Please Enter Title ");
        return false;
    }
    if(body == '') {
        alert("Please Enter Body");
        return false;
    }

    else {
        // $("#loading").show();  
    // AJAX code to submit form.
    $.ajax({
         type: "POST",
         url: "controllers/post.php", //call storeemdata.php to store form data
         data: formdata,
         cache: false,
         success: function(html) {
           document.getElementById("form").reset();   
             //$("#loading").hide();  
            window.location.reload();
         }
    });
    
    }
    return false;
}