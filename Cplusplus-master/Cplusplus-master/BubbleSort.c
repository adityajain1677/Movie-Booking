//implements bubble sort
#include <stdio.h>
#include <stdlib.h>

void printArray(int *arr, int n)
{
    int i;
    printf("{");
    for(i=0; i<n; ++i)
        printf(" %d", *(arr+i));
    printf(" }");
}

void bubbleSort(int *arr, int n)
{
    int i, j, temp;
    for(i=0; i<n; ++i)
    {
        for(j=0; j<n-i-1; ++j)
        {
            if (*(arr+j+1) < *(arr+j))
            {
                temp = *(arr+j);
                *(arr+j) = *(arr+j+1);
                *(arr+j+1) = temp;
            }
        }
    }
}

int main()
{
    int n, i;
    do
    {
        printf("\nEnter the number of elements in the array\n");
        scanf("%d", &n);
    }
    while (n<1);

    int *arr = (int *)calloc(n, sizeof(int));

    for(i=0; i<n; ++i)
    {
        printf("\nEnter element %d\n", i+1);
        scanf("%d", arr+i);
    }
    printf("\nDisplaying original array...");
    printArray(arr, n);

    bubbleSort(arr, n);

    printf("\nDisplaying sorted array...");
    printArray(arr, n);

    return 0;
}
