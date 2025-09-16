
#include <stdio.h>
#include "isOdd.h"

int main(){
	int number;
	printf("Enter a number: ");
	scanf("%d", &number);

	if(isOdd(number))
		printf("%d is odd.\n");
	else
		printf("%d is even.\n");

	return 0;
}
