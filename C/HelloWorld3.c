#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]){
char name[11] = "Dave";

if (argc > 1){
if (strlen(argv[1]) > 10){
strncpy (name, argv[1], 10);
name[10] = '\0';
printf("Warning: Truncating submitted name %s\n", argv[1]);
printf("Hello %s!\n", name);
return 1;
}
strcpy(name, argv[1]);
}

printf("Hello %s!\n", name);
return 0;
}
