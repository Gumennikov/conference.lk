$(document).ready(function () {
   //Массив с обязатльными полями
   let fields = ["lastname", "firstname", "residence", "organization", "email", "section", "thesesTitle"];
   let pattern = new RegExp ("^[A-z0-9_-]+@[A-z0-9_-]+\.([A-z0-9]{1,6}\.)?[a-z]{2,6}$", "gm");
   let email = $("#email");
   // console.log(fields,email);

    $(".form").submit(function () {
        let errorText = false; // Флаг заполнения обязательных полей
        let errorCheckbox = false; // Флаг подтверждения (checkbox)
        let err_text = "";

        $(".form").find(":input").each(function () { // проходимся в цикле по полям формы
            for(let i = 0; i<fields.length; i++){ //проходимся по массиву обязательных полей
                if($(this).attr("name") == fields[i]){ // если проверяемое поле в массиве обязательных
                    if( !$.trim($(this).val()) ){ //если поле не заполнено
                        $(this).addClass("formError");
                        errorText = true;
                    } else {
                        // если поле заполнено, то убераем красную рамку
                        $(this).removeClass("formError");
                    }
                }
            }
        });

        //Проверка формата E-mail'а

        if(email.val() != ''){
            if(email.val().search(pattern) == -1){
                email.addClass("formError");
                errorText = true;
                err_text += "Поле E-mail не соответствует формату.<br>";
            }
        }


        // получаем значение checkbox'а
        let check = $("#confirm").prop("checked");
        if(!check){
            //если не отмечен checkbox
            $("#confirm").next().addClass("redText");
            errorCheckbox = true;
        } else {
            //если checkbox отмечен
            $("#confirm").next().removeClass("redText");
        }

        if (!errorText && !errorCheckbox) {
            //Есди нет ошибок в форме, то отправляем форму
            return true;
        } else {
            //Если поля не заполнены или не отмечен checkbox
            if(errorText) err_text += "Пожалуйста, заполните подсвеченные поля.<br>";
            if(errorCheckbox) err_text += "Пожалуйста, подтвердите свое согласие на публикацию.<br>";
            $("#messenger").hide().fadeIn(500).html(err_text);
            return false;
        }
    });



    // //Вывод картинки правильности заполненной формы email. Код не выполняется
    // //Ошибок несколько: 1) email.keyup = (fun... неправильное имя переменной или запись
    // //2) не устанавливается background
    // // Код бралс https://ruseller.com/lessons.php?id=152&rub=16
    // email.keyup = (function(){
    //     console.log(email);
    //     if (email){
    //         if (isValidEmail(email)) {
    //             $("#validEmail").style.backgroundImage = "url('img/validYes.png')";
    //         } else {
    //             $("#validEmail").style.backgroundImage = "url('img/validNo.png')";
    //         }
    //     } else {
    //         $("#validEmail").style.backgroundImage = "none')";
    //     }
    // });
    //
    // function isValidEmail(email) {
    //     let pattern = new RegExp (/^[A-z0-9_-]+@[A-z0-9_-]+\.([A-z0-9]{1,6}\.)?[a-z]{2,6}/gm);
    //     return pattern.test(email);
    // }


});