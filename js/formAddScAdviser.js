let countOfFieldScAdv = 0; // Текущее число полей
let curFieldNameIdScAdv = 0; // Уникальное значение для атрибута name
let maxFieldLimitScAdv = 4; // Максимальное число возможных полей
function deleteFieldScAdv(a) {
    if (countOfFieldScAdv >= 1)
    {
        // Получаем доступ к ДИВу, содержащему поле
        let contDiv = a.parentNode;
        // Удаляем этот ДИВ из DOM-дерева
        contDiv.parentNode.removeChild(contDiv);
        // Уменьшаем значение текущего числа полей
        countOfFieldScAdv--;
    }
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}
function addFieldScAdv() {
    // Проверяем, не достигло ли число полей максимума
    if (countOfFieldScAdv >= maxFieldLimitScAdv) {
        alert("Число полей достигло своего максимума = " + maxFieldLimitScAdv);
        return false;
    }
    // Увеличиваем текущее значение числа полей
    countOfFieldScAdv++;
    // Увеличиваем ID
    curFieldNameIdScAdv++;
    // Создаем элемент ДИВ
    let div = document.createElement("div");
    // Добавляем HTML-контент с пом. свойства innerHTML
    div.innerHTML = "<nobr>" +
        // "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][Lastname]\">Фамилия<span class=\"green-dot\">*</span> :</label>" +
        // "<input name=\"scAdv[" + curFieldNameIdScAdv + "][Lastname]\" type=\"text\" value=\"scAdv[" + curFieldNameIdScAdv + "][Lastname]\"/></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][lastname]\">Фамилия<span class=\"green-dot\">*</span> :</label>" +
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][lastname]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][firstname]\">Имя<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][firstname]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][middlename]\">Отчетство:</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][middlename]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][status]\">Должность:</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][status]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][degree]\">Ученая степень:</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][degree]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][residence]\">Город<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][residence]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][organization]\">Организация<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][organization]\" type=\"text\" /></p> " +
        "<p><label for=\"scAdv[" + curFieldNameIdScAdv + "][organizationAddr]\">Адрес организации:</label>"+
        "<input name=\"scAdv[" + curFieldNameIdScAdv + "][organizationAddr]\" type=\"text\" /></p> " +
        "<a onclick=\"return addFieldScAdv()\" href=\"#\">" +
        "<img style=\"margin-left: 70%\" src=\"img/plus.png\"></a>" +
        "<a onclick=\"return deleteFieldScAdv(this)\" href=\"#\">" +
        "<img src=\"img/minus.png\"></a>" +
        "</nobr>";
    // Добавляем новый узел в конец списка полей
    document.getElementById("scAdvId").appendChild(div);
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}

// <input name="url[1]" type="text" style="width:300px;"/>
//     <p>
//     <label for="scAdvLastname">Фамилия<span class="green-dot">*</span> :</label>
// <input name="scAdvLastname[1]" id="scAdvLastname" value="<?= $_SESSION['res']['scAdvLastname'][1] ?>"/>
//     </p>
//     <p>
//     <label for="scAdvLastname">Имя<span class="green-dot">*</span> :</label>
// <input name="scAdvFirstname[1]" id="scAdvFirstname" value="<?= $_SESSION['res']['scAdvFirstname'][1] ?>"/>
//     </p>
//     <p>
//     <label for="scAdvLastname">Отчество:</label>
// <input name="scAdvMiddlename[1]" id="scAdvMiddlename" value="<?= $_SESSION['res']['scAdvMiddlename'][1] ?>"/>
//     </p>