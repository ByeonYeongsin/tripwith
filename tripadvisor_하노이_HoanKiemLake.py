#-*- coding:utf-8 -*
import pymysql
from selenium import webdriver
import time
import pandas as pd

db = pymysql.connect(host='localhost', port=3306, user='root', password='1234', db='tripwith', charset='utf8')
cur = db.cursor()

for i in range (0,10,10):
    url_str = "https://www.tripadvisor.co.kr/Attraction_Review-g293924-d311070-Reviews-or"
    url_num = str(i)
    url_keyword = "-Lake_of_the_Restored_Sword_Hoan_Kiem_Lake-Hanoi.html"
    total_url = url_str +  url_num + url_keyword

    driver = webdriver.Chrome("C:\\Users\\김서영\\Downloads\\chromedriver_win32-2\\chromedriver.exe")
    driver.get(total_url)
    time.sleep(1)

    driver.find_elements_by_css_selector(".ulBlueLinks")[0].click()


for j in range(0,10,1):
    reviews =  driver.find_elements_by_css_selector(".review-container")
    rating_code = reviews[j].find_element_by_css_selector(".ui_bubble_rating")
    cls_attr=rating_code.get_attribute("class")
    cls_attr = str(cls_attr).split("ui_bubble_rating bubble_")
    star_value = int(cls_attr[1])
    star_value = star_value/10
#    print(star_value)

    time.sleep(1)


    Temp_review = reviews[j].find_element_by_css_selector(".partial_entry").text
    time.sleep(1)
    review = Temp_review.replace("\n"," ")
 #   print(review)
    cur.execute("""INSERT INTO review(trip_place,email,username,star_value,review) VALUES (%s,%s,%s,%s,%s);""",('호안끼엠 호수', 'X', 'unregistered',star_value,review))




#star_value
#review


db.commit()
db.close()
