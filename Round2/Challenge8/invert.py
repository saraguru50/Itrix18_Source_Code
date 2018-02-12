x = open('challenge8_flag.jpg','rb')

y = open('challenge8_flag_invert.jpg','wb')

byte = x.read(1)

while byte:
	temp = ord(byte) ^ 0xFF
	y.write(chr(temp))
	byte = x.read(1)

