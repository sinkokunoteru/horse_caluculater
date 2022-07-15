import requests
from bs4 import BeautifulSoup
# Webページを取得して解析する

load_url = "https://race.netkeiba.com/top/calendar.html?year=2022&month=5"

html = requests.get(load_url)

soup = BeautifulSoup(html.text, "html.parser")

# HTML全体を表示する
print(soup)
