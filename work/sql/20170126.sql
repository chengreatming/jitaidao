

user

user_id		自增
user_name
user_sex
user_avatar
user_birth
user_register_time	current_timestamp
user_valid tinyint(1)  default 1


news

news_id int(10)
news_category tinyint(1) 1 新闻  2 公告
news_summary char(255) "woshi"
new_sample char(50) a31231231.jpg
news_title char(100)
news_content text
news_create_time
news_valid

git status
git add .
git commit -m "add news template"
git pull xxxxx
git push xxxxx