#include <stdio.h>
#include <string.h>

// stack overflow 
 int main() {
 int level = 1;  // normal user
 char name[10];  // small buffer
 char temp[100]; // temporary big buffer
    
 printf("Enter your name: ");
    
 // read input into temp first
 fgets(temp, sizeof(temp), stdin);
 // remove newline
 temp[strlen(temp)-1] = '\0';
    
 // if temp has more than 10 chars, it will overflow name buffer
 strcpy(name, temp);
    
 printf("Hello %s\n", name);
    
 if (level >= 2) {
  printf("*** ADMIN ACCESS ***\n");
 } else {
 printf("Normal user\n");
 }
    
 printf("level = %d\n", level);
 return 0;
}
