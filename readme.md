# intern

## URL
http://waonn.sakura.ne.jp/intern/product    


## 概要
学外実習の一環としてDBを管理するwebシステムを構築する。    


## 開発環境
・Apache2.4.33 , MySQL15.1  
・Laravel Framework 5.7.22  
・PHP 7.2.6    


## 管理するDB
![image](https://user-images.githubusercontent.com/24446064/51794847-18167900-221e-11e9-9ab0-ecca43addb1e.png)  
・商品表 (t_products)  
商品番号 (product_no)  
商品名   (product_name)  
商品単価 (product_cost)    

・顧客表 (t_customer)  
顧客番号 (customer_no)  
顧客名   (customer_name)    

・受注表 (t_sales)  
受注番号 (sale_no)  
顧客名   (customer_no)  
受注日   (sale_day)    

・受注明細表 (t_salesdatas)  
受注明細番号 (salesdataid)  
受注番号     (sale_no)  
商品番号     (product_no)  
商品数量     (product_cnt)    


## 仕様
商品表のCRUD  
顧客表のCRUD  
受注表のCRUD  
受注明細表のCRUD  
