x = open('Corrupted.jpg','rb')

y = open('Challenge8_Answer.jpg','wb')

byte = x.read(1)

while byte:
	temp = ord(byte) ^ 0xFF
	y.write(chr(temp))
	byte = x.read(1)

