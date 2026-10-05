#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]){
char name[11] = "Dave";

if (argc > 1){
strcpy(name, argv[1]);
}

printf("Hello %s!\n", name);
return 0;
}
