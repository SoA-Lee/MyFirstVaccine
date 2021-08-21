#!/usr/bin/python2.7
#-*-coding:utf-8 -*-
print("content-type:text/html; charset=utf-8\n")
import hashlib
import os
import sys
import zlib

# 주어진 파일을 암호화한다.
def  main() :
    if len(sys.argv) !=2 :
        print 'Usage : kmake.py [file]'
        return
    
    fname = sys.argv[1] # 암호화 대상 파일
    tname = fname
    
    fp = open(tname, 'rb')
    buf = fp.read()
    fp.close()
    
    buf2=zlib.compress(buf) # 대상 파일 내용을 압축한다.
    
    buf3 = ''
    for c in buf2:
        buf3 +=chr(ord(c)^0xFF)
        
    buf4 = 'KAVM'+buf3 # 헤더 생성
    
    f = buf4
    for i in range(3):
        md5 = hashlib.md5()
        md5.update(f)
        f=md5.hexdigest()
        
    buf4+=f # md5를 암호화된 내용 뒤에 추가한다.
    kmd_name=fname.split('.')[0]+'.kmd'
    fp=open(kmd_name,'wb') # 확장자로 암호 파일을 만든다.
    fp.write(buf4)
    fp.close()
    
    print '%s -> %s' %(fname, kmd_name)

if __name__ == '__main__' :
    main()
