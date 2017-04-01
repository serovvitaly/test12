Перед тем как взять задание в работу, оцените его по времени и сообщите нам.

Мы ожидаем, что на выполнение будет потрачено оптимальное количество времени для достижения результата. То есть
не нужно зарываться в него на неделю чтобы вышлифовывать всё до блеска, но все заявленные требования должны
быть выполнены.

После реализации нужно прокоментировать предложенное решение, выбранные механизмы хранения и обработки
данных, оценить плюсы и минусы. Решение должно работать на больших объемах данных.
Исходный код проекта нужно разместить на github или bitbucket. 
В исходных текстах и имени проекта не должно быть упоминания компании.

### Задание:
Необходимо разработать веб-приложение простой платежной системы. 

### Требования:
1) В системe клиент соотносится с "кошельком", содержащим денежные средства в некой валюте. Сохраняется информация о имени клиента, стране и городе его регистрации, валюте кошелька и остатке средств на нем.
2) Клиенты могут делать друг другу денежные переводы в валюте получателя или валюте отправителя.
3) Сохраняется информация о всех операциях на кошельке клиента.
4) В системе существует информация о курсах валют (для всех зарегистрированных кошельков) к USD на каждый день.
5) Проект представляет из себя 2 основных части - HTTP API и страница с отчетом.
6) HTTP API должен представлять следующие интерфейсы:
- регистрация клиента с указанием его имени, страны, города регистрации, валюты создаваемого кошелька.
- зачисление денежных средств на кошелек клиента
- перевод денежных средств с одного кошелька на другой.
- загрузка котировки валюты к USD на дату
7) Отчет должен отображать историю всех операций по кошельку указанного клиента за период.
- Параметры: Имя клиента (обязательный параметр), Начало периода (необязательный параметр), конец периода (необязательный параметр).
- Необходимо также вывести общую сумму операций по счету за период в USD и валюте счета
- Должна быть предусмотрена возможность скачивания результатов отчета в файл (например, в CSV или XML формате).

### Примечания:
1) Авторизация/аутентификация на любой из частей сайта не обязательна. Все данные о пользователях, там, где это нужно, могут приходить в теле запроса одним из параметров.
2) При решении должна использоваться реляционная СУБД.
