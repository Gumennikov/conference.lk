let countOfFieldsCoAuth = 0; // Текущее число полей для соавторов
let curFieldNameIdCoAuth = 0; // Уникальное значение для атрибута name
let maxFieldLimitCoAuth = 10; // Максимальное число возможных полей для соавторов
function deleteFieldCoAuth(a) {
    if (countOfFieldsCoAuth >= 1)
    {
        // Получаем доступ к ДИВу, содержащему поле
        let contDiv = a.parentNode;
        // Удаляем этот ДИВ из DOM-дерева
        contDiv.parentNode.removeChild(contDiv);
        // Уменьшаем значение текущего числа полей
        countOfFieldsCoAuth--;
    }
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}
function addFieldCoAuth() {
    // Проверяем, не достигло ли число полей максимума
    if (countOfFieldsCoAuth >= maxFieldLimitCoAuth) {
        alert("Число полей достигло своего максимума = " + maxFieldLimitCoAuth);
        return false;
    }
    // Увеличиваем текущее значение числа полей
    countOfFieldsCoAuth++;
    // Увеличиваем ID
    curFieldNameIdCoAuth++;
    // Создаем элемент ДИВ
    let div = document.createElement("div");
    // Добавляем HTML-контент с пом. свойства innerHTML
    div.innerHTML = "<nobr>" +
        // "<p><label for=\"scAdv[" + curFieldNameIdCoAuth + "][Lastname]\">Фамилия<span class=\"green-dot\">*</span> :</label>" +
        // "<input name=\"scAdv[" + curFieldNameIdCoAuth + "][Lastname]\" type=\"text\" value=\"scAdv[" + curFieldNameIdCoAuth + "][Lastname]\"/></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][lastname]\">Фамилия<span class=\"green-dot\">*</span> :</label>" +
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][lastname]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][firstname]\">Имя<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][firstname]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][middlename]\">Отчетство:</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][middlename]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][residence]\">Город<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][residence]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][organization]\">Организация<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][organization]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][organizationAddr]\">Адрес организации:</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][organizationAddr]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][email]\">E-mail:<span class=\"green-dot\">*</span> :</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][email]\" type=\"text\" /></p> " +
        "<p><label for=\"coAuth[" + curFieldNameIdCoAuth + "][tel]\">Телефон:</label>"+
        "<input name=\"coAuth[" + curFieldNameIdCoAuth + "][tel]\" type=\"text\" /></p> " +
        "<a onclick=\"return addFieldCoAuth()\" href=\"#\">" +
        "<img style=\"margin-left: 70%\" src=\"img/plus.png\"></a>" +
        "<a onclick=\"return deleteFieldCoAuth(this)\" href=\"#\">" +
        "<img src=\"img/minus.png\"></a>" +
        "</nobr>";
    // Добавляем новый узел в конец списка полей
    document.getElementById("coAuthId").appendChild(div);
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}