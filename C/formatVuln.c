#include <stdio.h>
#include <string.h>

// format string vuln 
 int main() {
 char input[100];
 char secret[] = "btc031"; // secret data stored in memory
    
 printf("Enter something: ");
 fgets(input, sizeof(input), stdin);
    
 // safely remove newline
 size_t len = strlen(input);
 if (len > 0 && input[len-1] == '\n') {
  input[len-1] = '\0';
 }
    
 printf("You entered: ");
    
 // if user types %x, it will print values from the stack
 // this can leak secret data from memory
 printf(input);               
    
 printf("\n");
 printf("(secret data in memory: %s)\n", secret);
    
 return 0;
}
