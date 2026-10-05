#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int isInteger(char *str) {
for(int i = 0; str[i] != '\0'; i++) {
if(str[i] < '0' || str[i] > '9') return 0;
}
return 1;
}

int main(int argc, char *argv[]) {
int numbers[10];
int count = 0;
int total = 0;
float mean;

for(int i = 1; i < argc && count < 10; i++) {
if(isInteger(argv[i])) {
numbers[count] = atoi(argv[i]);
total += numbers[count];
count++;
} else {
printf("Ignoring invalid input: %s\n", argv[i]);
}
}

printf("Numbers read in were:\n");
for(int i = 0; i < count; i++) {
printf("%d\n", numbers[i]);
}

printf("Accepted %d numbers as input\n", count);
mean = (float) total / count;
printf("Total = %f\n", total);
printf("Average = %f\n", mean);

return 0;
}
