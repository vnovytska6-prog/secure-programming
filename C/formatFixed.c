#include <stdio.h>
#include <string.h>

// safe printing
 int main() {
 char input[100];
 char secret[] = "nmc83013";
    
 printf("Enter something: ");
 fgets(input, sizeof(input), stdin);
    
 size_t len = strlen(input);
 if (len > 0 && input[len-1] == '\n') {
 input[len-1] = '\0';
 }
    
 printf("You entered: ");
    
 // always use %s to print user input as a string
 // this prevents format string attacks
 printf("%s", input);          
    
 printf("\n");
 printf("(secret data in memory: %s)\n", secret);
    
 return 0;
}
