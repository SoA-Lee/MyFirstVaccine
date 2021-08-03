fp = open ('eicar.txt','rt') #바이너리 모드로 읽기
fbuf = fp.read()
if fbuf[0:3] == 'X5O' :
    print('Virus')
    os.remove('eicar.txt') #파일을 삭제해서 치료
else:
    print('No Virus')
fp.close()