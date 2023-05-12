
## Порядок виконання роботи
1. Використовуючи утиліту phpMyAdmin, виконати імпорт готової БД за варіантом, ознайомитися з її структурою (за потреби, внести корективи).
2. За допомогою phpMyAdmin, доповнити дані. Довільний внесок до початкового вмісту бази зробить результати запитів менш передбачуваними та більш цікавими. Обов'язково зробити дамп БД.
3. Підготувати необхідні за варіантом SQL-запити до БД. Перевірити виконання запитів у phpMyAdmin, використовуючи довільні значення параметрів.
4. Створити веб-застосунок, що запитує в користувача параметри для запитів і виводить їхні результати. Використовувати при цьому підготовлені вирази (тобто звертатися до БД через методи prepare, execute та прив'язку значень параметрів, отриманих від користувача, засобами bindValue, bindParam або безпосередньо в execute).
### Рекомендації (дотримання яких спростить подальшу роботу):

- розділити код на стартову сторінку (на якій розташовано окремі форми для вказівки параметрів запитів), і окремі php-файли для обробників кожного запиту на отримання даних. У майбутньому це суттєво спростить модифікацію;
- оскільки код для створення підключення до БД для всіх запитів у межах одного варіанта завдання однаковий (тому що БД використовується одна), тому є сенс розмістити його в окремому php-файлі, і підключати (наприклад, через include) його за місцем вимоги, а не дублювати в кожному обробнику;
- на стартовій сторінці, елементи управління у формах для введення параметрів користувачем, де це має сенс, варто робити не текстовими полями, а списками, що випадають (формуючи їх на основі даних із БД). Це дасть змогу користувачеві обирати тільки можливі варіанти даних для запиту, а не вводити значення самостійно - це, окрім іншого, прискорить тестування вашої роботи;
- в елементах для введення значень параметрів, у тих випадках, коли їх реалізовано як звичайні текстові поля для введення (буває, що інакше неможливо), має сенс використовувати атрибут value зі значенням за замовчуванням. Це також спростить налагодження застосунка та його демонстрацію.
# Варіант 5. БД для зберігання інформації про [товари в інтернет-магазині](https://knureigs.github.io/itech/lb/ITech2_PDO/Additional/lb_pdo_goods.sql)

### Забезпечити виведення таких даних:
- товари обраного виробника;
- товари в обраної категорії;
- товари в обраному ціновому діапазоні.
