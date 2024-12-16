import mysql.connector 
import telebot
import codecs

bot = telebot.TeleBot('7889333592:AAGAzqV5Z7j58nKDoYWBYVAsHIrVtwu-VZ4')

@bot.message_handler(content_types=['text'])

def start(message):
    if message.text == "/start":
        bot.send_message(message.from_user.id, "Введите номер заказа")
        bot.register_next_step_handler(message, get_data)

def get_data(message):
  global id1
  id1=message.text

  cnx = mysql.connector.connect(user='root', password='root',
                                  host='localhost',
                                  port='3307',
                                  database='record_app',
                                  charset='utf8mb4')
    
  cursor = cnx.cursor()

  query = ("SELECT `orders`.`UserId`,`orders`.`Id`,`orders`.`Count`,`processes`.`Title`,`status`.`Title6`, `users`.`Id`, `users`.`Email` FROM `orders` " 
              "INNER JOIN `processes`"
              "ON `orders`.`ProcessId` = `processes`.`Id`"
              "INNER JOIN `status`"
              "ON `orders`.`Status` = `status`.`Id`"
              "INNER JOIN `users`"
              "ON `orders`.`UserId` = `users`.`Id`"
              "WHERE `users`.`Id`= '20' " 
              "ORDER BY `orders`.`Id` DESC ")

  id2=id1
  cursor.execute(query)
    
  rows = cursor.fetchall()

  for row in rows:
        bot.send_message(message.from_user.id,row[1])
        bot.send_message(message.from_user.id,(codecs.decode(row[3],'utf-8')))
        bot.send_message(message.from_user.id,(codecs.decode(row[4],'utf-8')))
  cursor.close()
  cnx.close()

bot.polling(none_stop=True, interval=0)

