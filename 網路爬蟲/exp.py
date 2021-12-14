from bs4 import BeautifulSoup
import binascii

with open("data.html") as fp:
    soup = BeautifulSoup(fp,"html.parser")

binDig = []

for item in soup.find_all('div', {'role':"option"}):
    binDig.append(int(item['aria-posinset']))

print(len(binDig))

flag=[]
for i in range(0,1040):
    flag.append(soup.find('div',{'aria-posinset':str(i)}).contents[0])
    if (i+1)%8==0:
    	
    	print(chr(int(''.join(flag), 2)), end='', flush=True)
    	#print(binascii.int(flag[:]))
    	flag=[]
