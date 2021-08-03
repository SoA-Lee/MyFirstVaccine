import hashlib
import os

fp = open('eicar.txt','rb') # 바이너리 모드로 읽기
fbuf = fp.read()
fp.close()
m = hashlib.md5()
m.update(fbuf)
fmd5 = m.hexdigest()

# EICAR Test vkdlf MD5와 비교
if fmd5 == '44d88612fea8a8f36de82e1278abb02f' :
    print('Eicar Test Virus')
    os.remove('eicar.txt') #파일을 삭제해서 치료
elif :
    fmd5 == '77bff0b143e4840ae73d4582a8914a43' :
    print('Dummy Test Virus')
else :
    print('No Virus')