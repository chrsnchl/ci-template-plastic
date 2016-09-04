$(function () {
    console.log("ready!");

    $('.contactform button').click(function () {
        return false;
        var email = $('input[name="email"]').val();
        var name = $('input[name="name"]').val();

        $.ajax({
            url: 'ajax_controller/submit_optin',
            type: 'POST',
            dataType: 'xml',
            data:
                    {
                        email: email,
                        name: contest_id,
                    },
            complete: function (xml, status)
            {
                console.log(xml.responseText); 
            }
        });

    });

});