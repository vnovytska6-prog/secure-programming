#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[]){
int numbers[10];
int count = 0;
int total = 0;
float mean;

for(int i =1; i < argc && count < 10; i++){
numbers[count] = atoi(argv[i]);
total += numbers[count];
count++;
}

printf("Numbers read in were:\n");
for (int i =0; i < count; i++){
printf("%d\n", numbers[i]);
    }

printf("Accepted %d numbers as input\n", count);
mean = (float) total / count;
printf("Total = %d\n", total);
printf("Average = %f\n", mean);

return 0;
}


