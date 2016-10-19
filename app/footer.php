<div class="modal" id="modalform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">&times;</button>
                <div class="modal-title"><center>Авторизація</center></div>
            </div>
            <div class="modal-body">
                <form id="authform" action="">
                    <div class="form-group">
                        <p><input type="text" class="form-control" placeholder="Login"></p>
                        <p><input type="password" class="form-control" placeholder="Password"></p>
                        <a href="#modalreg" role="button" data-toggle="modal" data-dismiss="modal">Новий користувач?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> Увійти
                    </button>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modalreg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">&times;</button>
                <div class="modal-title"><center>Реєстрація</center></div>
            </div>
            <div class="modal-body">
                <form id="regform" method="post">
                    <div class="form-group has-feedback">
                            <input type="text" name="login" id="login" class="form-control" placeholder="Login" required="">
                            <span class="glyphicon form-control-feedback"></span>
                    </div>            
                    <div class="form-group has-feedback">
                            <input type="password" name="password" id="firstpassword" class="form-control" placeholder="Password" required="">
                            <span class="glyphicon form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                            <input type="password" name="confirmpass" id="confirm" class="form-control" placeholder="Confirm password" required="">
                            <span class="glyphicon form-control-feedback"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="submiting" class="btn btn-primary"  value="" name="submit">Зареєструватися</button>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
    $('#submiting').on('mousedown', function(event) {
        
        event.preventDefault();

        var pas1 = $("#firstpassword").val();
        var pas2 = $("#confirm").val();
        
        $("#regform input[type='password']").each(function() {
        var formGroup = $(this).parents('.form-group');
        var glyphicon = formGroup.find('.form-control-feedback');
         
         
         
            if(pas1 != pas2)
            {
                formGroup.addClass('has-error');
                glyphicon.addClass('glyphicon-remove');
            } 
            else
            {
                formGroup.removeClass('has-error');
                glyphicon.removeClass('glyphicon-remove');   
            }
            
            });
            
            if (pas1 == pas2)
            {
               var form_data = $("#regform").serialize(); //собераем все данные из формы
                $.ajax(
                {
                    type: 'POST', 
                    url: "app/include/sendtobase.php",
                    data: form_data,
                    success: function() 
                    {
                           alert("Реєстраційні дані успішно відправлені");
                    }
                }
                );  
            }
            
            
  });
});
</script>


</body>
</html>

