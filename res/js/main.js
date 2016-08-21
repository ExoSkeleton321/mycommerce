$(document).ready(function(){
	var root = "http://localhost:8080/mycommerce/";
	//console.log(root);

	$(document).on("click", ".btnAdminLogin", function(){
		$.ajax({
			type: 'POST',
            url: root + 'res/php/login.php',
            data: {
                email: $('.txtEmail').val().trim(),
                pass: $('.txtPassword').val().trim()
            },
            success: function(data){
            	if(data == "true"){
            		location.reload();
            	}else{
            		console.log(data);
            	}
            }
		});
	});

    //Update site details (admin.php)
	$(document).on('click', '.btnUpdateSite', function(){
		var color        = $(".colorPicker").val().trim();
        var site_name    = $('.txtSiteName').val().trim();
        var site_phone   = $('.txtSitePhone').val().trim();
        var site_email   = $('.txtSiteEmail').val().trim();
        var site_letters = $('.fontColor:checked').attr("value")

        if(color      !== "" && 
           site_name  !== "" &&
           site_phone !== "" &&
           site_email !== ""){

            $(".colorPicker").css("border", "1px solid #ccc");
            $(".txtSiteName").css("border", "1px solid #ccc");
            $(".txtSitePhone").css("border", "1px solid #ccc");
            $(".txtSiteEmail").css("border", "1px solid #ccc");

    		$.ajax({
    			type: 'POST',
                url: root + 'res/php/ajaxRequests.php',
                data: {
                    type_req:       "admin",
                    request:        "update_site_details",
                    site_name:      site_name,
                    site_phone:     site_phone,
                    site_email:     site_email,
                    theme:          color,
                    site_letters:   site_letters
                },
                success: function(data){
                	if(data == "true"){
                		location.reload();
                	}else{
                        alert("No se pudo actualizar su información, por favor verifique la información e intente de nuevo.");
                		console.log(data);
                	}
                }
    		});
        }else{
            if(color == ""){
                $(".colorPicker").css("border", "1px solid red");
            }else{
                $(".colorPicker").css("border", "1px solid #ccc");
            }

            if(site_name == ""){
                $(".txtSiteName").css("border", "1px solid red");
            }else{
                $(".txtSiteName").css("border", "1px solid #ccc");
            }

            if(site_phone == ""){
                $(".txtSitePhone").css("border", "1px solid red");
            }else{
                $(".txtSitePhone").css("border", "1px solid #ccc");
            }

            if(site_email == ""){
                $(".txtSiteEmail").css("border", "1px solid red");
            }else{
                $(".txtSiteEmail").css("border", "1px solid #ccc");
            }
        }
	});

    //Show password new admin (admin.php)
    $('.chkShowPass').on('click', function(){
        if($('.chkShowPass').is(":checked")){
            $('.txtNewAdminPass').attr("type", "text");
            $('.txtNewAdminPassConfirm').attr("type", "text");

            $('.txtNewUserPass').attr("type", "text");
            $('.txtNewUserPassConfirm').attr("type", "text");

            console.log("show");
        }else{
            $('.txtNewAdminPass').attr("type", "password");
            $('.txtNewAdminPassConfirm').attr("type", "password");

            $('.txtNewUserPass').attr("type", "password");
            $('.txtNewUserPassConfirm').attr("type", "password");
        }
    });


    //New user register
    $('.btnRegisterUser').on('click', function(){
        var name        = $('.txtNewUserName').val().trim();
        var last_name   = $('.txtNewUserLastName').val().trim();
        var street      = $('.txtNewUserStreet').val().trim();
        var state       = $('.txtNewUserState').val();
        var city        = $('.txtNewUserCity').val();
        var local       = $('.txtNewUserLocal').val();
        var cp          = $('.txtNewUserCP').val().trim();
        var email       = $('.txtNewUserEmail').val().trim();
        var pass        = $('.txtNewUserPass').val().trim();
        var confirmPass = $('.txtNewUserPassConfirm').val().trim();

        if(name        !== "" && 
           last_name   !== "" && 
           street      !== "" && 
           state       !== "" && 
           city        !== "" && 
           local       !== "" && 
           cp          !== "" && 
           email       !== "" &&
           pass        !== "" && 
           confirmPass !== "" &&
           pass        === confirmPass &&

           state       !== "0"  &&
           city        !== "0"  &&
           local       !== "0"
        ){
            $('.txtNewUserName').css('border', '1px solid #ccc');
            $('.txtNewUserLastName').css('border', '1px solid #ccc');
            $('.txtNewUserStreet').css('border', '1px solid #ccc');
            $('.txtNewUserState').css('border', '1px solid #ccc');
            $('.txtNewUserCity').css('border', '1px solid #ccc');
            $('.txtNewUserLocal').css('border', '1px solid #ccc');
            $('.txtNewUserCP').css('border', '1px solid #ccc');
            $('.txtNewUserEmail').css('border', '1px solid #ccc');
            $('.txtNewUserPass').css('border', '1px solid #ccc');
            $('.txtNewUserPassConfirm').css('border', '1px solid #ccc');

            //Ajax call here
            $.ajax({
                type: 'POST',
                url: root + 'res/php/ajaxRequests.php',
                data: {
                    type_req:       "normal",
                    request:        "new_user",
                    user_name:      name,
                    user_last_name: last_name,
                    user_street:    street,
                    user_state:     state,
                    user_city:      city,
                    user_local:     local,
                    user_cp:        cp,
                    user_email:     email,
                    user_pass:      pass
                },
                beforeSend: function(){
                    $('.user_status_log').css({"float": "left"}).html("Cargando...");
                },
                success: function(data){
                    if(data == "true"){
                        $('.txtNewUserName').val("");
                        $('.txtNewUserLastName').val("");
                        $('.txtNewUserStreet').val("");
                        $('.txtNewUserState').val("");
                        $('.txtNewUserCity').val("");
                        $('.txtNewUserLocal').val("");
                        $('.txtNewUserCP').val("");
                        $('.txtNewUserEmail').val("");
                        $('.txtNewUserPass').val("");
                        $('.txtNewUserPassConfirm').val("");

                        console.log(data);
                        $('.user_status_log').css({"color": "green"}).html("Se dio de alta correctamente. Ya puede iniciar sesi&acute;n.");
                    }else if(data == "false"){
                        $('.user_status_log').css({"color": "red"}).html("No se pudo registrar su información, por favor verifique la información e intente de nuevo.");
                    }
                }
            });

        }else{
            if(name == ""){
                $('.txtNewUserName').css('border', '1px solid red');
            }else{
                $('.txtNewUserName').css('border', '1px solid #ccc');
            }

            if(last_name == ""){
                $('.txtNewUserLastName').css('border', '1px solid red');
            }else{
                $('.txtNewUserLastName').css('border', '1px solid #ccc');
            }

            if(street == ""){
                $('.txtNewUserStreet').css('border', '1px solid red');
            }else{
                $('.txtNewUserStreet').css('border', '1px solid #ccc');
            }

            if(state == "" || state == 0){
                $('.txtNewUserState').css('border', '1px solid red');
            }else{
                $('.txtNewUserState').css('border', '1px solid #ccc');
            }

            if(city == "" || city == 0){
                $('.txtNewUserCity').css('border', '1px solid red');
            }else{
                $('.txtNewUserCity').css('border', '1px solid #ccc');
            }

            if(local == "" || local == 0){
                $('.txtNewUserLocal').css('border', '1px solid red');
            }else{
                $('.txtNewUserLocal').css('border', '1px solid #ccc');
            }

            if(cp == ""){
                $('.txtNewUserCP').css('border', '1px solid red');
            }else{
                $('.txtNewUserCP').css('border', '1px solid #ccc');
            }

            if(email == ""){
                $('.txtNewUserEmail').css('border', '1px solid red');
            }else{
                $('.txtNewUserEmail').css('border', '1px solid #ccc');
            }

            if(pass == "" || pass !== confirmPass){
                $('.txtNewUserPass').css('border', '1px solid red');
            }else{
                $('.txtNewUserPass').css('border', '1px solid #ccc');
            }

            if(confirmPass == "" || pass !== confirmPass){
                $('.txtNewUserPassConfirm').css('border', '1px solid red');
            }else{
                $('.txtNewUserPassConfirm').css('border', '1px solid #ccc');
            }
        }
    });


});