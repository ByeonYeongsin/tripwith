import requests
import pymysql

db = pymysql.connect(host='localhost', port=3306, user='root', password='1234', db='tripwith', charset='utf8')
cur = db.cursor()

#다낭
cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('바나 힐', '베트남', '다낭','An Son, Hoa Ninh, Hoa Vang, TP.','1,487m 산 꼭대기에 위치한 테마파크, 5.8km에 달하는 케이블카를 타고 정상을 오르는 짜릿한 경험, 각종 놀이 시설뿐만 아니라 다양한 볼거리, 즐길 거리로 가득!'
,'https://vietnamguide.co.kr/wp-content/uploads/2018/12/%EB%8B%A4%EB%82%AD-%EB%B0%94%EB%82%98%ED%9E%90.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('미케 해변', '베트남', '다낭','1 Phan Dang Luu, Hai Chau, Da Nang','다낭을 대표하는 아름다운 해변, 포브스에서 선정한 세계 6대 해변, 주위에 레스토랑과 카페가 즐비','https://happist.com/wp-content/uploads/2017/07/%EB%AF%B8%EC%BC%80-%EB%B9%84%EC%B9%98-6195.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('다낭 대성당', '베트남', '다낭','Giao Xu Chinh Toa, Da Nang','1923년 건축된 가톨릭 성당, 다낭에 왔다면 꼭 들러야 할 명소, 분홍빛 외관이 아름다운 곳으로 사진 촬영 명소로도 인기',
'https://img1.daumcdn.net/thumb/R800x0/?scode=mtistory2&fname=https%3A%2F%2Ft1.daumcdn.net%2Fcfile%2Ftistory%2F224C1D34534A2E771B');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('오행산', '베트남', '다낭','81 Huyen Tran Cong Chuai, Ngu Hanh Son, Da Nang','다낭의 대표 관광 명소, 야트막한 산이지만 다낭 시내를 전망할 수 있어 인기, 다낭에서 호이안으로 가는 길에 위치','https://www.vietnamimmigration.com/wp-content/uploads/2012/12/non-nuoc-da-nang.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('영응사', '베트남', '다낭','Hoang Sa, Tho Quang, Son Tra, Da Nang',
'워낙 거대해 다낭 해안가에서도 보이는 레이디 붓다(Lady Buddha)가 위치, 아름다운 해안선으로 인해 드라이브 코스로도 유명, 다낭 전체를 멀리서 조망할 수 있는 곳',
'https://media.afar.com/uploads/images/post_images/images/kvJT6qLBYF/original_LadyBuddha_shutterstock.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('참 조각 박물관', '베트남', '다낭','2, 2 Thang 9, Hai Chau, Da Nang',
'100년이 넘은 유서 깊은 박물관, 참파 왕국의 화려했던 과거를 엿볼 수 있는 곳, 유네스코 세계 문화유산 '미선'에서 발굴된 유물 감상 가능',
'http://cfd.tourtips.com/@cms_800/2016120916/gjfcva/%EB%8B%A4%EB%82%AD_%EC%B0%B8%EC%A1%B0%EA%B0%81%EB%B0%95%EB%AC%BC%EA%B4%80_TTB(4).JPG');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('드래곤 브릿지', '베트남', '다낭','Nguyen Van Linh, Phuoc Ninh, Da Nang',
'다낭의 랜드마크인 용교, 밤이면 더욱 화려하게 빛나는 다리, 주말 저녁 9시에는 10분간 불 쇼를 진행',
'https://happist.com/wp-content/uploads/2017/08/%ED%95%9C%EA%B0%95-%EC%95%BC%EA%B2%BD-%EC%9A%A9%EB%8B%A4%EB%A6%AC-6766.jpg');""")


#하노이
cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('호안끼엠 호수', '베트남', '하노이','Hang Trong, Hoan Kiem','하노이 여행의 중심지, 호수 주변으로 맛집, 여행지 밀집, 여행 중 산책하기 좋은 곳','https://eleganthanoi.com/wp-content/uploads/sites/11/2014/09/EH-Hoan-Kiem-Lake-Hanoi-celebrate-60th-anniversary-liberation-day-Travel-to-Hanoi.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('구시가', '베트남', '하노이','Hanoi 100000, Vietnam','배낭여행자들이 머무는 곳, 수십 개의 작은 골목으로 이루어진, 36거리, 야시장과 맥주 거리 등 밤이면 놀거리로 가득','https://media.triple.guide/triple-cms/c_limit,f_auto,h_1024,w_1024/bd20d7f2-e54b-4c78-afd4-1c7f20d49a73.jpeg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('호치민 묘소', '베트남', '하노이','So 1, 84 Chua Lang, Lang Thuong, Dong Da','베트남의 국부인 호치민의 묘소, 바딘 광장 부근에 위치, 엄격한 내부 관람','https://upload.wikimedia.org/wikipedia/commons/0/0a/Ho_chi_minh_mausoleum.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('호치민 박물관', '베트남', '하노이','19 Ngach 158/19 Ngoc Ha, Doi Can, Ba Dinh','호치민 탄생 100주년을 기념하여 건립, 호치민 생을 알 수 있는 곳, 박물관 주변으로 주요 명소가 위치','https://media.triple.guide/triple-cms/c_limit,f_auto,h_2048,w_2048/d0e22f19-d01b-40ce-be94-733ccc2c2add.jpeg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('성 요셉 성당', '베트남', '하노이','So i, 40 Nha Chung, Hang Trong, Hoan Kiem','하노이의 대표적인 콜로니얼 건축물,파리 노트르담 대성당을 모티브로 한 외관, 성당 주변으로 카페와 기념품 샵들이 위치','https://pbs.twimg.com/media/DnqilYJUUAAePDQ.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('하롱베이', '베트남', '하노이','Ha Long, Quang Ninh, Viet Nam','베트남을 대표하는 여행지, 하롱베이
유네스코 세계 자연 유산에 등재, 아름다운 섬과 자연을 만날 수 있는 곳','https://post-phinf.pstatic.net/MjAxOTAzMjhfMSAg/MDAxNTUzNzczNTUyODM5.3uJ6RPxcm6TpJ-qIBQYJAsKJKf7nrx1Vn5yyB7wtZhEg.TEh1Dt4bSo110tYPH59SnotYZhRXGvy8CokEE7foVU0g.JPEG/image_9362541601553773518669.jpg?type=w1200');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('호아로 수용소', '베트남', '하노이','1 Hoa Lo, Tran Hung Dao, Hoan Kiem, Ha Noi','프랑스 식민 시기에 지어진 감옥, 베트남 독립투사들이 수감되었던 곳, 베트남 내전 당시, 미군 포로를 수용하기도','http://storage.doopedia.co.kr/upload/_upload/jwupload/image/201507/13/20150713142655970/20150713142655970_thumb_1024.JPG');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('응옥선 사당', '베트남', '하노이','Dinh Tien Hoang, Hang Trong, Hoan Kiem, HaNoi','호안끼엠 호수에 위치, 베트남 성인을 모시는 사당, 내부에 박재된 대형 거북이','https://www.indochinatravelpackages.com/wp-content/uploads/2015/06/Ngoc-Son-Temple-1.jpg');""")


#호치민
cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('전쟁 박물관', '베트남', '호치민','28 Vo Van Tan,Phuong 6, Quan 3, HCM',
'호치민에 왔다면 꼭 가 봐야 할 1순위 방문지, 가장 많은 여행자들이 방문하는 호치민 대표 관광지, 베트남 전쟁의 참상을 알 수 있는 곳',
'https://vietnamguide.co.kr/wp-content/uploads/2015/04/16565661086_6d302c9534_h-r100.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('통일궁', '베트남', '호치민','106 Nguyen Du, Quan 1, HCM','프랑스 식민 통치를 위해 지어진 건물, 사회주의 국가로 통일된 것을 기념하여 통일궁이라 불림, 호치민에서 전쟁 박물관과 함께 꼭 가 봐야 할 곳',
'https://scontent-msp1-1.cdninstagram.com/vp/83eafc92a3b2d021fa7c609f73363b28/5E1DA942/t51.2885-15/e35/66447283_505212426985517_2805212134336325447_n.jpg?_nc_ht=scontent-msp1-1.cdninstagram.com&_nc_cat=105');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('떤딘 성당', '베트남', '호치민','289 Hai Ba Trung, phuong 8, Quan 3, HCM','베이비 핑크색 외관의 성당으로 #핑크성당이라 불리는 곳, 여행자들 사이에서 포토존으로 인기, 호치민 가톨릭 역사에서 중요한 곳 중 하나',
'http://cdn-asia.heykorean.com.s3.ap-southeast-1.amazonaws.com/community/uploads/images/2019/08/1565945750.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('인민위원회 청사', '베트남', '호치민','86 Le Thanh Ton, Phuong Ben Nghe, Quan 1, HCM',
'프랑스 식민 지배기에 지어진 아름다운 건축물, 호치민의 대표 야경 명소, 청사 앞으로 드넓은 광장이 위치','https://holidaygolf.co.kr/wp-content/uploads/2019/07/travel-pages-9-1200x675.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('비텍스코 파이낸셜 타워', '베트남', '호치민','2 Hai Trieu, Ben Nghe, Quan 1, HCM','호치민에서 가장 높은 빌딩, 
호치민 어디에서나 볼 수 있는 랜드마크, 49층에 자리한 전망대에서 호치민 시내 전경을 한눈에','http://www.bitexcofinancialtower.com/wp-content/themes/responsive/core/images/3.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('노트르담 대성당', '베트남', '호치민','Cong xa Paris, Ben Hghe, Quan 1, HCM',
'호치민을 대표하는 콜로니얼 건축물, 아름다운 붉은색 외관이 돋보이는 성당, 중앙 우체국과 나란히 위치','https://media.triple.guide/triple-cms/c_limit,f_auto,h_2048,w_2048/04af3240-2dce-4aa3-9c3e-ef09ee92edc1.jpeg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('꾸찌터널', '베트남', '호치민','Phu Hiep, Phu My Hung, Cu Chi, HCM',
'베트남 전쟁의 상징적인 장소, 꾸찌 터널','https://www.wonderfulpackage.com/uploads/moxie/413069a1_bd03dafbdbd38c0705042e4fb2bf31ca_n.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('여행자 거리', '베트남', '호치민','De Tham, Pham Ngu Lao, Quan 1, HCM',
'호치민의 모든 여행자들이 모이는 핫한 거리,데탐(De Tham) 거리에서부터 부이 비엔(Bui Vien)거리까지, 주말 저녁(19:00~02:00)에는 차 없는 거리로 더욱 인산인해를 이루는 곳','http://cdn-asia.heykorean.com.s3.ap-southeast-1.amazonaws.com/community/uploads/images/2019/04/1556103112.jpg');""")


#나트랑
cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('빈펄랜드', '베트남', '나트랑','Hon Tre Island, Vinh Nguyen, Nha Trang 650000, Vietnam',
'베트남 그룹 VIN이 만든 테마파크. 동물원, 아쿠아리움, 워터파크, 놀이기구를 한 번에! 바다 위를 지나가는 케이블카 타는 묘미',
'http://cfd.tourtips.com/@cms_800/2018120313/gjfod8/%EB%82%98%ED%8A%B8%EB%9E%91_%EB%B9%88%ED%8E%84%EB%9E%9C%EB%93%9C_TTB%2810%29.jpg');""")

cur.execute("""INSERT INTO trip_info(trip_place,country_name,city_name,address,info,image) VALUES ('탑바 포나가르', '베트남', '나트랑','2 Thang 4, Vinh Phuoc, Thanh Pho Nha Trang, Khanh Hoa 650000',
'가장 오래된 참파 왕국의 사원 유적, 나트랑 여행자들의 필수 방문지, 늦은 오후에 방문할 것을 추천',
'https://post-phinf.pstatic.net/MjAxOTA2MTlfMjYg/MDAxNTYwOTI0Mzc0NDU0.pJ-uLTECWxyrfQ1QZg75_oSvtPW97nKx3Sqf-DyY54Yg.Or4hY5ublmEEAJSD3gDuktP14BhQDwXcE8mOGTla8LYg.JPEG/3_%ED%8F%AC%EB%82%98%EA%B0%80%EB%A5%B4_%EC%82%AC%EC%9B%90.jpg?type=w1200');""")




db.commit()
db.close()
