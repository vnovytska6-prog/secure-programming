#include <stdio.h>
#include <string.h>

// no overflow
 int main() {
 int level = 1;
 char name[10];
 char temp[100];
    
 printf("Enter your name (max 9 chars): ");
    
 fgets(temp, sizeof(temp), stdin);
 temp[strlen(temp)-1] = '\0';
    
 strncpy(name, temp, 9);
 name[9] = '\0';  
 printf("Hello %s\n", name);
    
 if (level >= 2)
 printf("*** ADMIN ACCESS ***\n");
 else
 printf("Normal user\n");
    
 printf("level = %d\n", level);
 return 0;
}
