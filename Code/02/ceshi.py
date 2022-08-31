import sys
def send():
    # a1 = sys.argv[1]
    # a2 = sys.argv[2]
    re = sys.argv[1:]
    data = '1,2,3,4,5,' + ','.join(re) # 转字符串
    print(data)
if __name__ == '__main__':
    send()