#include <stdio.h>

int main() {
    int nums[10];   // extra input which help to detect overflow
    int count = 0;
    int max;

    printf("Enter the integers, no more than 5 of them, each separated by a comma\n");

    // Reads numbers separated by commas
    while (scanf("%d", &nums[count]) == 1) {
        count++;

        if (getchar() != ',')   
            break;
    }

    if (count == 0) {
        printf("No numbers entered.\n");
        return 0;
    }

    max = nums[0];

    int limit = count;
    if (count > 5) {
        printf("Warning: %d numbers entered!\n", count);
        limit = 5;
    }

    // Find max of first 5 (or fewer)
    for (int i = 1; i < limit; i++) {
        if (nums[i] > max)
            max = nums[i];
    }

    if (count > 5)
        printf("Maximum of the first 5 numbers entered is %d\n", max);
    else
        printf("Maximum number entered is %d\n", max);

    return 0;
}
