# bx-features

## Интернет-магазин

### basket recalculate

Пересчет корзины на **js**  с использованием **ajax**

##### Для чего нужен:

* Для того, чтобы максимально упростить создание простых корзин
* Для того, чтобы не заморачиваться с написанием пересчета/etc и не лезть в битриксовые методы

##### Как использовать?

* Подключаете js
* Подключаете скрипты для пересчета (`\local\templates\blank\js\project.js`, объекты `Basket` и `Tools` из `CodeCraft`)
* Настраиваете:
 * `CodeCraft.Basket.options.basketSelector` - селектор обертки малой корзины; DOM-элемент с этим селектором
   заменяется на малую корзину, пришедшую в ответе 
 * `CodeCraft.Basket.options.productAddSelector` - селектор кнопки добавления товара в корзину
 * `CodeCraft.Tools.options.priceFormat.decimal` - количество нулей после запятой для форматирования цен
 * `CodeCraft.Tools.options.priceFormat.separator` - разделитель порядков для форматирования цен
 * `CodeCraft.Tools.options.priceFormat.decimalPoint` - разделитель целой и дробной части для форматирования цен
 * `CodeCraft.Tools.options.priceFormat.formatString` - строка формата для форматирования цен
* Навешиваете классы на необходимые элементы:
 * **В шаблоне малой корзины и шаблонах товаров:**
  * Тот, что указали в `CodeCraft.Basket.options.basketSelector` - на обертку малой корзины
  * Тот, что указали в `CodeCraft.Basket.options.productAddSelector` - на кнопку добавления элемента в корзину
 * **В корзине:**
  * `.js-update` - на элементы, по click или change на которые обновляется количество в корзину
  * `.js-delete` - на элемент, по click на который удаляется товар из корзины
  * `.js-basket-row` - на строку корзины
  * `.js-quantity` - на элемент с количеством товара
  * `.js-price` - на элемент со стоимостью позиции(цена * количество)
  * `.js-sum` - на общую сумму корзины
* Навешиваем необходимые data-атрибуты:
 * **В шаблонах товаров:**
  * `data-id`: ID товара (на кнопку добавления элемента в корзину)
 * **В корзине:**
  * `data-id`: ID корзины (на кнопку удаления позиции из корзины)
  * `data-id`: ID корзины (на строку корзины)
  * `data-price`: цена за одну единицу товара (на строку корзины)
  