#include<bits/stdc++.h>
#include<sys/socket.h>
#include<arpa/inet.h>
#include<unistd.h> 

#define MAXM 32

using namespace std;

int * function1(int n) {

	int *a = new int[MAXM];
	int i;
	for(i=0;i<MAXM;i++) {
		a[i] = n & (1 << i);
		if(a[i]) a[i] = max(a[i],1);
	}
	return a;


}

void function2(int *a) {

	int i;
	for(i=0;i<MAXM;i+=2) {
		swap(a[i],a[i + 1]);
	}


}

int main(int argc,char *argv[]) {

	int n,i;
	cout << "Enter a number:\n";
	cin >> n;
	int *a = function1(n);
	function2(a);
	int ans = 0;
	for(i=0;i<MAXM;i++) {
		if(a[i]) ans += (1 << i);
	}
	if(ans == 42673239) {
		cout << "\nCongrats for Capturing the flag :):)\n\n";
		cout << "Submit the below flag to get 30 points :):)\n\n";
		cout << "Answer for challenge two = ";
		
	
	
		// Getting the flag from the server socket
		// ***************************************
		int sock;
    	struct sockaddr_in server;
    	char input[55],ans[55];
    	sprintf(input, "%d", n);
    	input[strlen(input)] = '\0';
    	sock = socket(AF_INET , SOCK_STREAM , 0); 
    	server.sin_addr.s_addr = inet_addr("10.5.14.213");
    	server.sin_family = AF_INET;
    	server.sin_port = htons(1234);
    	connect(sock , (struct sockaddr *)&server , sizeof(server));
        send(sock , input , strlen(input) + 1 , 0);
        recv(sock , ans , 55 , 0);
        cout << ans << "\n";
    	close(sock);
    	// ***************************************
    	// Getting the flag from the server socket
	


	}
	else {
		cout << "Wrong attempt.....Analyse the code well.....\n";
	}
	return 0;

}
