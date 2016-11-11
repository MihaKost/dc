Для отправки запроса с помощью PHP вы можете использовать данный пример
<?php
    $url="https://api.dclink.com.ua/api/[Нужный Вам метод]"; //пример: https://api.dclink.com.ua/api/GetPrice
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array (
        'login' => 'YOUR_LOGIN',
        'password' => 'YOUR_PASSWORD',
        'доппараметр' => 'значение_доппараметра'
    )); //параметры запроса
    curl_setopt($ch, CURLOPT_URL, $url);
    $output = curl_exec($ch); //ответ
    curl_close($ch);
?>

Дополнительные параметры:
'showprice' => '1' - Покажет доступные ценовые колонки
'altname' => '1' - Полное название товара

Методы:
GetOrders - метод для получения расходных накладных, которые находятся в резерве и не приняты в обработку
SetOrder - метод для постановки резерва
GetExchangeRates - метод для получения курса валют
GetPicturesUrl - метод для получения URL картинок товаров
new
GetPicturesUrlByCategory - метод для получения URL картинок товаров в указанной категории
GetCategories - метод для получения списка категорий товаров
GetStoragesList - метод для получения списка складов
new
GetBnPrices - метод для получения списка товаров имеющегося в наличии и доступного к выписке по безналичному расчету
GetPrice - метод для получения списка товаров имеющегося в наличии
GetPriceByCategory - метод для получения списка товаров имеющегося в наличии в указанной категории
GetPriceByStorage - метод для получения списка товаров на указанном складе
GetPriceByCategoryByStorage - метод для получения списка товаров в указанной категории и на указанном складе
GetPriceByCategoryAll - метод для получения списка всех товаров имеющегося в наличии и доступного под заказ в указанной категории
GetPriceAll - метод для получения списка всех товаров имеющегося в наличии и доступного под заказ
new
GetMarkedDownGoodsPrice - метод для получения списка уцененного товара.

GetItemProperties - метод для получения списка всех доступных характеристик по кодам товаров. (ответ в JSON)
GetItemPropertiesByCategory - метод для получения списка всех доступных характеристик по категориям товаров. (ответ в JSON)
new
GetItemDescription - метод для получения описания по кодам товаров. (ответ в JSON)
new
GetItemDescriptionByCategory - метод для получения описания по категориям товаров. (ответ в JSON)
