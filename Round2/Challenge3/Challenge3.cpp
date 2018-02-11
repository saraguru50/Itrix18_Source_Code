#include<bits/stdc++.h>
#include<sys/socket.h>
#include<arpa/inet.h>
#include<unistd.h>
#define __________ int
#define _______00_ string
#define ______ main
#define ___00_____ s
#define _________ using
#define ____0_ cout
#define ____ cin
#define __0___ char
#define ______0000_0__(i,len) for(i=0;i<len;i++)
#define ___000____ argv
#define ___________00__ namespace
#define ______ main
#define __0000____ argc 
#define _________ using
#define _0_0__ else
#define __ std
#define _0_0__ else
#define _____________0__ return

_________ ___________00__ __;

__________ ______(__________ __0000____,__0___ *___000____[]) {

	_______00_ ___00_____,s2;
	
	____0_ << "Enter a string:\n\n";
	____ >> ___00_____;

	__________ i,len,c;
	len = ___00_____.length();

	__________ s1 = 15 + 150 * 26;

	______0000_0__(i,len) {
		__________ val = s1 % 26;
		c = (___00_____[i] - 'a' - val < 0) ? 
				(___00_____[i] - 'a' - val + 26) : (___00_____[i] - 'a' - val);
		s2 = (__0___)(c + 'a') + s2;
	}

	
	if(s2 == "xsetczrwlcpsatncldplndfzxlqpsedtdtse") {
		cout <<"\n\nYou have captured the flag :):)\n\n";
		 cout <<"Submit the below flag to get 50 points :):)\n\n";
		cout <<"Answer for challenge 3 = ";

	
		// Getting the flag from the server socket
		// ***************************************
		int sock;
    	struct sockaddr_in server;
    	char input[55],ans[55];
    	for(i=0;i<s.length();i++) {
    		input[i] = s[i];
    	}
    	input[i] = '\0';
    	sock = socket(AF_INET , SOCK_STREAM , 0); 
    	server.sin_addr.s_addr = inet_addr("127.0.0.1");
    	server.sin_family = AF_INET;
    	server.sin_port = htons(1235);
    	connect(sock , (struct sockaddr *)&server , sizeof(server));
        send(sock , input , strlen(input) + 1 , 0);
        recv(sock , ans , 55 , 0);
        cout << ans << "\n";
    	close(sock);
		// ***************************************
		// Getting the flag from the server socket
	

	}
	_0_0__ {
		____0_ << "Wrong attempt..... Analyse the code well.....\n";
	}
	
	_____________0__ 0;



}
