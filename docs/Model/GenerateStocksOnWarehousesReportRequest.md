# # GenerateStocksOnWarehousesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | [optional]
**business_id** | **int** | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | [optional]
**warehouse_ids** | **int[]** | Фильтр по идентификаторам складов (только модель FBY). Чтобы узнать идентификатор, воспользуйтесь запросом [GET v2/warehouses](../../reference/warehouses/getFulfillmentWarehouses.md). | [optional]
**report_date** | **\DateTime** | Фильтр по дате (для модели FBY). В отчет попадут данные за **предшествующий** дате день.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете (кроме модели FBY). | [optional]
**has_stocks** | **bool** | Фильтр по наличию остатков (кроме модели FBY). | [optional]
**campaign_ids** | **int[]** | Фильтр по магазинам для отчета по кабинету (кроме модели FBY).  Передавайте вместе с &#x60;businessId&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
