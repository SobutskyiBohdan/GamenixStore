=== TelSender - Wp to telegram  СF 7, Events, Wpforms, Ninja forms, Wooccommerce ===
Contributors: pechenki
Tags: telegram, Сontact form 7 to telegram, Сontact form 7, Ninja forms, Ninja forms telegram , wooccommerce to telegram, Wpforms to telegram, wpforms to telegram
Requires at least: 4.8
Requires PHP: 5.6
Tested up to: 6.4
Stable tag: 1.14.13
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

TelSender - a plugin that works with contact form 7 and the woocommerce store in wordpress. It sends applications from forms to a chat telegram.

== Description ==
Електронна пошта це добре але не завжди швидко. Тому пропоную надсилати данні з форм на сайті в телеграм. Плагін дозволяє надсилати данні з таких форм які створенні через ContactForm,wpforms, а також перехоплювати будь які  POST запити на сервері.
Також є інтеграція з  wooccommerce, тепер всі нові замовленя будуть відправлятись і в телеграм. 

Переваги [TelsenderPro](https://coder.org.ua/dev/wordpress/telsender-pro)
- Надсилати файли
- Надсилати декільком користувачам
- Якщо чат використовує гілки, надсилати у відповідну гулку
- Вказати для ріних форм різні чати в телегра
- В подіяї можливість відслідковувати користувачів, що хочуть авторизуватись та заблокувати їх ip


Email is good, but not always fast. Therefore, I suggest sending data from forms on the site to Telegram. The plugin allows you to send data from such forms created through ContactForm, wpforms, as well as intercept any POST requests on the server.
There is also an integration with wooccommerce, now all new orders will be sent to Telegram.

Advantages of [TelsenderPro](https://coder.org.ua/dev/wordpress/telsender-pro)
- Send files
- Send to multiple users
- If the chat uses branches, send to the appropriate branch
- Specify different chats in Telegram for different forms
- In the event, you can track users who want to log in and block their IP


== Features ==

* Надсилає заявки з ContactForm 7 у телеграми;
* Надсилає заявки з wpforms у телеграми;
* Надсилає заявки з Ninja forms у телеграми;
* Надсилає повідомлення про Login Failed (Помилка входу в систему)
* Надсилає повідомлення про Login success ( Успішний вхід в систему)
* Перехоплення  Post запитів
* Надсилає замовлення з wooccommerce в телеграми;
* Повідомлення швидко досягають;
* Зручний у використанні;
* Ефективно;


* Sends requests from ContactForm 7 to telegrams;
* Sends requests from wpforms to telegrams;
* Sends requests from Ninja forms to telegrams;
* Sends Login Failed notification to emails
* Sends Login success notification (Successful login)
* Intercepts Post requests
* Sends orders from wooccommerce to telegrams;
* Messages reach quickly;
* Easy to use;
* Effective;


# Ninja forms
![Ninja forms](https://ps.w.org/telsender/assets/screenshot-3.gif)

== Installation ==

1- Install and activate
2- In the settings, enter the token and id of your chat.
3- in the forms below indicate which ones you want to receive in telegrams.

more details on the site

https://coder.org.ua/dev/wordpress/telsender

== Screenshots ==
1 - Basic settings
2 - Events
3 - Ninja Form
4 - Example message  wooccommerce


== Changelog ==
= 1.14.13 =
- fix many messages
- fix error


= 1.14.12 =
- CVE-2023-41683 - fix

= 1.14.11 =
- add integration ninja forms


= 1.14.10 =
 - fix error empty wooccommerce short tag

= 1.14.9 =
 - add log file
 - fix error

= 1.14.8 =
 - add chat id from wooccommerce
 - fix error

= 1.14.7 =
 - add FAQ page

= 1.14.5 =
- add function TelsenderSendMessages
- fix translate


= 1.14 =
_Add event_
- [x] Login Failed
- [x] Login success
- [x] Post interception
- [x] Woocommerce Add To Cart


= 1.13 =
* remove telsender tskey
* fix errors

= 1.12.3 =
* fix bags save to log
= 1.12.1 =
* add button tested, return list id chats
* fix update message WC

= 1.12 =

* message has been changed and not re-sent woocomerce

= 1.11.1 =
* do not send empty fields wp forms
= 1.11.0 =
* support php 8


= 1.10.8 =
* fix status change

= 1.10.7 =
* fix to empty product is message telegram

= 1.10.6 =
* fix multiple shortcodes per line

= 1.10.5 =
* add option Send all new order 
* fix curl function


= 1.10.4 =
* fix multiple shortcodes per line

= 1.10.3 =
* fix error js codemirror
* fix error is empty status settings 

= 1.10.11 =
* fix error js codemirror
= 1.10.1 =
* fix dublication message

= 1.10.0 =
* fix html wc temlated
* filter status order Fixed
* add new shortcode  {products_v3} - all options product

= 1.0.6 =
* add shortcode woocommerce


= 1.0.4 =
* fix languages
= 1.0.3 =
* fix error
= 1.0.2 =
* add filter status order
= 1.0.0 =

* Add template woocommerce

= 0.9.7 =
* Fixed eroor, fix send wpform, add languages files
= 0.9.6 =
0.9.2 - Fixed. The settings were not saved. problems in working with telsender_bot
0.9.2.1 - Fixed. The settings were not saved. did not accept the character "_"
0.9.3 - Fixed a bug where the service [_user_agent] was used and the request was not sent to telegrams
0.9.3.1 - Add payment_method wooccommerce to telegram
0.9.3.3 - Add shoping_method wooccommerce to telegram
0.9.3.4 - Limit form to set all
0.9.4 - fix error "_"
0.9.5 - Add meta data product to Messages
0.9.6 - Fixed eroor, add send to wpforms
0.9.7 - Fixed eroor, fix send wpform, add languages files





Для Работы нужен Сurl
