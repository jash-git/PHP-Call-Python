import sys
import json
def send():
    dict = {'id':111, 'title':'测试title'}
    dict['data'] = sys.argv[1:]
    jsonArr = json.dumps(dict, ensure_ascii=False)//（涉及到中文字符的時候，需要指定ensure_ascii=False）
    print(jsonArr)
if __name__ == '__main__':
    send()